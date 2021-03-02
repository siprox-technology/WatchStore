@extends('layouts.app')

@section('content')
{{-- checkout --}}
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <!-- shipping-information -->
                <div class="col-12 col-md-8">
                    <div class="inner-wrapper border-box p-5">
                        <h3 class="mb-5 border-bottom pb-2 text-center">Confirm shipping</h3>
                        <form class="row mb-5 justify-content-center" action="{{route('order.submit')}}" method="POST">
                            @csrf
                            {{-- delivery address --}}
                            <div class="col-12">
                                {{-- delivery address --}}
                                <h4 class="mb-3">Shipping Address:</h4> 
                                <div class="form-group">
                                    <input type="text" name="address" maxlength="149"
                                    class="form-control @error('address') border border-danger @enderror" placeholder="Address line 1" 
                                    value="{{auth()->user()->address}}">
                                    @error('address')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" maxlength="49"
                                    class="form-control @error('city') border border-danger @enderror" placeholder="City"
                                    value="{{auth()->user()->city}}">
                                    @error('city')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name ="state" maxlength="29"
                                    class="form-control @error('state') border border-danger @enderror" placeholder="State"
                                    value="{{auth()->user()->state}}">
                                    @error('state')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="country" maxlength="29"
                                    class="form-control @error('country') border border-danger @enderror" placeholder="country"
                                    value="{{auth()->user()->country}}">
                                    @error('country')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="post_code" maxlength="14"
                                    class="form-control @error('post_code') border border-danger @enderror" placeholder="Postal code"
                                    value="{{auth()->user()->post_code}}">
                                    @error('post_code')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                {{-- shipping method --}}
                                <div class="col-md-12 pl-0">
                                    <h4 class="mb-3 ">Shipping Method</h4>
                                    <div class="col-12 ">
                                        <div class="row justify-content-start">
                                            <input type="radio" name="delivery_method" class="mt-2 mr-2" value="0"> 
                                            <p class="">Standard in 8-10 business days- $9.99</p> 
                                        </div>
                                        <div class="row justify-content-start">
                                            <input type="radio" name="delivery_method" class="mt-2 mr-2" value="1"> 
                                            <p class="">Express in 1-2 business days- 19.99</p>     
                                        </div>

                                    </div>
                                    @error('delivery_method')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                                </div>
                                <div class="row justify-content-center mt-4">
                                    <button type="submit" class="btn btn-primary">Confirm shipping</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>                
    </section>
@endsection
