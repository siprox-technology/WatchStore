@extends('layouts.app')

@section('content')

        <!-- Contact prefernces-->
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
                                <li class="list-inline-item m-1"><a  href="{{route('dashboard.index')}}">Profile
                                        Details</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('changePass.index')}}">Change password</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('changeAddress.index')}}">Address</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('basket.index')}}">Basket</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('orderHistory.index')}}">Orders</a></li>
                                <li class="list-inline-item m-1"><a class="active" href="{{route('contactPref.index')}}">Contact method</a></li>
                            </ul>
                            <div class="block text-center border border-grey mt-5 py-5 px-sm-5 px-2">
                                <div class="row justify-content-center">
                                    {{-- change contact preferences --}}
                                    <form action="{{route('user.changeContactPref')}}" method="POST">
                                        @csrf
                                        <div class="form-group text-center" id="contact_pref_options">
                                            <p style="font-size:0.875rem" class="text-center">Contact Preferences: </p>
                                            @if (session('status'))
                                                <p class="text-center text-success">Your contact method is set to :
                                                     <b>
                                                         {{(auth()->user()->contact_pref)=='0'?'SMS':''}}
                                                         {{(auth()->user()->contact_pref)=='1'?'EMAIL':''}}
                                                         {{(auth()->user()->contact_pref)=='2'?'PHONE':''}}
                                                    </b>
                                                </p>
                                            @endif
                                            @error('contact_pref')
                                                <p class="text-center text-danger">{{$message}}</p>
                                            @enderror
                                            <label><input class="m-1" type="radio" name="contact_pref"
                                                    value="0" {{(auth()->user()->contact_pref)=='0'?'checked':''}}>SMS</label>
                                            <label><input class="m-1" type="radio" name="contact_pref"
                                                    value="1" {{(auth()->user()->contact_pref)=='1'?'checked':''}}>Email</label>
                                            <label><input class="m-1" type="radio" name="contact_pref"
                                                    value="2" {{(auth()->user()->contact_pref)=='2'?'checked':''}}>Phone</label>
                                        </div>
                                        <div class="row justify-content-center mt-4">
                                            <div class="d-flex flex-column">
                                                <button class="button btn-primary mb-sm-0 bottom15"
                                                    id='update_contact_pref_btn' type="submit">update</button>
                                                <label class="text-success mt-3 float-center text-center d-none"
                                                    id="save-contact-det-result"></label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection