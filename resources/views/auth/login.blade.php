@extends('layouts.app')

@section('content')

    <!-- login -->
    <section class="signin-page account bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10  mx-auto">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="{{asset('images/logo.png')}}" alt="logo">
                        </a>
                        <h2 class="text-center">Welcome Back</h2>
                        @if (session('status'))
                            @if (session('status')=='Your password has been reset!')
                                <div class="text-success text-center">
                                    {{session('status')}}
                                </div>   
                            @endif
                        @endif
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
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            @error('status')
                                <div class="text-center text-danger mt-2 ">
                                    {{$message}}
                                </div>
                            @enderror           
                        </form>
                        <p class="mt-3">New in this site ?<a href="{{route('register.index')}}"> Create New Account</a></p>
                        <a href="{{route('forgetPassword.index')}}"><p class="mt-3">Forget password ?</p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection