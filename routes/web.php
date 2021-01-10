<?php

use Illuminate\Support\Facades\Route;

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
//product list page
Route::get('/shop', function () {
    return view('shop');
});

//register
Route::get('/register', function () {
    return view('auth.register');
});

//login
Route::get('/login', function () {
    return view('auth.login');
});

//reset password
Route::get('/forgetPassword', function () {
    return view('auth.reset-pass');
});


//user profile
Route::get('/dashboard', function () {
    return view('auth.user-profile');
});
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