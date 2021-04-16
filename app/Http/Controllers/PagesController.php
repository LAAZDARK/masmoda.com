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
        return view('Pages.index');
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
