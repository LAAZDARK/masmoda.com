<?php

namespace App\Http\Controllers;


use App\Models\Shopping;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Services\PaypalService;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PaymentController extends Controller
{
    use ResponseApi;

    public function storePayment(Request $request)
    {

        $input = $request->all();
        // dd($input);
        $rules = [
            'total' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $paymentPlatform = resolve(PaypalService::class);

        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        $paymentPlatform = resolve(PaypalService::class);

        return $paymentPlatform->handleApproval();

    }

    public function cancelled ()
    {
        //
    }
}
