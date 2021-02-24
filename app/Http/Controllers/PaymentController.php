<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class PaymentController extends Controller
{
    public function index()
    {
        return view('orders.payment');
    }
    
    public function store(Request $request)
    {
        // This is your real test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51HcWlxGzZBtnGj1lUdweCw4OboX34Ku0oaXsjzQ06qygmZRlileOThhDPjB3nF2PMjeCdEoCstRi3CvUTFLrR5KP00A7XFd8hP');
        //get order from session 
        $order = Session::get('cart');
        //validate user inputs
        $this->validate($request,[
            'name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'line1'=>'required|max:70',
            'country'=>'required',
            'postal_code'=>'required',
            'user_id'=>'required',
        ]);

        $stripe_customer_id = '';
        $payment_status = '';
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

            $stripe_customer_id = $customer->id;

            header('Content-Type: application/json');

            $charge = \Stripe\Charge::create(array(
            "amount" => ($order->totalPrice)*100,
            "currency" => "usd",
            "description" => "order number: test",
            "customer" => $customer->id,
            ));
    
            $transactionData = [
              'transaction_id' => $charge->id,
              'amount' => (($charge->amount)/100),
              'currency' => $charge->currency,
              'payment_method' =>$charge->payment_method_details->card->network,
              'last_4' => $charge->payment_method_details->card->last4,
              'order_id'=>'test'
              ];
            var_dump($transactionData);


      }catch(\Stripe\Exception\CardException $e)
      {
        //The zip code you supplied failed validation.
        //Your card's security code is incorrect.
        //Your card has insufficient funds.
        //Your card was declined.
        //Your card has expired.
        //Your card's security code is incorrect.
        //An error occurred while processing your card. Try again in a little bit.
        
        $payment_status = 'Payment failed: '.$e->getMessage();
        var_dump($payment_status);
      }
    }
}
