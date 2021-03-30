<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //collection products
        $collection = Product::where('sale_number','<','200')->get();
        //deal of the day
        $deal = Product::where('discount','>=','30')->first();
        return view('home',['collection'=>$collection,'deal'=>$deal]);
    }
}
