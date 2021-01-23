<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateDetails(Request $request)
    {
        //validate user inputs
        $this->validate($request,[
            'name'=>'max:50',
            'phone'=>'integer|min:11',
            'contact_pref'=>'integer|between:0,2'
        ]);
        //update user details

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->contact_pref = $request->contact_pref;

        $user->save();
        return redirect()->route('dashboard.index');
    }
}
