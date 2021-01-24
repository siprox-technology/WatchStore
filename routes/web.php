<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
})->name('home');

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
Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::post('/register',[RegisterController::class,'store'])->name('register');
//email verification
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
   $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');
//resend verification email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//login logout
Route::get('/login', [LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logOut'])->name('logout');

//reset password
Route::get('/forgetPassword', function () {
    return view('auth.reset-pass');
});


//user profile
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
//update user details
Route::post('/dashboard', [UserController::class,'updateDetails'])->name('user.update');
//change password
Route::get('/dashboard/changePassword', function () {
    return view('auth.change-pass');})->name('changePass.index');
Route::post('/dashboard/changePassword', [UserController::class,'changePassword'])->name('user.changePass');

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