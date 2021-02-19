@extends('layouts.app')

@section('content')

        <!-- shopping basket-->
        <!-- main wrapper -->
        <div class="main-wrapper">

            <section class="user-dashboard section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block text-center border border-grey mt-5 py-5 px-sm-5 px-2">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
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
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a class="product-remove" href="">×</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-info">
                                                                            <img class="img-fluid"
                                                                                src="{{asset('images/cart/product-1.jpg')}}"
                                                                                alt="product-img">
                                                                            <a href="">Tops</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>$200.00</td>
                                                                    <td>
                                                                        <div
                                                                            class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                                            <span
                                                                                class="input-group-btn input-group-prepend"><button
                                                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                                                    type="button">-</button><button
                                                                                    class="btn btn-primary bootstrap-touchspin-down bootstrap-touchspin-injected"
                                                                                    type="button">-</button></span><input
                                                                                type="text" value="1"
                                                                                name="cart-quantity"
                                                                                class="form-control"><span
                                                                                class="input-group-btn input-group-append"><button
                                                                                    class="btn btn-primary bootstrap-touchspin-up bootstrap-touchspin-injected"
                                                                                    type="button">+</button><button
                                                                                    class="btn btn-primary bootstrap-touchspin-up"
                                                                                    type="button">+</button></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>$200.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a class="product-remove" href="">×</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-info">
                                                                            <img class="img-fluid"
                                                                                src="{{asset('images/cart/product-2.jpg')}}"
                                                                                alt="product-img">
                                                                            <a href="">Jacket</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>$200.00</td>
                                                                    <td>
                                                                        <div
                                                                            class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                                            <span
                                                                                class="input-group-btn input-group-prepend"><button
                                                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                                                    type="button">-</button><button
                                                                                    class="btn btn-primary bootstrap-touchspin-down bootstrap-touchspin-injected"
                                                                                    type="button">-</button></span><input
                                                                                type="text" value="1"
                                                                                name="cart-quantity"
                                                                                class="form-control"><span
                                                                                class="input-group-btn input-group-append"><button
                                                                                    class="btn btn-primary bootstrap-touchspin-up bootstrap-touchspin-injected"
                                                                                    type="button">+</button><button
                                                                                    class="btn btn-primary bootstrap-touchspin-up"
                                                                                    type="button">+</button></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>$200.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a class="product-remove" href="">×</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-info">
                                                                            <img class="img-fluid"
                                                                                src="{{asset('images/cart/product-1.jpg')}}"
                                                                                alt="product-img">
                                                                            <a href="">Scarf</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>$200.00</td>
                                                                    <td>
                                                                        <div
                                                                            class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                                            <span
                                                                                class="input-group-btn input-group-prepend"><button
                                                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                                                    type="button">-</button><button
                                                                                    class="btn btn-primary bootstrap-touchspin-down bootstrap-touchspin-injected"
                                                                                    type="button">-</button></span><input
                                                                                type="text" value="1"
                                                                                name="cart-quantity"
                                                                                class="form-control"><span
                                                                                class="input-group-btn input-group-append"><button
                                                                                    class="btn btn-primary bootstrap-touchspin-up bootstrap-touchspin-injected"
                                                                                    type="button">+</button><button
                                                                                    class="btn btn-primary bootstrap-touchspin-up"
                                                                                    type="button">+</button></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>$200.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a class="product-remove" href="">×</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-info">
                                                                            <img class="img-fluid"
                                                                                src="{{asset('images/cart/product-2.jpg')}}"
                                                                                alt="product-img">
                                                                            <a href="">Tops</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>$200.00</td>
                                                                    <td>
                                                                        <div
                                                                            class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                                            <span
                                                                                class="input-group-btn input-group-prepend"><button
                                                                                    class="btn btn-primary bootstrap-touchspin-down"
                                                                                    type="button">-</button><button
                                                                                    class="btn btn-primary bootstrap-touchspin-down bootstrap-touchspin-injected"
                                                                                    type="button">-</button></span><input
                                                                                type="text" value="1"
                                                                                name="cart-quantity"
                                                                                class="form-control"><span
                                                                                class="input-group-btn input-group-append"><button
                                                                                    class="btn btn-primary bootstrap-touchspin-up bootstrap-touchspin-injected"
                                                                                    type="button">+</button><button
                                                                                    class="btn btn-primary bootstrap-touchspin-up"
                                                                                    type="button">+</button></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>$200.00</td>
                                                                </tr>
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
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <ul class="list-unstyled text-right">
                                                                <li>Sub Total <span
                                                                        class="d-inline-block w-100px">$800.00</span>
                                                                </li>
                                                                <li>UK Vat <span
                                                                        class="d-inline-block w-100px">$10.00</span>
                                                                </li>
                                                                <li>Grand Total <span
                                                                        class="d-inline-block w-100px">$10.00</span>
                                                                </li>
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
                </div>
            </section>
@endsection