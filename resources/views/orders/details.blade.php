@extends('layouts.app')

@section('content')

        <!-- payment confirmation -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="inner-wrapper border-box">
                            <!-- review -->
                            <h3>Order details</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td><b>Image</b></td>
                                            <td><b>Product Name</b></td>
                                            <td><b>Quantity</b></td>
                                            <td><b>Sub Total</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($order->order_items as $item)
                                    <tr>
                                        <td class="align-middle"><img style="width:35px; height:35px;" 
                                        src="{{asset('images/product-images/'.$item->product->model_number.'/'.$item->product->model_number.'-0.jpg')}}" alt="product-img"></td>
                                        <td class="align-middle">{{$item->product->name}}</td>
                                        <td class="align-middle">{{$item->quantity}}</td>
                                        <td class="align-middle">{{$item->price}}</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /review -->
        
                            <!-- shipping-information -->
                            <h3 class="mb-5 border-bottom pb-2">Shipping Information</h3>
                            <div class="row mb-5">
                                <div class="col-md-5">
                                    <h4 class="mb-3"><b>Shipping Address</b></h4>
                                    <ul class="list-unstyled">
                                        <li>{{$order->delivery_address}}</li>
                                        <li>{{$order->delivery_city}}</li>
                                        <li>{{$order->delivery_state}}</li>
                                        <li>{{$order->delivery_country}}</li>
                                        <li>{{$order->delivery_postal_code}}</li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <h4 class="mb-3"><b>Shipping Method</b></h4>
                                    <ul class="list-unstyled">
                                        @if (($order->delivery_price)=='9.99')
                                            <li>Standard 8-10 business days - $9.99 </li>
                                        @else
                                            <li>Express 1-2 business days - 19.99 </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
        
                            <!-- buttons -->
                            <div class="p-4 bg-gray">
                                @if ($order->status == 'pending')
                                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between w-100">
                                        <form action="{{route('order.edit')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="order_id" value="{{$order->id}}">
                                            <button type="submit" class="btn btn-dark w-100 mb-2">Edit order</button>
                                        </form>
                                        <a href="{{route('payment.index',$order->id)}}" class="btn btn-primary mb-2">Payment</a>
                                    </div>
                                @else
                                    <a href="{{route('orders.index')}}" class="btn btn-dark">Back to orders</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border-box p-4">
                            <h4><b>Order Summery</b></h4>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between">
                                    <span>Subtotal</span>
                                    <span>
                                        ${{round($order->total_price/1.10-9.99,2)}}
                                    </span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Shipping &amp; Handling</span>
                                    <span>${{$order->delivery_price}}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Estimated Tax</span>
                                    <span>${{round(($order->total_price/1.1)*0.1,2)}}</span>
                                </li>
                            </ul>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <span>Total</span>
                                <strong>${{$order->total_price}}</strong> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="block text-center">
                                <h3 class="text-center mb-3">Thank you! For your order :
                                @if (isset($order))
                                {{$order->id}}
                                @endif
                                @error('order')
                                    {{$message}}
                                @enderror
                                </h3>
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