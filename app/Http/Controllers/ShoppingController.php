<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\Shopping;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class ShoppingController extends Controller
{
    use ResponseApi;


    public function getShop() {

        $product = Product::all();

        dd($product);

        return $this->sendResponse($product, 'Lista de todos los productos');
    }

    public function index()
    {
        // if (Auth::check()) {
        //     $user = Auth::user();
        //     $product=[];
        //     $shopping = Shopping::where('user_id', $user->id)->get();
        //     foreach ($shopping as $item) {
        //         $product[] = Product::where('id', $item->product_id)->get();
        //     }


        //     return $this->sendResponse($product, 'Se agrego correctamente', 200);
        // }

        if (Auth::check()) {
            $user = Auth::user();

            // $data = $user->shoppings;

            $product = DB::table('products')
                ->leftJoin('shoppings', 'products.id', '=', 'shoppings.product_id')
                ->where('shoppings.user_id', $user->id)
                ->where('shoppings.status', 'Cart')
                ->get();


            return $this->sendResponse($product, 'Lista de porductos seleccionados', 200);
        }

        return $this->sendResponse($product, 'Usuario no autenticado', 200);
    }


    public function sumTotalProduct()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $total=0;
            $shopping = Shopping::where('user_id', $user->id)->where('status', 'Cart')->get();
            foreach ($shopping as $item) {
                $total += Product::where('id', $item->product_id)->sum('amount');
            }
            return $this->sendResponse($total, 'Suma total de productos', 200);
        }

        return $this->sendResponse('index shopping', 'Usuario no autenticado', 200);
    }

    public function conutProducts()
    {
        if (Auth::check()) {
            $user = Auth::user();

            $count = Shopping::where('user_id', $user->id)->where('status', 'Cart')->count();

            return $this->sendResponse($count, 'Se agrego correctamente', 200);
        }

        return $this->sendResponse('index shopping', 'Usuario no autenticado', 200);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        // dd($user);
        $input = $request->all();
        $rules = [
            'product_id' => 'required',
            'size_id' => 'required',
            'amount' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $shopping = new Shopping();
        // $shopping->quantity = $request->get('quantity');
        $shopping->size_id = $request->get('size_id');
        $shopping->user_id = $user->id;
        $shopping->product_id = $request->get('product_id');
        $shopping->status = Shopping::STATUS_CART;
        $shopping->amount = $request->get('amount');
        $shopping->save();

        return $this->sendResponse('store shopping', 'Se agrego correctamente', 200);
    }

    public function destroy($id)
    {
        $shopping = Shopping::findOrFail($id);

        $shopping->delete();

        return $this->sendResponse(true, 'se ha elimindao el articulo seleccionado');
    }
}
