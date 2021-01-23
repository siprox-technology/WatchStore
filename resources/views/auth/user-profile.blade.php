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
                                                <li><span>Full Name:</span>{{auth()->user()->name}}</li>
                                                <li><span>Email:</span>{{auth()->user()->email}}</li>
                                                @if (!auth()->user()->email_verified_at)
                                                    <p class="text-danger">please verify emails address</p>
                                                    <form action="{{route('verification.send')}}" method="POST">
                                                        @csrf
                                                        <button type="submit">resend verification email</button>
                                                    </form>
                                                    @if (session('message'))
                                                        <p class="text-success">{{session('message')}}</p>
                                                    @endif
                                                @else
                                                <p class="text-success">email verified</p>
                                                @endif
                                                <li></li>
                                                <li><span>Phone:</span>{{auth()->user()->phone}}</li>
                                                <li><span>Contact prefernce:</span>
                                                    @if ((auth()->user()->contact_pref)== 0)
                                                        PHONE
                                                    @endif
                                                    @if ((auth()->user()->contact_pref)== 1)
                                                        SMS
                                                    @endif
                                                    @if ((auth()->user()->contact_pref)== 2)
                                                        EMAIL
                                                    @endif
                                                </li>
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



                <div class='modal fade show' style="d-block" id="edit_acc_details_modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                {{-- edit user details --}}
                                                    <form class="text-left clearfix" action="{{route('user.update')}}" method="POST">
                                                        @csrf
                                                        <div class="form-group text-left">
                                                            <label for="contact_pref"><b>Name:</b></label>
                                                            <input type="text" name="name" id="name" maxlength="50"
                                                            class="form-control @error('name') border border-danger @enderror" 
                                                            placeholder="Your name" value="{{auth()->user()->name}}">
                                                            @error('name')
                                                                <div class=" text-danger mt-2">
                                                                    {{$message}}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group text-left">
                                                            <label for="contact_pref"><b>Phone:</b></label>
                                                            <input type="text" name="phone" id="phone" maxlength="11" 
                                                            class="form-control  @error('phone') border border-danger @enderror" 
                                                            placeholder="Your phone" value="{{auth()->user()->email}}">
                                                            @error('phone')
                                                                <div class=" text-danger mt-2">
                                                                    {{$message}}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group text-left">
                                                            @if ($errors->any())
                                                                <script src="{{mix ('js/app.js')}}"></script>
                                                            @endif
                                                            <label for="contact_pref"><b>Contact preference:</b></label>
                                                            <select name="contact_pref" id="contact_pref" 
                                                            value="" class="w-100 mb-3">
                                                                <option value="0">Phone</option>
                                                                <option value="1">SMS</option>
                                                                <option value="2">Email</option>
                                                            </select>                                
                                                            @error('contact_pref')
                                                                <div class=" text-danger mt-2">
                                                                    {{$message}}
                                                                </div>
                                                            @enderror
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
                @if ($errors->any())
                    <script src="{{mix ('js/app.js')}}"></script>
                    <script>$('#edit_acc_details_modal').modal();</script>
                @endif
@endsection