@extends('layouts.app')

@section('content')

            <!-- user profile -->
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
                                    <li class="list-inline-item m-1"><a class="active" href="/dashboard">Profile
                                            Details</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/changePassword">Change password</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/changeAddress">Address</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/shoppingCart">Basket</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/orderHistory">Orders</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/contactPref">Contact method</a></li>
                                </ul>
                                <div class="dashboard-wrapper dashboard-user-profile">
                                    <div class="d-md-flex">
                                        <div class="text-center">
                                            <img class="media-object user-img" src="{{asset('images/users-image/avater.jpg')}}"
                                                alt="Image">
                                            <a href="#" class="btn btn-sm mt-3 d-block">Change Image</a>
                                        </div>
                                        <div class="media-body">
                                            <ul class="user-profile-list">
                                                <li><span>Full Name:</span>Johanna Doe</li>
                                                <li><span>Country:</span>USA</li>
                                                <li><span>Email:</span>mail@gmail.com</li>
                                                <li><span>Phone:</span>+880123123</li>
                                                <li><span>Date of Birth:</span>Dec , 22 ,1991</li>
                                            </ul>
                                        </div>
                                        <div class="text-center mt-5 mt-md-0">
                                            <a class="bg-primary text-white p-3" data-toggle="modal"
                                                data-target="#edit_acc_details_modal">Edit
                                                details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- edit account details modal -->
                <div class="modal fade" id="edit_acc_details_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">New account details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- edit user personal details -->
                                <div class="col-12">
                                    <div class="heading-title">
                                        <div class=" flex justify-center">
                                            <div class=" w-6/12 bg-white p-6 rounded-lg">
                                                <div class="block text-center">
                                                    <form class="text-left clearfix" action="index.html">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control"
                                                                placeholder="contact preferences">
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
@endsection