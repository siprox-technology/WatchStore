<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //constructor -- middleware?


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

    public function changePassword(Request $request)
    {
        //check user password
        if (Hash::check($request->OldPassword, auth()->user()->password)) {            
            //validate user inputs
            $this->validate($request,[
                'OldPassword'=>'required|max:30',
                'password'=>'required|confirmed'
            ]);
            $newPass= Hash::make($request->password);
            $user = User::find(auth()->user()->id);
            $user->password = $newPass;
            $user->save();
            return back()->with(['status' => 'Password change successfully']);
        }
        else
        {
            return back()->withErrors(['OldPassword'=>'Invalid current password']);
        }

    }

    public function changeAddress(Request $request)
    {
              //validate user inputs
              $this->validate($request,[
                'address'=>'required|max:150',
                'city'=>'required|max:50',
                'state'=>'required|max:30',
                'country'=>'required|max:30',
                'post_code'=>'required|max:15'
            ]);
            //update user details
    
            $user = User::find(auth()->user()->id);
            $user->address = $request->address;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->country = $request->country;
            $user->post_code = $request->post_code;
    
            $user->save();
            return redirect()->route('changeAddress.index');
    }
}
