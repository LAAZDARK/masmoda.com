<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    use ResponseApi;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        return $this->sendResponse($admin, 'Lista de administradores', 200);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);

        $admin->delete();

        return $this->sendResponse(true, 'se ha elimindao el usuario seleccionado');
    }
}
