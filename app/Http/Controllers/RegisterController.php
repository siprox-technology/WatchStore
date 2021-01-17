<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
  
        //validate user inputs
        $x = $this->validate($request,[
            'name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|digits:11',
            'password'=>'required|confirmed',
            'contact_pref'=>'required|integer|between:0,2'
        ]);
        //create user 
        User::create(
            [
                "name"=>$request->name,
                "email"=>$request->email,
                "phone"=>$request->phone,
                "password"=>Hash::make($request->password),
                "contact_pref"=>$request->contact_pref
            ]
        );

        Auth()->attempt($request->only('email','password'));
        return redirect()->route('dashboard');
    }
}
