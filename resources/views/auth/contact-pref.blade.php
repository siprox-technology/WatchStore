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
                                    <form action="">
                                        <div class="form-group text-center" id="contact_pref_options">
                                            <p style="font-size:0.875rem" class="text-center">Contact Preferences: </p>
                                            <label><input class="m-1" type="radio" name="contactPref"
                                                    value="0">SMS</label>
                                            <label><input class="m-1" type="radio" name="contactPref"
                                                    value="1">Email</label>
                                            <label><input class="m-1" type="radio" name="contactPref"
                                                    value="2">Phone</label>
                                        </div>
                                        <div class="row justify-content-center mt-4">
                                            <div class="d-flex flex-column">
                                                <button class="button btn-primary mb-sm-0 bottom15"
                                                    id='update_contact_pref_btn' disabled>update</button>
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