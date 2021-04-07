@extends('layouts.app')

@section('content')

            <!-- user profile -->
            <!-- main wrapper -->
            <div class="main-wrapper">
    
    
                <section class="user-dashboard section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-inline dashboard-menu text-center">
                                    <li class="list-inline-item m-1"><a class="active" href="{{route('dashboard.index')}}">Profile
                                            Details</a></li>
                                    <li class="list-inline-item m-1"><a href="{{route('changePass.index')}}">Change password</a></li>
                                    <li class="list-inline-item m-1"><a href="{{route('changeAddress.index')}}">Address</a></li>
                                    <li class="list-inline-item m-1"><a href="{{route('orders.index')}}">Orders</a></li>
                                </ul>
                                <div class="dashboard-wrapper dashboard-user-profile">
                                    <div class="d-md-flex">
                                        <div class="text-center">
                                            @if (file_exists('images/users-image/'.auth()->user()->id.'.jpg'))
                                                <img class="rounded-circle mr-4" style="height:90px; width:90px;" src="{{asset('images/users-image/'.auth()->user()->id.'.jpg')}}" alt="customer-img">
                                            @else
                                                <img class="rounded-circle mr-4" style="height:90px; width:90px;" src="{{asset('images/users-image/default.jpg')}}" alt="customer-img">
                                            @endif
                                        </div>
                                        <div class="media-body">
                                            <ul class="user-profile-list">
                                                <li><span>Full Name:</span>{{auth()->user()->name}}</li>
                                                <li><span>Email:</span>{{auth()->user()->email}}</li>
                                                @if (!auth()->user()->email_verified_at)
                                                    <p class="text-danger">Please verify emails address</p>
                                                    <form action="{{route('verification.send')}}" method="POST">
                                                        @csrf
                                                        <button type="submit">resend verification email</button>
                                                    </form>
                                                    @if (session('message'))
                                                        <p class="text-success">{{session('message')}}</p>
                                                    @endif
                                                @else
                                                <p class="text-success">Email verified</p>
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
                                        <div class="text-center mt-5 mt-md-3 dashboard-menu">
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
                
                <div class="container mb-5">
                    <form action="{{ route('user.uploadImage') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4 class="ml-3">Upload profile image</h4>
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <input type="file" name="image" class="py-2 px-3 w-100">
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0 ml-3 ml-sm-0 dashboard-menu">
                                <button type="submit" class="py-2 px-3 border-0 btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>

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
                                                            placeholder="Your phone" value="{{auth()->user()->phone}}">
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
                                                             class="w-100 mb-3">
                                                                <option value="0"
                                                                    @if ((auth()->user()->contact_pref) == '0')
                                                                    selected = "selected"
                                                                    @endif
                                                                >Phone</option>
                                                                <option value="1"
                                                                    @if ((auth()->user()->contact_pref) == '1')
                                                                    selected = "selected"
                                                                    @endif>SMS
                                                                </option>
                                                                <option value="2"
                                                                    @if ((auth()->user()->contact_pref) == '2')
                                                                        selected = "selected"
                                                                    @endif>Email
                                                                </option>
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