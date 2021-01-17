<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home');
});

//product list 
Route::get('/shop', function () {
    return view('shop');
});

//product details 
Route::get('/product-details', function () {
    return view('product-details');
});

//payment confirmation 
Route::get('/confirm', function () {
    return view('payment-confirm');
});

//register
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
//login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

//reset password
Route::get('/forgetPassword', function () {
    return view('auth.reset-pass');
});


//user profile
Route::get('/dashboard', function () {
    return view('auth.user-profile');
})->name('dashboard');
//change password
Route::get('/dashboard/changePassword', function () {
    return view('auth.change-pass');
});
// change address details
Route::get('/dashboard/changeAddress', function () {
    return view('auth.address');
});
//shopping basket
Route::get('/dashboard/shoppingCart', function () {
    return view('auth.cart');
});
//order history
Route::get('/dashboard/orderHistory', function () {
    return view('auth.order-history');
});
//contact preferences
Route::get('/dashboard/contactPref', function () {
    return view('auth.contact-pref');
});