@extends('layouts.app')

@section('content')

    <!-- register -->
    <section class="signin-page account bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="{{asset('images/logo.png')}}" alt="logo">
                        </a>
                        <h2 class="text-center">Create Your Account</h2>
                        <form class="text-left clearfix" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" maxlength="50"
                                class="form-control @error('name') border border-danger @enderror" 
                                placeholder="Your name" value="{{old('name')}}">
                                @error('name')
                                <div class=" text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" maxlength="50" 
                                class="form-control @error('email') border border-danger @enderror" 
                                placeholder="Your email" value="{{old('email')}}" >
                                @error('email')
                                <div class=" text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" maxlength="11" 
                                class="form-control  @error('phone') border border-danger @enderror" 
                                placeholder="Your phone" value="{{old('phone')}}">
                                @error('phone')
                                <div class=" text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" maxlength="30" 
                                class="form-control @error('password') border border-danger @enderror" placeholder="Your password">
                                @error('password')
                                <div class=" text-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" maxlength="30" 
                                class="form-control @error('password_confirmation') border border-danger @enderror" placeholder="Your password again">
                                @error('password_confirmation')
                                <div class=" text-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <label for="contact_pref">Contact preference:</label>
                                <select name="contact_pref" id="contact_pref" 
                                value="{{old('contact_pref')}}" class="w-100 mb-3">
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
                                <button type="submit" class="btn btn-primary ">Register</button>
                            </div>
                        </form>
                        <p class="mt-3"><a href="forget-password.html"> Forgot your password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection