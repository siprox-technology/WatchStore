@extends('layouts.app')

@section('content')
        <!-- shopping basket-->
        <!-- main wrapper -->
        <div class="main-wrapper">
            <section class="user-dashboard section">
                    <div class="row px-lg-5 px-md-4 p-3">
                        <div class="col-md-12">
                            <div class="block text-center border border-grey mt-5 p-3">
                                <div class="row">
                                    <div class="col-12 mx-auto">
                                        <div class="block">
                                            <div class="product-list">
                                                <form method="#">
                                                    <div class="table-responsive">
                                                        <table class="table cart-table">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Product Name</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>Sub Total</th>
                                                                </tr>
                                                            </thead>
                                                            {{-- items in the cart  --}}
                                                            <tbody>
                                                                @if (Session::has('cart'))
                                                                    @foreach (Session::get('cart')->items as $item)
                                                                    <tr>
                                                                        {{-- delete icon --}}
                                                                        <td>
                                                                            <a class="product-remove" href="{{route('cart.remove',$item['item'])}}">×</a>
                                                                        </td>
                                                                        {{-- images and name --}}
                                                                        <td>
                                                                            <div class="row">
                                                                                    <img class="" style="height:75px;width:75px;"
                                                                                    src="{{asset('images/product-images/'.$item['item']['model_number'].'/'.$item['item']['model_number'].'-0.jpg')}}"
                                                                                    alt="product-img">
                                                                                <div class="col-10 text-left">
                                                                                    <a href="">{{$item['item']['name']}}</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        {{-- price --}}
                                                                        <td>${{($item['price'])/($item['quantity'])}}</td>
                                                                        <td>{{$item['quantity']}}</td>
                                                                        <td>${{$item['price']}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td>
                                                                        <p class="text-danger">Shopping cart empty !</p>
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex flex-column flex-md-row align-items-center">
                                                        <input type="text"
                                                            class="form-control text-md-left text-center mb-3 mb-md-0"
                                                            name="coupon" id="coupon"
                                                            placeholder="I have a discout coupon">
                                                        <button
                                                            class="btn btn-outline-primary ml-md-3 w-100 mb-3 mb-md-0">Apply
                                                            Coupon</button>
                                                        <a href="#" class="btn ml-md-4 btn-dark w-100">Update Cart</a>
                                                        <a href="{{route('cart.removeAll')}}" class="btn ml-md-4 btn-danger w-100">Delete Cart</a>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <ul class="list-unstyled text-right">
                                                                 {{-- total price and tax  --}}
{{--                                                                 <li>Sub Total <span
                                                                        class="d-inline-block w-100px">{{Session::get('cart')->totalPrice}}</span>
                                                                </li>
                                                                <li>Tax@ 10%<span
                                                                        class="d-inline-block w-100px">{{round((Session::get('cart')->totalPrice)*10/100,2)}}</span>
                                                                </li>
                                                                <li>Grand Total <span
                                                                        class="d-inline-block w-100px">${{round((Session::get('cart')->totalPrice)+((Session::get('cart')->totalPrice)*10/100),2)}}</span>
                                                                </li> --}}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <a href="checkout.html"
                                                        class="btn btn-primary float-right">Checkout</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
@endsection