@extends('layouts.app')

@section('content')

            <!-- change address -->
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
                                    <li class="list-inline-item m-1"><a class="active" href="{{route('changeAddress.index')}}">Address</a></li>
                                    <li class="list-inline-item m-1"><a href="{{route('orders.index')}}">Orders</a></li>
                                </ul>
                                <div class="row">
                                    {{-- current address --}}
                                    <div class="{{(auth()->user()->address)?'col-md-4 col-12 text-center border border-grey mt-5 py-5 px-sm-5 px-2':'d-none'}}">
                                        <h3 class="text-center mb-5">Current address</h3>
                                        <p class="p-2">{{auth()->user()->address}}</p>
                                        <p class="p-2">{{auth()->user()->city}}</p>
                                        <p class="p-2">{{auth()->user()->state}}</p>
                                        <p class="p-2">{{auth()->user()->country}}</p>
                                        <p class="p-2">{{auth()->user()->post_code}}</p>
                                    </div>
                                    {{-- new address --}}
                                    <div class="{{(auth()->user()->address)?
                                    'col-md-8 col-12 text-center border border-grey mt-5 py-5 px-sm-5 px-2':
                                    ' col-12 text-center border border-grey mt-5 py-5 px-sm-5 px-2'}}">
                                        <h3 class="text-center mb-5">{{(auth()->user()->address)?'Change current address':'Enter address details'}}
                                        </h3>
                                        <form class="text-left clearfix m-auto" style="max-width:350px" action="{{route('user.changeAddress')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="address" maxlength="149"
                                                class="form-control @error('address') border border-danger @enderror" placeholder="Address line 1" 
                                                value="{{old('address')}}">
                                                @error('address')
                                                    <div class="text-danger">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="city" maxlength="49"
                                                class="form-control @error('city') border border-danger @enderror" placeholder="City"
                                                value="{{old('city')}}">
                                                @error('city')
                                                    <div class="text-danger">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name ="state" maxlength="29"
                                                class="form-control @error('state') border border-danger @enderror" placeholder="State"
                                                value="{{old('state')}}">
                                                @error('state')
                                                    <div class="text-danger">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="text" name="country" maxlength="29"
                                                class="form-control @error('country') border border-danger @enderror" placeholder="country"
                                                value="{{old('country')}}">
                                                @error('country')
                                                    <div class="text-danger">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="post_code" maxlength="14"
                                                class="form-control @error('post_code') border border-danger @enderror" placeholder="Postal code"
                                                value="{{old('post_code')}}">
                                                @error('post_code')
                                                    <div class="text-danger">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
@endsection
