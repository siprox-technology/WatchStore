@extends('layouts.app')

@section('content')

        <!-- products details -->
        <!-- main wrapper -->
        <div class="main-wrapper">

            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <!-- product image slider -->
                            <div id="product-gallary-images" class="carousel slide w-100" data-ride="imgList">
                                <div class="carousel-inner text-center" id="imgList">
                                    @for ($i = 0; $i < $numOfImages; $i++)
                                        <div class="carousel-item {{($i==0)?'active':''}}">
                                            <img class="w-100"
                                            src="{{asset('images/product-images/'.$product->model_number.'/'.$product->model_number.'-'.$i.'.jpg')}}" alt="">
                                        </div>
                                    @endfor
                               </div>
                                <!-- Left and right controls -->
                                <a class="carousel-control-prev " href="" data-target="#product-gallary-images"
                                    data-slide="prev">
                                    <i class="fas fa-arrow-left text-white" id="product-galary-icons"></i>
                                </a>
                                <a class="carousel-control-next" href="" data-target="#product-gallary-images"
                                    data-slide="next">
                                    <i class="fas fa-arrow-right text-white" id="product-galary-icons"></i>
                                </a>
                            </div>
                        </div>
                        <!-- produt details -->
                        <div class="col-lg-6 mb-5">
                            {{-- name and model number --}}
                            <h2>{{$product->name}} ({{$product->model_number}})</h2>
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
                            <h4 class="text-primary h3">${{($product->price)-($product->price)*($product->discount)/100}} <s class="text-color ml-2">${{$product->price}}</s></h4>
                            <h6 class="mb-4">You save: <span class="text-primary">${{($product->price)-(($product->price)-($product->price)*($product->discount)/100)}} USD ({{$product->discount}}%)</span></h6>
                            {{-- color --}}
                            <div class="row pl-3">
                                <h4>Color:</h4>
                                <span class="mb-2"  style="
                                height: 30px;
                                width: 30px;
                                border-radius: 20px;
                                background-color :{{(explode('/',$product->color))[0]}};
                                @if ((explode('/',$product->color))[0]=='white')
                                border: 1px solid black;
                                @endif
                                "></span>
                                    <span  style="
                                height: 30px;
                                width: 30px;
                                border-radius: 20px;
                                background-color:{{(explode('/',$product->color))[1]}};
                                @if ((explode('/',$product->color))[0]=='white')
                                border: 1px solid black;
                                @endif
                                "></span>
                            </div>

                            <a href="{{route('cart.add',$product->id)}}" class="btn btn-primary mb-4">add to cart</a>
                            <h4 class="mb-3"><span class="text-primary">Harry up!</span> Sale ends in</h4>
                            <!-- syo-timer -->
                            <div class="syotimer dark">
                                <div id="sale-timer" data-year="2019" data-month="5" data-day="1" data-hour="1"
                                    class="syotimer">
                                    <div class="syotimer__head"></div>
                                    <div class="syotimer__body">
                                        <p style="font-size: 1.2em;">The countdown is finished!</p>
                                    </div>
                                    <div class="syotimer__footer"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="payment-option border border-primary mt-5 mb-4">
                                <h5 class="bg-white">Guaranted Safe Checkout</h5>
                                <img class="img-fluid w-100 p-3" src="{{asset("images/payment-card/all-card.png")}}"
                                    alt="payment-card">
                            </div>
                            <h5 class="mb-3">4 Great Reason to Buy From Us</h5>
                            <div class="row">
                                <!-- service item -->
                                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <i class="fas fa-truck icon-md mr-3"></i>
                                        <div class="align-items-center">
                                            <h6>Free Shipping</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- service item -->
                                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <i class="fa fa-link icon-md mr-3"></i>
                                        <div class="align-items-center">
                                            <h6>Secure Payment</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- service item -->
                                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <i class="fas fa-dollar-sign icon-md mr-3"></i>
                                        <div class="align-items-center">
                                            <h6>Lowest Price</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- service item -->
                                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <i class="fas fa-sync icon-md mr-3"></i>
                                        <div class="align-items-center">
                                            <h6>30 Days Return</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 p-4">
                            {{-- description --}}
                            <h3 class="mb-3">Product Description</h3>
                            <p class="text-gray mb-4">{{$product->description}}</p>
                            {{-- specification --}}
                            <h4>Product Specification</h4>
            
                            <ul class="features-list ml-3">
                                @foreach ($specs as $key => $value)
                                    <li class="row">
                                        <p class="mr-2"><b>{{$key}} :</b></p>
                                        <p>{{$value}}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        <!-- related products -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Related products</h2>
                    </div>
                    <div class="col-12">
                        <div class="collection-slider">
                            <!-- product -->
                            @foreach ($related_products as $product)
                                <div class="col-lg-3 col-sm-6 mb-4">
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
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
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
                    </div>
                </div>
            </div>
        </section>
        <!-- /collection -->

@endsection