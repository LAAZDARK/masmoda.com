<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
// use App\Models\Shopping;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class ProductAdminController extends Controller
{
    use ResponseApi;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        // $product = Product::has('sizes')->with('sizes')->get();
        // dd($product);
        return $this->sendResponse($product, 'Usuario no autenticado', 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input = $request->all();
        $rules = [
            'title' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $pathImage = $request['image']->store('upload-product', 'public');


        $img = Image::make(public_path("storage/{$pathImage}"))->fit(440, 520);
        $img->save();
        $product = new Product();
        $product->image = $pathImage;
        $product->type = $request->input('type');
        $product->title = $request->input('title');
        $product->brand = $request->input('brand');
        $product->model = $request->input('model');
        $product->amount = $request->input('amount');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->small_size = $request->input('small_size');
        $product->medium_size = $request->input('medium_size');
        $product->large_size = $request->input('large_size');
        $product->extra_large_size = $request->input('extra_large_size');
        $product->status = Product::STATUS_TRUE;
        $product->save();


        $admin = $request->user();

        $admin->products()->save($product);



        return back()->with('flash', 'Se guardo correctamente el producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewProduct($id)
    {
        $product = Product::findOrFail($id);
        // dd($product);
        $relations = Product::all()->random(4);

        return view('Pages.product', ['product' => $product], ['relations' => $relations]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $input = $request->all();
        // dd($input);
        $rules = [
            'title' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);



        $product = Product::findOrFail($id);
        $product->type = $request->get('type');
        $product->title = $request->get('title');
        $product->brand = $request->get('brand');
        $product->model = $request->get('model');
        $product->amount = $request->get('amount');
        $product->category = $request->get('category');
        $product->description = $request->get('description');
        $product->small_size = $request->input('small_size');
        $product->medium_size = $request->input('medium_size');
        $product->large_size = $request->input('large_size');
        $product->extra_large_size = $request->input('extra_large_size');
        $product->status = Product::STATUS_TRUE;
        $product->save();



        $admin = $request->user();

        $admin->products()->save($product);

        return $this->sendResponse($product, 'Se actualizo correctamente', 200);

        // return back()->with('flash', 'Se guardo correctamente el producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return $this->sendResponse(true, 'se ha elimindao el produco seleccionado');
    }

    public function image(Request $request)
    {

        dd($request['image']);



        $pathImage = $request['image']->store('upload-product', 'public');


        $img = Image::make(public_path("storage/{$pathImage}"))->fit(440, 520);
        $img->save();
        // $product = new Product();
        // $product->image = $pathImage;


        return $pathImage;
    }
}
