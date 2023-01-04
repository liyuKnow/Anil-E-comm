<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
// Home page
Route::get('/',[ProductController::class, 'index']);

// Register view and form action
Route::view('/register','user/register');
Route::post('/register_form',[UserController::class, 'registerForm']);

// Login view and Action from form
Route::get('/login', function () {
    return view('user/login');
});
Route::post('/login',[UserController::class, 'login']);
// Logout Action
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

// Products Section
Route::get('detail/{id}',[ProductController::class, 'detail']);
Route::get('search',[ProductController::class, 'search']);
Route::post('/add_to_cart',[ProductController::class, 'addToCart']);
Route::get('/cartlist',[ProductController::class, 'cartlist']);
Route::get('/remove_from_cart/{id}',[ProductController::class, 'RemoveFromCart']);
Route::get('/order_now',[ProductController::class, 'orderNow']);
Route::post('/placeorder',[ProductController::class, 'placeOrder']);
Route::get('/myorders',[ProductController::class, 'myOrders']);



