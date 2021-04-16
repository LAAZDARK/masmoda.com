<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\User;
use App\Models\Admin;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthAdminController extends Controller
{
    use ResponseApi;

    public function register(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $rules = array(
            'name' => 'required',
            'email' => 'required|unique:admins,email',
            'password' => 'required|min:6|confirmed',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Validator', $validator->errors()->all(), 422);


        $user = new Admin();
        $user->fill($input);
        $user->save();
        Auth::guard('admin')->login($user);

        return redirect()->route("admin.home");
    }


    public function login(Request $request)
    {
        try {

            $input = $request->all();
            // dd($input);
            $rules = array(
                'email' => array('required', 'email'),
                'password' => array('required', 'min:6'),
            );


            $credentials = $request->only('email', 'password');
            $validator = Validator::make($credentials, $rules);

            if ($validator->fails()) return $this->sendError('Validator', $validator->errors()->all(), 422);

            $user = Admin::where('email', $input['email'])->first();
            // dd($user);

            if (Auth::guard('admin')->attempt($credentials)) {
                $user = Auth::guard('admin')->user();
                return redirect()->intended(route("admin.home"));
            }



        } catch (\Throwable $th) {
            return $this->sendError('AuthController Login', $th->getMessage(), $th->getCode());
        }
    }


    public function logout()
    {
        Auth::logout();
        Auth::guard()->logout();
        return redirect()->route("admin.login");
    }
}
