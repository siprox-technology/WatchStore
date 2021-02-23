<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgetPasswordController;
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


//all products list sorted by newest
Route::get('/shop', [ProductController::class,'index'])->name('shop.index');
//sort and filter products
Route::get('/shop/sort_filter', [ProductController::class,'show'])->name('shop.sort_filter.index');
//search products
Route::get('/shop/search', [ProductController::class,'search'])->name('shop.search');
//show product details
Route::get('/shop/product_details/{product:model_number}', [ProductController::class,'showDetails'])->name('shop.product_details.index');


//orders

//shopping cart
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
//add items to cart
Route::get('/cart/{id}/add', [CartController::class,'store'])->name('cart.add');
//remove items from cart
Route::get('/cart/{id}/remove', [CartController::class,'destroy'])->name('cart.remove');
//remove all items in cart
Route::get('/cart/removeAll', function(){
    Session::forget('cart');
    return back();
})->name('cart.removeAll');

//checkout page
Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout.index');

//payment request to stripe
Route::post('/payment',[PaymentController::class,'store'])->name('payment.submit');


//register
Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::post('/register',[RegisterController::class,'store'])->name('register');
//email verification
Route::get('/email/verify/{id}/{hash}',[RegisterController::class,'verifyEmail'])->name('verification.verify');
//resend verification email
Route::post('/email/verification-notification',[RegisterController::class,'sendVerifyEmail'] )->name('verification.send');


//login logout
Route::get('/login', [LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logOut'])->name('logout');


//forget password form
Route::get('/forgetPassword',[ForgetPasswordController::class,'index'] )->name('forgetPassword.index');
//send reset password email
Route::post('/forgetPassword',[ForgetPasswordController::class,'sendResetPassEmail'])->name('forgetPassword.email');
//reset password form
Route::get('/reset-password/{token}',[ForgetPasswordController::class,'showResetPassForm'])->name('password.reset');
//reset password
Route::post('/reset-password',[ForgetPasswordController::class,'resetPass'])->name('password.update');




//user profile
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
//update user details
Route::post('/dashboard', [UserController::class,'updateDetails'])->name('user.update');
//change password
Route::get('/dashboard/changePassword', function () {
    return view('auth.change-pass');})->middleware('auth')->name('changePass.index');
Route::post('/dashboard/changePassword', [UserController::class,'changePassword'])->name('user.changePass');
// change address details
Route::get('/dashboard/changeAddress', function () {
    return view('auth.address');})->middleware('auth')->name('changeAddress.index');    
Route::post('/dashboard/changeAddress', [UserController::class,'changeAddress'])->name('user.changeAddress');
//shopping basket
Route::get('/dashboard/shoppingCart', function () {
    return view('auth.cart');})->middleware('auth')->name('basket.index');
//order history
Route::get('/dashboard/orderHistory', function () {
    return view('auth.order-history');})->middleware('auth')->name('orderHistory.index');
//change contact preferences
Route::get('/dashboard/contactPref', function () {
    return view('auth.contact-pref');})->middleware('auth')->name('contactPref.index');
Route::post('/dashboard/contactPref', [UserController::class,'changeContactPref'])->name('user.changeContactPref');