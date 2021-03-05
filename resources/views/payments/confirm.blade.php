@extends('layouts.app')

@section('content')

        <!-- payment confirmation -->
        <!-- main wrapper -->
        <div class="main-wrapper">

            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="block text-center">
                                @if (request()->payment_ref)
                                    <h3 class="text-center mb-3">Thank you! For your payment</h3>
                                    <p class="text-color">Your order number :<span class="text-primary"> {{request()->order_number}}</span> has been placed and will be processed as soon as
                                        possible. Make sure you make note of your order number and payment reference number
                                        , which is <span class="text-primary">{{request()->payment_ref}}</span> You will be receiving an email shortly
                                        with confirmation of your order. You can now:</p>
                                    <a href="{{route('shop.index')}}" class="btn btn-primary mt-3 mx-2">Go To Shopping</a>
                                    <a href="{{route('orders.index')}}" class="btn btn-dark mt-3 mx-2">See orders list</a>
                                @else
                                    <h3 class="text-center text-danger mb-3"><b>Payment failed: </b>{{request()->payment_status}}</h3>
                                    <a href="{{route('orders.index')}}" class="btn btn-dark mt-3 mx-2">Pending orders</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection