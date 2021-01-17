<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

dd($x);
    }
}
