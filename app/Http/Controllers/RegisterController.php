<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\NewUserRegister;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
//
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
  
        //validate user inputs
        $this->validate($request,[
            'name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|digits:11',
            'password'=>'required|confirmed',
            'contact_pref'=>'required|integer|between:0,2'
        ]);
        //create user 
        $user = User::create(
            [
                "name"=>$request->name,
                "email"=>$request->email,
                "phone"=>$request->phone,
                "password"=>Hash::make($request->password),
                "contact_pref"=>$request->contact_pref
            ]
        );

        event(new Registered($user));
        Auth()->attempt($request->only('email','password'));
        return redirect()->route('dashboard.index');
    }
}
