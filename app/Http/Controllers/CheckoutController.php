<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        if(Session::has('cart'))
        {
            return view('orders.checkout');
        }
        return back();
    }
}
