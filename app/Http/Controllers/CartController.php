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
/*         Session::forget('cart'); */
/*         dd(Session::get('cart')); */
        return view('cart');
    }

    public function store(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
/*         dd($request->session()->get('cart')); */
        return back();  
    }
    public function destroy($id)
    {   
        $cart = Session::get('cart');
        $deletedItem = $cart->items[$id];
        $cart->remove($deletedItem,$id);
        return back(); 
    }

    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }
}
