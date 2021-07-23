<?php

namespace App\Http\Controllers;


use App\Models\Shopping;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Services\PaypalService;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
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

        $this->_paymentMade();

        return $paymentPlatform->handleApproval();

    }

    public function cancelled ()
    {
        return redirect()->route('page.index')->with('error', 'Ha ocurrido un error con el pago, vuelva a intentarlo');
    }


    public function _paymentMade ()
    {

        if (Auth::check()) {
            $user = Auth::user();
            $shopping = Shopping::where('user_id', $user->id)->where('status', 'Cart')->get();
            foreach ($shopping as $item) {
                $shop = Shopping::findOrFail($item->id);
                $shop->status = Shopping::STATUS_SOLD;
                $shop->save();
            }
            // return $this->sendResponse($shop, 'Pagado', 200);
        }

        // return $this->sendResponse('index shopping', 'Usuario no autenticado', 200);
    }
}
