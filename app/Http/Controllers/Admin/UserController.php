<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    use ResponseApi;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return $this->sendResponse($user, 'Lista de usuarios', 200);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return $this->sendResponse(true, 'se ha elimindao el usuario seleccionado');
    }
}
