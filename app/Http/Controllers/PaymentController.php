<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Order_items;
use Illuminate\Http\Request;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{

      public function index($order_id)
      {

          $order = Order::where('id',$order_id)->
          where('user_id',auth()->user()->id)->
          where('status','pending')->get();
          if(count($order)==1)
          {
            return view('payments.index',['order'=>$order]);
          }
          else
          {
            //go orders list
            return redirect()->route('orders.index');
          }

      }
    
      public function store(Request $request)
      {
          // This is your real test secret API key.
          \Stripe\Stripe::setApiKey('sk_test_51HcWlxGzZBtnGj1lUdweCw4OboX34Ku0oaXsjzQ06qygmZRlileOThhDPjB3nF2PMjeCdEoCstRi3CvUTFLrR5KP00A7XFd8hP');
          //get order total price
          $order_price = Order::select('total_price')->where('user_id',auth()->user()->id)
          ->where('id',$request->order_id)->where('status','pending')->get();
          //validate user inputs
          $this->validate($request,[
              'name'=>'required|max:50',
              'email'=>'required|email|max:50',
              'line1'=>'required|max:70',
              'country'=>'required',
              'postal_code'=>'required',
              'user_id'=>'required',
              'order_id'=>'required'
          ]);

          /* address array for customer*/
          $address = [
            "line1"=>$request->line1,
            "country" => $request->country,
            "postal_code"=>$request->postal_code
        ];
        try
        {
              $customer = \Stripe\Customer::create(array(
              "name" =>$request->name,
              "email" => $request->email,
              "address" => $address,
              "source" => $request->stripeToken
              ));

              $charge = \Stripe\Charge::create(array(
              "amount" => ($order_price['0']['total_price'])*100,
              "currency" => "usd",
              "description" => "order number:".$request->order_id,
              "customer" => $customer->id,
              ));

              $transactionData = [
                'transaction_id' => $charge->id,
                'amount' => (($charge->amount)/100),
                'currency' => $charge->currency,
                'payment_method' =>$charge->payment_method_details->card->network,
                'last_4' => $charge->payment_method_details->card->last4,
                'order_id'=>$request->order_id
                ];
              //save payment data
              $payment = Payment::create(
                [
                'amount'=>$transactionData['amount'],
                'payment_method'=>$transactionData['payment_method'],
                'last_four_digit'=>$transactionData['last_4'],
                'payment_ref'=>$transactionData['transaction_id'],
                'order_id'=>$request->order_id,
                'user_id' => $request->user_id
                ]
              );
              //update orders table
              $order = Order::find($request->order_id);
              $order->status = 'completed';
              $order->save();
              //update product stocks and sale number 
              $sold_products = Order_items::select('product_id','quantity')->where('order_id',$request->order_id)->get()->toArray();
              for($i=0; $i<count($sold_products);$i++)
              {
                $sold_item = Product::find($sold_products[$i]['product_id']);
                $sold_item->stock-= $sold_products[$i]['quantity'];
                $sold_item->sale_number+=$sold_products[$i]['quantity'];
                $sold_item->save();
              }
              //--email user order confirmation
              $order_confirmation = new OrderConfirmation($payment);
              $order_confirmation->build();

              Mail::to(auth()->user()->email)->send($order_confirmation);
              return redirect()->route('payment.confirmation',['order_number'=>$payment['order_id'],'payment_ref'=>$payment['payment_ref']]);

        }catch(\Stripe\Exception\CardException $e)
        {
          //The zip code you supplied failed validation.
          //Your card's security code is incorrect.
          //Your card has insufficient funds.
          //Your card was declined.
          //Your card has expired.
          //Your card's security code is incorrect.
          //An error occurred while processing your card. Try again in a little bit.
          
          $payment_status = $e->getMessage();
          return redirect()->route('payment.confirmation',['payment_status'=>$payment_status,]);
        }
      }

      
}
