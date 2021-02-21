<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{

    public function index()
    {
        return view('cart');
    }

    public function store(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return back();  
    }
    public function destroy($id)
    {   
        $cart = Session::get('cart');
        $deletedItem = $cart->items[$id];
        $cart->remove($deletedItem,$id);
        return back(); 
    }

}
