@extends('layouts.app')

@section('content')
<form action="{{route('shop.sort_filter.index')}}" method="GET">
    @csrf
    <!-- products -->
    <!-- main wrapper -->
    <div class="main-wrapper">
        <section class="section">
            <div class="container">
                <div class="row">
                    {{-- number of items shown  -  sort by--}}
                    <div class="col-12 mb-5 mx-auto">
                        <div class="m-0 border row w-100">
                            @if ($products->count())
                                <p class="text-color mb-0 p-2">Showing 
                                    <span class=" text-gray">
                                        {{$products->count()}} of {{$products->total()}}
                                    </span> Results 
                                </p>
                            @else
                                <p class="text-danger mb-0 p-2">No products found !
                                </p>
                            @endif

                        </div>
                    </div>
                    <!-- product-list -->
                    <div class="col-12">
                        <div class="row">
                            @foreach ($products as $product)
                            <!-- products links -->
                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="{{route('shop.product_details.index',$product->model_number)}}">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/product-images/'.$product->model_number.'/'.$product->model_number.'-0.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/product-images/'.$product->model_number.'/'.$product->model_number.'-1.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="{{'cart.add',$product->product_id}}" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h6"><a class="text-color" href="{{route('shop.product_details.index',$product->model_number)}}">{{$product->name}}</a></h3>
                                        <span class="h6"><b>{{$product->price}}</b></span>
                                    </div>
                                    <!-- product label badge -->
                                    <div class="product-label sale">
                                        @if ($product->discount !== '0')
                                        -{{$product->discount}}%
                                        @endif
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                        {{-- pagination links --}}
                        <div class="row justify-content-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Button trigger modal -->
    </form>
  


    
@endsection