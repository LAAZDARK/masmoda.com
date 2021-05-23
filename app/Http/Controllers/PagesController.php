<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use App\Models\Shopping;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class PagesController extends Controller
{
    public function viewHome()
    {
        $user = Auth::user();
        $relationsMen = Product::where('category', 'Hombre')->get()->random(4);
        $relationsWomen = Product::where('category', 'Mujer')->get()->random(4);

        return view('Pages.index', ['relationsMen' => $relationsMen], ['relationsWomen' => $relationsWomen]);
    }

    public function viewShopCaballero()
    {
        $product = Product::where('category', 'Hombre')
                            ->orWhere('category', 'Ambos')
                            ->get();
        return view('Pages.shop', ['product' => $product]);
    }
    public function viewShopDama()
    {
        $product = Product::where('category', 'Mujer')
                            ->orWhere('category', 'Ambos')
                            ->get();
        return view('Pages.shop', ['product' => $product]);
    }

    public function viewShop()
    {
        $product = Product::all();
        return view('Pages.shop', ['product' => $product]);
    }

    public function viewDashboard()
    {
        return view('Pages.dashboard');
    }

    public function viewContact()
    {
        return view('Pages.contact');
    }

    public function viewRegister()
    {
        return view('Pages.register');
    }

    public function viewLogin()
    {
        return view('Pages.login');
    }
}
