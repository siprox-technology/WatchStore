@extends('layouts.app')

@section('content')
{{-- checkout --}}
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <!-- shipping-information -->
                <div class="col-12 col-md-10">
                    <div class="inner-wrapper border-box">
                        <h3 class="mb-5 border-bottom pb-2">Shipping Information</h3>
                        <form class="row mb-5" action="{{route('order.submit')}}" method="POST">
                            @csrf
                            {{-- delivery address --}}
                            <div class="col-md-12">
                                {{-- delivery address --}}
                                <h4 class="mb-3">Shipping Address</h4> 
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
                                <div class="col-md-6">
                                    <h4 class="mb-3">Shipping Method</h4>
                                    <ul class="">
                                        <li> <input type="radio" name="delivery_method" value="0"> Standard in 8-10 business days- $9.99 </li>
                                        <li> <input type="radio" name="delivery_method" value="1"> Express in 1-2 business days- 19.99 </li>
                                    </ul>
                                    @error('delivery_method')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                                </div>
                                <div class="row mx-auto">
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
