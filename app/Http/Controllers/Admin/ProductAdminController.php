<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
// use App\Models\Shopping;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
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
        return $this->sendResponse($product, 'Usuario no autenticado', 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // dd($input);
        $rules = [
            'title' => 'required',
            // 'category' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $pathImage = $request['image']->store('upload-product', 'public');


        $img = Image::make(public_path("storage/{$pathImage}"))->fit(440, 520);
        $img->save();
        $product = new Product();
        $product->image = $pathImage;
        $product->title = $request->get('title');
        $product->brand = $request->get('brand');
        $product->model = $request->get('model');
        $product->amount = $request->get('amount');
        $product->quantity = $request->get('quantity');
        $product->category = $request->get('category');
        $product->description = $request->get('description');
        $product->status = Product::STATUS_TRUE;
        $product->save();

        $product->sizes()->attach($request->get('size'));

        return back()->with('flash', 'Se guardo correctamente el producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewProduct(Product $id)
    {
        // dd($id);

        $relations = Product::all()->random(4);

        return view('Pages.product', ['product' => $id], ['relations' => $relations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $pathImage='';
        $input = $request->all();
        // dd($input);
        $rules = [
            'title' => 'required',
            // 'category' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        // if ($request['image']) {
        //     $pathImage = $request['image']->store('upload-product', 'public');

        //     $img = Image::make(public_path("storage/{$pathImage}"))->fit(440, 520);
        //     $img->save();
        // }

        $product = Product::findOrFail($id);
        $product->image = $pathImage;
        $product->title = $request->get('title');
        $product->brand = $request->get('brand');
        $product->model = $request->get('model');
        $product->amount = $request->get('amount');
        $product->quantity = $request->get('quantity');
        $product->category = $request->get('category');
        $product->description = $request->get('description');
        $product->save();

        $product->sizes()->attach($request->get('size'));

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
}
