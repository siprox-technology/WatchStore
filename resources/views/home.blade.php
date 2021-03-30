
@extends('layouts.app')

@section('content')

    <!-- main wrapper -->
    <div class="main-wrapper">
        {{-- hero area --}}
        <section class="section bg-gray hero-area">
            <div class="container">
                <div class="hero-slider">

                    <!-- Casio G shock -->
                    <div class="slider-item">
                        <div class="row">
                            <div class="col-lg-6 align-self-center text-center text-md-left mb-4 mb-lg-0">
                                <h3 data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in="0"
                                    data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-out=".3">For Men’s
                                </h3>
                                <!-- Start Title -->
                                <h1 data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".2"
                                    data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-out=".3">High
                                    Quality Though Watch</h1>
                                <!-- end title -->
                                <!-- Start Subtitle -->
                                <h3 class="mb-4" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".4"
                                    data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-out=".3">for only
                                    $337.80</h3>
                                <!-- end subtitle -->
                                <!-- Start description -->
                                <p class="mb-4" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".6"
                                    data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-out=".3">
                                    Mens Casio G-Steel Bluetooth Triple Connect Chronograph Radio Controlled Watch.</p>
                                <!-- end description -->
                                <!-- Start button -->
                                <a href="{{route('shop.product_details.index','GST-B100-1AER')}}" class="btn btn-primary" data-duration-in=".5"
                                    data-animation-in="fadeInLeft" data-delay-in=".8" data-animation-out="fadeOutLeft"
                                    data-delay-out="5" data-duration-out=".3">shop now</a>
                                <!-- end button -->
                            </div>
                            <!-- Start slide image -->
                            <div class="col-lg-6 text-center text-md-left">
                                <!-- background letter -->
                                <div class="bg-letter">
                                    <span data-duration-in=".5" data-animation-in="fadeInRight" data-delay-in="1.2"
                                        data-animation-out="fadeOutRight" data-delay-out="5" data-duration-out=".3">
                                        C
                                    </span>
                                    <!-- Slide image -->
                                    <img class="img-fluid d-unset w-75" src="{{asset('images/hero-area/GST-B100-1AER-0.png')}}" alt="converse"
                                        data-duration-in=".5" data-animation-in="fadeInRight" data-delay-in="1"
                                        data-animation-out="fadeOutRight" data-delay-out="5" data-duration-out=".3">
                                </div>
                            </div>
                            <!-- end slide image  -->
                        </div>
                    </div>
                    <!-- end slider item -->

                    {{-- Tissot T lady --}}
                    <div class="slider-item">
                        <div class="row">
                            <div class="col-lg-6 align-self-center text-center text-md-left mb-4 mb-lg-0">
                                <h3 data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="0"
                                    data-animation-out="fadeOutDown" data-delay-out="5.8" data-duration-out=".3">For
                                    Women’s</h3>
                                <h1 data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".2"
                                    data-animation-out="fadeOutDown" data-delay-out="5.4" data-duration-out=".3">High
                                    Quality watch</h1>
                                <h3 class="mb-4" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".4"
                                    data-animation-out="fadeOutDown" data-delay-out="5" data-duration-out=".3">for only
                                    $248.99</h3>
                                <p class="mb-4" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".6"
                                    data-animation-out="fadeOutDown" data-delay-out="4.6" data-duration-out=".3">
                                    Ladies Tissot T-Lady Lovely Square Watch.</p>
                                <a href="shop.html" class="btn btn-primary" data-duration-in=".5"
                                    data-animation-in="fadeInDown" data-delay-in=".8" data-animation-out="fadeOutDown"
                                    data-delay-out="4.2" data-duration-out=".3">shop now</a>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="bg-letter">
                                    <!-- background letter -->
                                    <span data-duration-in=".5" data-animation-in="fadeInRight" data-delay-in="1.2"
                                        data-animation-out="fadeOutRight" data-delay-out="5" data-duration-out=".3">
                                        T
                                    </span>
                                    <img class="img-fluid d-unset" src="{{asset('images/hero-area/T0581091603100-0.jpg')}}" alt="converse"
                                        data-duration-in=".5" data-animation-in="fadeInRight" data-delay-in="1"
                                        data-animation-out="fadeOutRight" data-delay-out="5" data-duration-out=".3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide  -->
                </div>
            </div>
        </section>
        <!-- /hero area-->

        <!-- categories -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Top Categories</h2>
                    </div>
                    <!-- Casio edifice-->
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="card p-0">
                            <div class="border-bottom text-center hover-zoom-img">
                                <a href="{{route('shop.product_details.index','EFR-570BL-1AVUEF')}}"><img src="{{asset('images/categories/EFR-570BL-1AVUEF-0.jpg')}}"
                                        class="rounded-top img-fluid w-100 p-4" alt="product-img"></a>
                            </div>
                            <ul class="d-flex list-unstyled pl-0 categories-list">
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','ECB-10DB-1AEF')}}"><img src="{{asset('images/categories/ECB-10DB-1AEF-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','EFR-569DB-1AVUEF')}}"><img src="{{asset('images/categories/EFR-569DB-1AVUEF-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','EFR-570DB-1BVUEF')}}"><img src="{{asset('images/categories/EFR-570DB-1BVUEF-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                            </ul>
                            <div class="px-4 py-3 border-top">
                                <h4 class="d-inline-block mb-0 mt-1">CASIO Edifice</h4>
                                <a href="{{route('shop.index')}}" class="btn btn-sm btn-outline-primary float-right">view more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tissot Heritage-->
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="card p-0">
                            <div class="border-bottom text-center hover-zoom-img">
                                <a href="{{route('shop.product_details.index','T0194301605101')}}"><img src="{{asset('images/categories/T0194301605101-0.jpg')}}"
                                        class="rounded-top img-fluid w-100 p-4" alt="product-img"></a>
                            </div>
                            <ul class="d-flex list-unstyled pl-0 categories-list">
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','T1184101605701')}}"><img src="{{asset('images/categories/T1184101605701-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','T0194301104100')}}"><img src="{{asset('images/categories/T0194301104100-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','T66171233')}}"><img src="{{asset('images/categories/T66171233-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                            </ul>
                            <div class="px-4 py-3 border-top">
                                <h4 class="d-inline-block mb-0 mt-1">Original Gents</h4>
                                <a href="{{route('shop.index')}}" class="btn btn-sm btn-outline-primary float-right">view more</a>
                            </div>
                        </div>
                    </div>
                    <!-- ladies -->
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="card p-0">
                            <div class="border-bottom text-center hover-zoom-img">
                                <a href="{{route('shop.product_details.index','GN254')}}"><img src="{{asset('images/categories/GN254-0.jpg')}}"
                                        class="rounded-top img-fluid w-100 p-4" alt="product-img"></a>
                            </div>
                            <ul class="d-flex list-unstyled pl-0 categories-list">
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','GP171')}}"><img src="{{asset('images/categories/GP171-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','LN157')}}"><img src="{{asset('images/categories/LN157-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="{{route('shop.product_details.index','SUON700')}}"><img src="{{asset('images/categories/SUON700-0.jpg')}}"
                                            class="img-fluid w-100 p-4" alt="product-img"></a>
                                </li>
                            </ul>
                            <div class="px-4 py-3 border-top">
                                <h4 class="d-inline-block mb-0 mt-1">Ladies</h4>
                                <a href="{{route('shop.index')}}" class="btn btn-sm btn-outline-primary float-right">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /categories -->

        <section class="section overlay cta" data-background="images/backgrounds/cta.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="text-white mb-2">End of Season Sale</h1>
                        <p class="text-white mb-4">Up to 30% off all watches.
                        </p>
                        <a href="{{route('shop.sort_filter.index',['sortBy'=>'discount','price'=>'1000000'])}}" class="btn btn-light">shop now</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- collection -->
        <section class="section bg-gray" id="collection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Top Collections</h2>
                    </div>
                    <div class="col-12">
                        <div class="collection-slider">
                            <!-- products -->
                            @foreach ($collection as $items)
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="{{route('shop.product_details.index',$items->model_number)}}">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/product-images/'.$items->model_number.'/'.$items->model_number.'-0.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/product-images/'.$items->model_number.'/'.$items->model_number.'-1.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="{{route('cart.add',$items->id)}}" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h6"><a class="text-color" href="{{route('shop.product_details.index',$items->model_number)}}">{{$items->name}}</a></h3>
                                        <span class="h6"><b>{{$items->price}}</b></span>
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

                            <!-- //end of product -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /collection -->

        <!-- deal -->
        <section class="section " data-background="images/backgrounds/deal.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                        <h1>Deal of the day</h1>
                        <!-- syo-timer -->
                        <div class="syotimer large">
                            <div id="simple-timer" data-year="2019" data-month="12" data-day="1" data-hour="1"></div>
                        </div>
                        <a href="{{route('shop.product_details.index',$deal->model_number)}}" class="btn btn-primary">shop now</a>
                    </div>
                    <div class="col-md-6 text-center text-md-left align-self-center">
                        <img src="{{asset('images/product-images/'.$deal->model_number.'/'.$deal->model_number.'-0.jpg')}}" alt="product-img" class="img-fluid up-down">
                    </div>
                </div>
            </div>
        </section>
        <!-- /deal -->

        <!-- service -->
        <section class="section-sm border-top">
            <div class="container">
                <div class="row">
                    <!-- service item -->
                    <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                        <div class="d-flex flex-sm-row flex-column align-items-center align-items-sm-start">
                            <i class="fas fa-shipping-fast icon-lg mr-4 mb-3 mb-sm-0"></i>
                            <div class="text-center text-sm-left">
                                <h4>Free Shipping</h4>
                                <p class="mb-0 text-gray">Free shipping on oder over $70</p>
                            </div>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                        <div class="d-flex flex-sm-row flex-column align-items-center align-items-sm-start">
                            <i class="fas fa-shield-alt icon-lg mr-4 mb-3 mb-sm-0"></i>
                            <div class="text-center text-sm-left">
                                <h4>Secure Payment</h4>
                                <p class="mb-0 text-gray">We ensure secure payment with PEV</p>
                            </div>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                        <div class="d-flex flex-sm-row flex-column align-items-center align-items-sm-start">
                            <i class="far fa-clock icon-lg mr-4 mb-3 mb-sm-0"></i>
                            <div class="text-center text-sm-left">
                                <h4>Support 24/7</h4>
                                <p class="mb-0 text-gray">Contact us 24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                        <div class="d-flex flex-sm-row flex-column align-items-center align-items-sm-start">
                            <i class="fas fa-sync icon-lg mr-4 mb-3 mb-sm-0"></i>
                            <div class="text-center text-sm-left">
                                <h4>30 Days Return</h4>
                                <p class="mb-0 text-gray">Simply return it within 30 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /service -->


        <!-- Newsletter Modal -->
        <!--         <div class="modal fade subscription-modal" id="subscriptionModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="container-fluid">
                        <div class="row">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="col-lg-6 px-0">
                                <div class="image"><img src="{{asset('images/newsletter-popup.jpg')}}" alt="products"
                                        class="img-fluid w-100 rounded-left"></div>
                            </div>
                            <div class="col-lg-6 align-self-center p-5">
                                <div class="text-center align-self-center">
                                    <h3 class="mb-lg-5 mb-4">Lucky You!</h3>
                                    <h4>Want an Instant</h4>
                                    <h2 class="mb-lg-5 mb-4">10% OFF?</h2>
                                    <div class="form">
                                        <input type="email" class="form-control mb-3" name="email" id="email"
                                            placeholder="Email Address">
                                        <button class="btn btn-primary w-100" type="submit">Join Us</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /Newsletter Modal -->

    </div>

@endsection
  