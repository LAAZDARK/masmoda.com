<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\PagesAdminController;
use App\Http\Controllers\Admin\ProductAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// User

Route::post("/registro", [AuthController::class, "register"])->name('register');
Route::get("/logout", [AuthController::class, "logout"])->name('logout');
Route::post("/login", [AuthController::class, "login"])->name('login');

Route::name('page.')->group(function () {

    Route::get("/", [PagesController::class, "viewHome"])->name('index');
    Route::get("/caballero", [PagesController::class, "viewShopCaballero"])->name('shop.caballero');
    Route::get("/dama", [PagesController::class, "viewShopDama"])->name('shop.dama');
    Route::get("/todo", [PagesController::class, "viewShop"])->name('shop.all');

    Route::get("/contacto", [PagesController::class, "viewContact"])->name('contact');
    Route::post("/contact", [PagesController::class, "storeContact"])->name('contact.store');
    Route::get("/terminos", [PagesController::class, "viewTerms"])->name('terms');
    Route::get("/registro", [PagesController::class, "viewRegister"])->name('register');
    Route::get("/dashboard", [PagesController::class, "viewDashboard"])->name('dashboard');
    Route::get("/login", [PagesController::class, "viewLogin"])->name('login');
    Route::get("/detalles/{id}", [ProductAdminController::class, "viewProduct"])->name('product');

    Route::get("/checkout", [PagesController::class, "viewCheckout"])->name('pay.checkout');
    Route::post("/payment", [PaymentController::class, "storePayment"])->name('pay.payment');

    Route::get("/payment/approval", [PaymentController::class, "approval"])->name('approval');
    Route::get("/payment/cancelled", [PaymentController::class, "cancelled"])->name('cancelled');

});

Route::resource('shopping', ShoppingController::class)->names('shopping');
Route::get("/count-product", [ShoppingController::class, "conutProducts"])->name('count.product');
Route::get("/sum-product", [ShoppingController::class, "sumTotalProduct"])->name('sum.product');

Route::middleware('web')->group(function () {
    Route::resource('users', UsersController::class)->names('users');
});




// Route::post('/upload', [ProductAdminController::class, 'image'])->name('image.upload');



// Admin

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get("/login", [PagesAdminController::class, "viewLogin"])->name('login');
    Route::post("/login", [AuthAdminController::class, "login"])->name('post.login');
    Route::post('/upload', [ProductAdminController::class, 'image'])->name('image.upload');

    Route::middleware('auth:admin')->group(function () {
        Route::get("/", [PagesAdminController::class, "viewHome"])->name('home');
        Route::get("/producto", [PagesAdminController::class, "viewProduct"])->name('product');
        Route::get("/registro", [PagesAdminController::class, "viewRegister"])->name('register');
        Route::post("/register", [AuthAdminController::class, "register"])->name('post.register');
        Route::get("/logout", [AuthAdminController::class, "logout"])->name('logout');
        Route::get("/usuarios", [PagesAdminController::class, "viewUser"])->name('user.views');
        Route::get("/lista", [PagesAdminController::class, "viewAdmin"])->name('views');

        Route::resource('/user', UserController::class, ['except' => [
            'create', 'edit'
        ]])->names('user');
        Route::resource("/list", AdminController::class )->names('src');

        Route::resource('/product', ProductAdminController::class, ['except' => [
            'create', 'edit'
        ]]);
    });

});


