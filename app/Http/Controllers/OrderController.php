<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Order;
use App\Models\Order_items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth']);
   }
 public function index()
 {
    
 }

 public function store(Request $request)
 {
   if(Session::get('cart'))
   {
      //validate user inputs
      $this->validate($request,[
      'address'=>'required|max:150',
      'city'=>'required|max:50',
      'state'=>'required|max:30',
      'country'=>'required|max:30',
      'post_code'=>'required|max:15',
      'delivery_method'=>'required|int|min:0|max:1']);   
      //save order
      $delivery_price = (($request->delivery_method)==0?'9.99':'19.99');
      $price = $delivery_price + Session::get('cart')->totalPrice;
      $tax = ($price)*10/100;
      $total_price = $price + $tax;
      $order = Order::create(
         [
         'status' => 'pending',
         'delivery_price' => $delivery_price,
         'delivery_address'=>$request->address,
         'delivery_city'=>$request->city,
         'delivery_state'=>$request->state,
         'delivery_country'=>$request->country,
         'delivery_postal_code'=>$request->post_code,
         'total_price'=> $total_price,
         'user_id'=>auth()->user()->id
         ]
      );
      //save order items
      $order_items = [];
      foreach(Session::get('cart')->items as $key => $value)
      {
        $items = Order_items::create(
            [
               'quantity' => $value['quantity'],
               'price' => $value['price'],
               'order_id' => $order->id,
               'product_id'=>$key,
            ]
         );
         array_push($order_items,$items);   
      }
      //remove cart items
      Session::forget('cart');
      return \redirect()->route('order.confirmation',['order'=>$order]);

   }
   return \redirect()->route('cart.index');

 }
 public function displayConfirmation(Order $order)
 {
      return view ('orders.order-confirm',['order'=>$order]);
 }

}
