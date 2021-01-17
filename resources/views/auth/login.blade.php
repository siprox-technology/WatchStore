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
                        <form class="text-left clearfix" action="index.html">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <p class="mt-3">New in this site ?<a href="signin.html"> Create New Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection