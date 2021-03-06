@extends('layouts.app')
@section('content')

        <!-- change password -->
        <!-- main wrapper -->
        <div class="main-wrapper">

            <section class="user-dashboard section ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-inline dashboard-menu text-center">
                                <li class="list-inline-item m-1"><a href="{{route('dashboard.index')}}">Profile
                                        Details</a></li>
                                <li class="list-inline-item m-1"><a class="active" href="{{route('changePass.index')}}">Change password</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('changeAddress.index')}}">Address</a></li>
                                <li class="list-inline-item m-1"><a href="{{route('orders.index')}}">Orders</a></li>
                            </ul>
                            <div class="col-lg-6 col-md-8 col-sm-10 mx-auto ">
                                <div class="block text-center border border-grey bg-gray mt-5 py-5 px-sm-5 px-2">
                                    <h3 class="text-center mb-5">Change current password</h3>
                                    @if (session('status'))
                                        <div class=" text-success mb-5">
                                            {{session('status')}}
                                        </div>
                                    @endif
                                    {{-- Change password form --}}
                                    <form class="text-left clearfix m-auto" style="max-width:350px" action="{{route('user.changePass')}}" method="POST">
                                        @csrf
                                        {{-- old pass --}}
                                        <div class="form-group">
                                            <input type="password" name="OldPassword" id="OldPassword" maxlength="30" 
                                            class="form-control @error('OldPassword') border border-danger @enderror" placeholder="current password">                        
                                            @error('OldPassword')
                                                <div class=" text-danger mt-2">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- new pass --}}
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" maxlength="30" 
                                            class="form-control @error('password') border border-danger @enderror" placeholder="new password">
                                            @error('password')
                                            <div class=" text-danger mt-2">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        {{-- new pass confirm --}}
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" id="password_confirmation" maxlength="30" 
                                            class="form-control @error('password_confirmation') border border-danger @enderror" placeholder="new password again">
                                            @error('password_confirmation')
                                            <div class=" text-danger mt-2">
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
  