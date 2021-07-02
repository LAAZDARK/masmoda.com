<?php

namespace App\Http\Controllers;

use App\Models\Contact;
// use App\Models\Shopping;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;



class PagesController extends Controller
{
    public function viewHome()
    {
        $user = Auth::user();
        $relationsMen = Product::where('category', 'Hombre')->get()->random(4);
        $relationsWomen = Product::where('category', 'Mujer')->get()->random(4);
        // return view('Pages.index');
        return view('Pages.index', ['relationsMen' => $relationsMen], ['relationsWomen' => $relationsWomen]);
    }

    public function viewShopCaballero()
    {
        $product = Product::where('category', 'Hombre')
                            ->orWhere('category', 'Ambos')
                            ->get();

        $brands = Product::select('brand')->groupBy('brand')->get();

        return view('Pages.shop', ['product' => $product], ['brands' => $brands]);
    }
    public function viewShopDama()
    {
        $product = Product::where('category', 'Mujer')
                            ->orWhere('category', 'Ambos')
                            ->get();

        $brands = Product::select('brand')->groupBy('brand')->get();

        return view('Pages.shop', ['product' => $product], ['brands' => $brands]);
    }

    public function viewShop()
    {
        $product = Product::all();

        $brands = Product::select('brand')->groupBy('brand')->get();

        return view('Pages.shop', ['product' => $product], ['brands' => $brands]);
    }

    public function viewDashboard()
    {
        return view('Pages.dashboard');
    }



    public function viewRegister()
    {
        return view('Pages.register');
    }

    public function viewLogin()
    {
        return view('Pages.login');
    }

    public function viewContact()
    {
        return view('Pages.contact');
    }

    public function storeContact(Request $request)
    {
        $input = $request->all();

        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Validator', $validator->errors()->all(), 422);

        $contact = new Contact();
        $contact->fill($input);
        $contact->save();

        Mail::to('laazfull@gmail.com')->send(new ContactMail($contact));


        return 'Mensaje enviado';
    }

    public function viewCheckout()
    {
        return view('Pages.checkout');
    }



    public function viewTerms()
    {
        return view('Pages.terms');
    }




}
