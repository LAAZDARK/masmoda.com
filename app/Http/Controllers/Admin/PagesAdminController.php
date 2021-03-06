<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Http\Controllers\Controller;



class PagesAdminController extends Controller
{
    public function viewHome()
    {
        return view('admin.index', );
    }

    public function viewProduct()
    {
        return view('admin.product');
    }


    public function viewUser()
    {
        return view('admin.user');
    }
    public function viewAdmin()
    {
        return view('admin.admin');
    }

    public function viewRegister()
    {
        return view('admin.register');
    }

    public function viewLogin()
    {
        return view('admin.login');
    }
}
