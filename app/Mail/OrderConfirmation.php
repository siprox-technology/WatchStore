<?php

namespace App\Mail;

use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $payment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order_details = [
            'Order id'=> $this->payment->order_id,
            'Amount' => $this->payment->amount,
            'Payment reference'=>$this->payment->payment_ref,
            'Payment method' => $this->payment->payment_method . "***" . $this->payment->last_four_digit
        ];
        return $this->subject('Order Confirmation')->from(config('mail.from.address'))
        ->markdown('vendor.notifications.order-confirm',
        [
            'greeting'=>'Thank you! For your payment. Your order has been submitted successfully with the following information: ',
            'order_details'=>$order_details,
            'salutation'=> 'Looking forward to see you soon',
        ]);
    }
}
