@extends('layouts.app')

@section('content')

        <!-- products details -->
        <!-- main wrapper -->
        <div class="main-wrapper">

        <section class="section pb-0" style="padding-top: 6rem">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-5 mb-lg-0">
                        <!-- product image slider -->
                        <div id="product-gallary-images" class="carousel slide w-100" data-ride="imgList">
                            <div class="carousel-inner text-center" id="imgList">
                                @for ($i = 0; $i < $numOfImages; $i++)
                                    <div class="carousel-item {{($i==0)?'active':''}}">
                                        <img class="w-50" src="{{asset('images/product-images/'.$product->model_number.'/'.$product->model_number.'-'.$i.'.jpg')}}" alt="">
                                    </div>
                                @endfor
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev " href="" data-target="#product-gallary-images"
                                data-slide="prev">
                                <i class="fas fa-arrow-left text-dark" id="product-galary-icons"></i>
                            </a>
                            <a class="carousel-control-next" href="" data-target="#product-gallary-images"
                                data-slide="next">
                                <i class="fas fa-arrow-right text-dark" id="product-galary-icons"></i>
                            </a>
                        </div>
                    </div>
                    <!-- produt details -->
                    <div class="col-sm-6 mb-5 p-4 bg-gray">
                        <div class="text-sm-left text-center">
                            {{-- name and model number --}}
                            <h4 class="d-none d-lg-block">{{$product->name}} ({{$product->model_number}})</h4>
                            <h5 class="d-lg-none">{{$product->name}} ({{$product->model_number}})</h4>
                            <i class="ti-check-box text-success"></i>
                            <span class="{{(($product->stock) > 0 )? 'text-success':'text-danger'}}">{{(($product->stock) > 0 )? 'instock':'sold out'}}</span>
                            <ul class="list-inline mb-4">
                                @switch($average_review_star)
                                    @case($average_review_star == 0)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        @break
                                    @case($average_review_star<1)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star fa-star-half-alt"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>   
                                        @break
                                    @case($average_review_star==1)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>  
                                        @break
                                    @case($average_review_star<2)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star fa-star-half-alt"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li> 
                                        @break
                                    @case($average_review_star==2)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li> 
                                        @break
                                    @case($average_review_star<3)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star yellow-star"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star yellow-star"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star fa-star-half-alt"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning "></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        @break
                                    @case($average_review_star==3)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li> 
                                        @break
                                    @case($average_review_star<4)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fa text-warning fa-star-half-alt"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li>
                                        @break
                                    @case($average_review_star==4)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="far fa-star text-warning"></i></a>
                                        </li> 
                                        @break
                                    @case($average_review_star<5)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star fa-star-half-alt"></i></a>
                                        </li> 
                                        @break
                                    @case($average_review_star==5)
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li>
                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                            class="fas fa-star yellow-star text-warning"></i></a>
                                        </li> 
                                        @break
                                        
                                @endswitch
                                {{-- product review count and average star --}}
                                <li class="list-inline-item"><a href="#" class="text-gray ml-3">( {{count($product->reviews)}} Reviews )</a></li>
                            </ul>
                            {{-- price and discount --}}
                            <h4 class="text-dark h3">${{number_format(($product->price)-($product->price)*($product->discount)/100,2)}} <s class="text-danger ml-2">${{number_format($product->price,2)}}</s></h4>
                            <h6 class="mb-4">You save: <span class="text-danger">${{number_format(($product->price)-(($product->price)-($product->price)*($product->discount)/100),2)}} USD ({{$product->discount}}%)</span></h6>
                            {{-- color --}}
                            <div class="row pl-3 justify-content-center justify-content-sm-start">
                                <h4>Color:</h4>
                                <span class="mb-2 ml-2"  style="
                                height: 30px;
                                width: 30px;
                                border-radius: 20px;
                                background-color :{{(explode('/',$product->color))[0]}};
                                @if ((explode('/',$product->color))[0]=='white')
                                border: 1px solid black;
                                @endif
                                "></span>
                                <span class="ml-2" style="
                                height: 30px;
                                width: 30px;
                                border-radius: 20px;
                                background-color:{{(explode('/',$product->color))[1]}};
                                @if ((explode('/',$product->color))[0]=='white')
                                border: 1px solid black;
                                @endif
                                "></span>
                            </div>
                            <a href="{{route('cart.add',$product->id)}}" class="btn btn-primary mt-3 px-4 py-3">add to cart</a>
                        </div>
                    </div>
                    <div class="col-12 bg-gray px-4">
                        <div class="row">
                            <div class="col-sm-7 pt-4">
                                <h5 class="mb-4 text-center text-sm-left">4 Great Reason to Buy From Us</h5>
                                <div class="row">
                                    <!-- service item -->
                                    <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                        <div class="d-flex flex-row">
                                            <i class="fas fa-truck icon-md mx-3"></i>
                                            <h6>Free Shipping</h6>
                                        </div>
                                    </div>
                                    <!-- service item -->
                                    <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                        <div class="d-flex flex-row">
                                            <i class="fa fa-link icon-md mx-3"></i>
                                            <h6>Secure Payment</h6>
                                        </div>
                                    </div>
                                    <!-- service item -->
                                    <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                        <div class="d-flex flex-row">
                                            <i class="fas fa-dollar-sign icon-md mx-3"></i>
                                            <h6>Lowest Price</h6>
                                        </div>
                                    </div>
                                    <!-- service item -->
                                    <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                        <div class="d-flex flex-row">
                                            <i class="fas fa-sync icon-md mx-3"></i>
                                            <h6>30 Days Return</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="payment-option border border-primary mt-5 mb-4">
                                    <h5 class="bg-white">Guaranted Safe Checkout</h5>
                                    <img class="img-fluid w-100 p-3" src="{{asset("images/payment-card/all-card.png")}}"
                                        alt="payment-card">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 p-4 mt-3">
                        {{-- description --}}
                        <hr class="mb-5">
                        <h4 class="mb-4">Product Description</h4>
                        <h6 class="text-gray mb-5 ml-2" style="line-height: 1.6">{{$product->description}}</h6>
                        {{-- specification --}}
                        <hr class="mb-5">
                        <h4 class="mb-4">Product Specification</h4>
                        <ul class="pl-0 row">
                            @foreach ($specs as $key => $value)
                                <li class="row mx-4">
                                    <h6 class="mr-2"><b>{{$key}} :</b></h6>
                                    <h6>{{$value}}</h6>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- related products -->
        <section class="section pb-0 pt-0 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mt-5">
                        <h4 class="section-title">Related products</h4>
                    </div>
                    <div class="col-12">
                        <div class="collection-slider">
                            <!-- product -->
                            @foreach ($related_products as $items)
                                <div class="col-sm-6 mb-0 p-5">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a class="" href="{{route('shop.product_details.index',$items->model_number)}}">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="{{asset('images/product-images/'.$items->model_number.'/'.$items->model_number.'-0.jpg')}}" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="{{asset('images/product-images/'.$items->model_number.'/'.$items->model_number.'-1.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h6"><a class="text-color" href="{{route('shop.product_details.index',$items->model_number)}}">{{$items->name}}</a></h3>
                                            <span class="h6"><b>{{number_format($items->price,2)}}</b></span>
                                        </div>
                                        <!-- product label badge -->
                                        <div class="product-label sale">
                                            @if ($items->discount !== '0')
                                            -{{$items->discount}}%
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /collection -->
        {{-- product reviews --}}
        @if (count($product->reviews)>0)
        <section class="section py-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="section-title my-5">What our customer think</h4>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            @foreach ($product->reviews as $item)
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="d-flex">
                                        <div>
                                            @if (file_exists('images/users-image/'.$item->user_id.'.jpg'))
                                                <img class="rounded-circle mr-4" style="height:35px; width:35px;" src="{{asset('images/users-image/'.$item->user_id.'.jpg')}}" alt="customer-img">
                                            @else
                                                <img class="rounded-circle mr-4" style="height:35px; width:35px;" src="{{asset('images/users-image/default.jpg')}}" alt="customer-img">
                                            @endif
                                        </div>
                                        <div>
                                            <ul class="list-inline">
                                                @switch($item->star_number)
                                                    @case($item->star_number == 0)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        @break
                                                    @case($item->star_number<1)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star fa-star-half-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>   
                                                        @break
                                                    @case($item->star_number==1)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>  
                                                        @break
                                                    @case($item->star_number<2)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star fa-star-half-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li> 
                                                        @break
                                                    @case($item->star_number==2)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li> 
                                                        @break
                                                    @case($item->star_number<3)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star yellow-star"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star yellow-star"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star fa-star-half-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning "></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        @break
                                                    @case($item->star_number==3)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li> 
                                                        @break
                                                    @case($item->star_number<4)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fa text-warning fa-star-half-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li>
                                                        @break
                                                    @case($item->star_number==4)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="far fa-star text-warning"></i></a>
                                                        </li> 
                                                        @break
                                                    @case($item->star_number<5)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star fa-star-half-alt"></i></a>
                                                        </li> 
                                                        @break
                                                    @case($item->star_number==5)
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li>
                                                        <li class="list-inline-item mx-0"><a href="#" class="rated"><i
                                                            class="fas fa-star yellow-star text-warning"></i></a>
                                                        </li> 
                                                        @break
                                                        
                                                @endswitch                                    
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <textarea disabled="true"class="text-gray border-0 bg-white w-100">{{$item->text}}</textarea>
                                            <h5 class="customer-name text-dark">{{$item->user->name}}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        {{-- submit review form --}}
        @auth
            @for ($i = 0; $i < count(auth()->user()->orders); $i++)
                @if (count(auth()->user()->orders[$i]->order_items->where('product_id',$product->id))>0)
                    <section>
                        <div class="continer">
                            <div class="col-lg-12 text-center">
                                <h4 class="section-title">Submit your review</h4>
                            </div>
                            <form class="mb-5" method="POST" action="{{route('review.add')}}">
                                @csrf
                                <div class="form-group col-sm-6 col-md-8  mx-auto">
                                    <textarea type="text" name="review_text" cols="30" rows="10"
                                        maxlength="495" style="resize: none;"
                                    class="form-control 
                                    @error('review_text') border border-danger @enderror" 
                                    placeholder="Your comment..." value="{{old('review_text')}}"></textarea>
                                    @error('review_text')
                                    <div class=" text-danger mt-2 ">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="hidden" id="star_number" name="star_number" value="">

                                <div class="form-group col-10 mx-auto text-center">
                                    <h5 class="pb-1">Your Rating : <span id="ratingText" class="text-warning">Please Select</span></h5>
                                    <ul class="comment bottom15 top10">
                                        <li>
                                            <a href="javascript:void(0)" id="rattingIcon">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                @error('star_number')
                                <div class=" text-danger text-center mb-4">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                @error('submit_error')
                                    <div class="text-center text-danger mt-2 ">
                                        {{$message}}
                                    </div>
                                @enderror         
                            </form>
                        </div>
                    </section>
                @break
                @endif
            @endfor
        
        @endauth



@endsection