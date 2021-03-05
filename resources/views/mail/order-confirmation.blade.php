
<div>
    <h3 class="text-center mb-3">Thank you! For your order</h3>
    <p class="text-color">Your order number :<span class="text-primary"> {{$payment->order_id}}</span> has been placed and will be processed as soon as
        possible. Make sure you make note of your order number and payment reference number
        , which is <span class="text-primary">{{$payment->payment_ref}}</span> You will be receiving an email shortly
        with confirmation of your order. You can now:</p>
    <a href="{{route('shop.index')}}" class="btn btn-primary mt-3 mx-2">Go To Shopping</a>
    <a href="{{route('orders.index')}}" class="btn btn-dark mt-3 mx-2">See orders list</a>
    {{-- <p>{{}}</p> --}}
</div>

