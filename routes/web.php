<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
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


/* here to define a controller */

//forget password form
Route::get('/forgetPassword', function () {
    return view('auth.forget-pass');})->middleware(['guest'])->name('forgetPassword.index');
//reset password email
Route::post('/forgetPassword', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('email')
    );
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('forgetPassword.email');
//reset password form
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-pass', ['token' => $token]);
})->middleware('guest')->name('password.reset');
//reset password
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) use ($request) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->save();

            $user->setRememberToken(Str::random(60));

            event(new PasswordReset($user));
        }
    );

    return $status == Password::PASSWORD_RESET
                ? redirect()->route('login.index')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');




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