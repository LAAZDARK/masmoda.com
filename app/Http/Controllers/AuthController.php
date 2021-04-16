<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    use ResponseApi;

    public function register(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $rules = array(
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Validator', $validator->errors()->all(), 422);


        $user = new User();
        $user->fill($input);
        $user->save();
        Auth::guard()->login($user);

        return redirect()->route("page.index");
    }


    public function login(Request $request)
    {
        try {

            $input = $request->all();

            $rules = array(
                'email' => array('required', 'email'),
                'password' => array('required', 'min:6'),
            );


            $credentials = $request->only('email', 'password');
            $validator = Validator::make($credentials, $rules);

            if ($validator->fails()) return $this->sendError('Validator', $validator->errors()->all(), 422);

            $user = User::where('email', $input['email'])->first();
            // dd($request->password);

            if (Hash::check($request->password, $user->password)) {
                Auth::guard()->login($user);
                return redirect()->route("page.index");

            }else{
                dd('no funciona');
                // return back()->withErrors([
                //     'password' => ['The provided password does not match our records.']
                // ]);
            }

        } catch (\Throwable $th) {
            return $this->sendError('AuthController Login', $th->getMessage(), $th->getCode());
        }
    }


    public function logout()
    {
        Auth::logout();
        Auth::guard()->logout();
        return redirect()->route("page.index");
    }
}
