@extends('layouts.app')
@section('content')


        <!-- orders-->
        <!-- main wrapper -->
        <div class="main-wrapper">
            <section class="user-dashboard section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-inline dashboard-menu text-center">
                                <li class="list-inline-item m-1"><a  href="{{route('dashboard.index')}}">Profile
                                        Details</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('changePass.index')}}">Change password</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('changeAddress.index')}}">Address</a></li>
                                <li class="list-inline-item m-1"><a class="active"  href="{{route('orders.index')}}">Orders</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('contactPref.index')}}">Contact method</a></li>
                            </ul>
                            <div class="row mt-5">
                                <div class="col-md-12 cart_table wow fadeInUp details-box" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="order-history">
                                            <thead>
                                                <tr>
                                                    <th class="darkcolor p-2">Order ID</th>
                                                    <th class="darkcolor p-2">Total Price</th>
                                                    <th class="darkcolor p-2">Date</th>                                 
                                                    <th class="darkcolor p-2">Payment method</th>
                                                    <th class="darkcolor p-2">Payment reference</th> 
                                                    <th class="darkcolor p-2">Status</th>  
                                                </tr>
                                            </thead>
                                            <tbody id="order_history">
                                            <!-- order information goes here -->
                                            @foreach ($payments as $payment)
                                                <tr>
                                                    <td class="p-2">
                                                        <h4 class="default-color text-center">{{$payment->order->id}}</h4>
                                                    </td>
                                                    <td class="text-center p-2">
                                                        <h4 class="default-color text-center">{{$payment->order->total_price}}</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <h4 class="default-color text-center">{{$payment->order->created_at}}</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <h4 class="default-color text-center">{{$payment->payment_method}}****{{$payment->last_four_digit}}</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <h4 class="default-color text-center">{{$payment->payment_ref}}</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <h4 class="text-center text-success">Complete</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <a href="{{route('order.details',$payment->order->id)}}" class="button btn-primary detailsBtn">Details</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td class="p-2">
                                                        <h4 class="default-color text-center">{{$order->id}}</h4>
                                                    </td>
                                                    <td class="text-center p-2">
                                                        <h4 class="default-color text-center">{{$order->total_price}}</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <h4 class="default-color text-center">{{$order->created_at}}</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <h4 class="text-warning text-center">Pending payment</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <h4 class="text-warning text-center">Pending payment</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <h4 class="text-center text-warning">Pending payment</h4>
                                                    </td>
                                                    <td class="p-2">
                                                        <a href="{{route('order.details',$order->id)}}"class="button btn-primary detailsBtn">Details</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



@endsection