<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;

class PaypalService
{

    use ConsumesExternalServices;

    protected $baseUrl;

    protected $clientId;

    protected $clientSecret;

    public function __construct()
    {
        $this->baseUrl = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
    }


    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }


    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handlePayment(Request $request)
    {

        $order = $this->createOrder($request->total, 'mxn');

        $orderLinks = collect($order->links);

        $approve = $orderLinks->where('rel', 'approve')->first();

        session()->put('approveId', $order->id);

        return redirect($approve->href);
    }

    public function handleApproval()
    {
        if (session()->has('approveId')) {
            $approvalId = session()->get('approveId');

            $payment = $this->capturePayment($approvalId);

            $name = $payment->payer->name->given_name;

            return redirect()->route('page.index')->with("success", "¡Gracias {$name}!, Enviaremos su pedido lo antes posible");
        }

        return redirect()->route('page.index')->with('error', 'Ha ocurrido un error con el pago');
    }

    public function createOrder($value, $currency)
    {
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => strtoupper($currency),
                            'value' => $value,
                        ]
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name', 'masmoda'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route('page.approval'),
                    'cancel_url' => route('page.cancelled'),
                ]
            ],
            [],
            $isJsonRequest = true,
        );
    }

    public function capturePayment($approvalId)
    {
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalId}/capture",
            [],
            [],
            [
                'content-Type' => 'application/json',
            ],
        );
    }

}
