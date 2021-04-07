@extends('layouts.app')

@section('content')

    <!-- forget password form -->
    <section class="signin-page account bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="{{asset('images/logo.png')}}" alt="logo">
                        </a>
                        <h4 class="text-center mt-3">Please enter your email address:</h4>
                        <form class="text-left clearfix" action="{{route('forgetPassword.email')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" 
                                class="form-control @error('email') border border-danger @enderror" 
                                placeholder="Your email">
                                @error('email')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            @if (session('status'))
                                <div class="text-success my-2 text-center">
                                    {{session('status')}}
                                </div>
                            @endif
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Reset pass</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection