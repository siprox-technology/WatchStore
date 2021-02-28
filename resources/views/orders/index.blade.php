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
                            {{-- here --}}
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
                                            <tr id="279"><td class="p-2"><h4 class="default-color text-center">279</h4></td><td class="text-center p-2"><h4 class="default-color text-center">123.72</h4></td><td class="p-2"><h4 class="default-color text-center">2020-12-08 11:28:44</h4></td><td class="p-2"><h4 class="default-color text-center">visa****4242</h4></td><td class="p-2"><h4 class="default-color text-center">ch_1Hw16BGzZBtnGj1lEMLG7ZFM</h4></td><td class="p-2"><h4 class="text-center text-success">Complete</h4></td><td class="p-2"><button id="279" type="button" class="button btn-primary detailsBtn">Details</button></td></tr><tr id="278"><td class="p-2"><h4 class="default-color text-center">278</h4></td><td class="text-center p-2"><h4 class="default-color text-center">44.98</h4></td><td class="p-2"><h4 class="default-color text-center">2020-12-08 09:59:15</h4></td><td class="p-2"><h4 class="default-color text-center">visa****4242</h4></td><td class="p-2"><h4 class="default-color text-center">ch_1HvzhaGzZBtnGj1lqHSp9Zz8</h4></td><td class="p-2"><h4 class="text-center text-success">Complete</h4></td><td class="p-2"><button id="278" type="button" class="button btn-primary detailsBtn">Details</button></td></tr><tr id="276"><td class="p-2"><h4 class="default-color text-center">276</h4></td><td class="text-center p-2"><h4 class="default-color text-center">79.97</h4></td><td class="p-2"><h4 class="default-color text-center">2020-12-08 09:45:27</h4></td><td class="p-2"><h4 class="default-color text-center">visa****4242</h4></td><td class="p-2"><h4 class="default-color text-center">ch_1HvzU8GzZBtnGj1ltm990jm7</h4></td><td class="p-2"><h4 class="text-center text-success">Complete</h4></td><td class="p-2"><button id="276" type="button" class="button btn-primary detailsBtn">Details</button></td></tr><tr id="275"><td class="p-2"><h4 class="default-color text-center">275</h4></td><td class="text-center p-2"><h4 class="default-color text-center">36.94</h4></td><td class="p-2"><h4 class="default-color text-center">2020-12-07 13:41:51</h4></td><td class="p-2"><h4 class="default-color text-center">visa****4242</h4></td><td class="p-2"><h4 class="default-color text-center">ch_1Hvgi7GzZBtnGj1lg8rLPBRk</h4></td><td class="p-2"><h4 class="text-center text-success">Complete</h4></td><td class="p-2"><button id="275" type="button" class="button btn-primary detailsBtn">Details</button></td></tr><tr id="274"><td class="p-2"><h4 class="default-color text-center">274</h4></td><td class="text-center p-2"><h4 class="default-color text-center">58.12</h4></td><td class="p-2"><h4 class="default-color text-center">2020-12-07 12:41:10</h4></td><td class="p-2"><h4 class="default-color text-center">visa****4242</h4></td><td class="p-2"><h4 class="default-color text-center">ch_1HvflRGzZBtnGj1lxauKHeAy</h4></td><td class="p-2"><h4 class="text-center text-success">Complete</h4></td><td class="p-2"><button id="274" type="button" class="button btn-primary detailsBtn">Details</button></td></tr></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



@endsection