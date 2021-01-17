@extends('layouts.app')

@section('content')

    <!-- login -->
    <section class="signin-page account bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="{{asset('images/logo.png')}}" alt="logo">
                        </a>
                        <h2 class="text-center">Welcome Back</h2>

                        <form class="text-left clearfix" method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" 
                                class="form-control 
                                @error('email') border border-danger @enderror 
                                @error('status') border border-danger @enderror" 
                                placeholder="Email" value="{{old('email')}}">
                                @error('email')
                                <div class=" text-danger mt-2 ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" 
                                class="form-control 
                                @error('password') border border-danger @enderror 
                                @error('status') border border-danger @enderror"
                                placeholder="Password">
                                @error('password')
                                <div class=" text-danger mt-2 ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember" class="mr-2">
                                <label for="remeber">Remember me</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            @error('status')
                                <div class="text-center text-danger mt-2 ">
                                    {{$message}}
                                </div>
                            @enderror           
                        </form>
                        <p class="mt-3">New in this site ?<a href="signin.html"> Create New Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection