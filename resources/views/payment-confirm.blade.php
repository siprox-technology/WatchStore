@extends('layouts.app')

@section('content')

        <!-- payment confirmation -->
        <!-- main wrapper -->
        <div class="main-wrapper">

            <!-- breadcrumb -->
            <nav class="bg-gray py-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Accounts</li>
                    </ol>
                </div>
            </nav>
            <!-- /breadcrumb -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="block text-center">
                                <h3 class="text-center mb-3">Thank you! For your payment</h3>
                                <p class="text-color">Your order has been placed and will be processed as soon as
                                    possible. Make sure you make note of your order number, which is <span
                                        class="text-primary">34VB5540K83</span> You will be receiving an email shortly
                                    with confirmation of your order. You can now:</p>
                                <a href="shop.html" class="btn btn-primary mt-3 mx-2">Go To Shopping</a>
                                <a href="track.html" class="btn btn-dark mt-3 mx-2">Track order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection