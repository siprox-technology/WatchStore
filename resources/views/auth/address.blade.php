@extends('layouts.app')

@section('content')

            <!-- change address -->
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
    
                <section class="user-dashboard section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-inline dashboard-menu text-center">
                                    <li class="list-inline-item m-1"><a  href="/dashboard">Profile
                                        Details</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/changePassword">Change password</a></li>
                                    <li class="list-inline-item m-1"><a class="active"href="dashboard/changeAddress">Address</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/shoppingCart">Basket</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/orderHistory">Orders</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/contactPref">Contact method</a></li>
    
                                </ul>
                                <div class="block text-center border border-grey mt-5 py-5 px-sm-5 px-2">
                                    <h3 class="text-center mb-5">Edit or change current address</h3>
                                    <form class="text-left clearfix m-auto" style="max-width:350px" action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address line 1">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="State">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="country">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postal code">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
 
@endsection
