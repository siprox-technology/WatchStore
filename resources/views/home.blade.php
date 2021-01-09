
@extends('layouts.app')

@section('content')
      <!-- preloader start -->
      <div class="preloader">
        <img src="{{asset('images/preloader.gif" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- header -->
    <header>
        <!-- top advertise -->
        <!-- <div class="alert alert-secondary alert-dismissible fade show rounded-0 pb-0 mb-0" role="alert">
    <div class="d-flex justify-content-between">
      <p>SAVE UP TO $50</p>
      <h4>SALE!</h4>
      <div class="shop-now">
        <a href="shop.html" class="btn btn-sm btn-primary">Shop Now</a>
      </div>
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> -->

        <!-- top header -->
        <div class="top-header">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="text-white mb-lg-0 mb-1">Free shipping • Free 30 days return • Express delivery</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><img src="{{asset('images/flag.jpg')}}" alt="flag"></li>
                        <li class="list-inline-item"><a href="login.html">My Accounts</a></li>
                        <li class="list-inline-item">
                            <form action="#">
                                <select class="country" name="country">
                                    <option value="USD">USD</option>
                                    <option value="JPN">JPN</option>
                                    <option value="BAN">BAN</option>
                                </select>
                            </form>
                            <!-- <li class="list-inline-item">
            <a class="active" href="#">EN</a>
            <a href="#">FR</a>
          </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- /top-header -->
    </header>

    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white w-100" id="navbar">
        <a class="navbar-brand order-2 order-lg-1" href="index.html"><img class="img-fluid" src="{{asset('images/logo.png')}}"
                alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-1 order-lg-2" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">home</a>
                </li>
                <li class="nav-item dropdown view">
                    <a class="nav-link dropdown-toggle" href="shop.html" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        shop
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="shop.html">Shop</a>
                        <a class="dropdown-item" href="shop-list.html">Shop List</a>
                        <a class="dropdown-item" href="product-single.html">Product Single</a>
                        <a class="dropdown-item" href="cart.html">Cart</a>
                        <a class="dropdown-item" href="shipping.html">Shipping Method</a>
                        <a class="dropdown-item" href="payment.html">Payment Method</a>
                        <a class="dropdown-item" href="review.html">Review</a>
                        <a class="dropdown-item" href="confirmation.html">Confirmation</a>
                        <a class="dropdown-item" href="track.html">Track Order</a>
                    </div>
                </li>
                <li class="nav-item dropdown view">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        pages
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="about.html">About Us</a>
                        <a class="dropdown-item" href="contact.html">Contact Us</a>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="signin.html">Signup</a>
                        <a class="dropdown-item" href="forget-password.html">Forget Password</a>
                        <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404 Page</a>
                        <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                        <a class="dropdown-item" href="blog-grid.html">Blog</a>
                        <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                    </div>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Mega Menu
                    </a>
                    <div class="dropdown-menu mega-menu">
                        <div class="mx-3 mega-menu-item">
                            <h6>Men</h6>
                            <ul class="pl-0">
                                <li><a href="shop.html">Jackets & Coats</a></li>
                                <li><a href="shop.html">Jeans</a></li>
                                <li><a href="shop.html">Top & T-Shirts</a></li>
                                <li><a href="shop.html">Dresses</a></li>
                                <li><a href="shop.html">Men Shirts</a></li>
                            </ul>
                        </div>
                        <div class="mx-3 mega-menu-item">
                            <h6>Women</h6>
                            <ul class="pl-0">
                                <li><a href="shop.html">Blouses & Shirts</a></li>
                                <li><a href="shop.html">Dresses</a></li>
                                <li><a href="shop.html">Top & T-Shirts</a></li>
                                <li><a href="shop.html">Jeans & Trousers</a></li>
                                <li><a href="shop.html">Jackets & Coats</a></li>
                            </ul>
                        </div>
                        <div class="mx-3 mega-menu-item">
                            <h6>Shoes & Bags</h6>
                            <ul class="pl-0">
                                <li><a href="shop.html">Backpacks</a></li>
                                <li><a href="shop.html">Bum Bags</a></li>
                                <li><a href="shop.html">Accross Bags</a></li>
                                <li><a href="shop.html">Shoes</a></li>
                                <li><a href="shop.html">Heeled Shoes</a></li>
                            </ul>
                        </div>
                        <div class="mx-3 mega-menu-item">
                            <h6>Accessories</h6>
                            <ul class="pl-0">
                                <li><a href="shop.html">Sunglasses</a></li>
                                <li><a href="shop.html">Watches</a></li>
                                <li><a href="shop.html">Gloves</a></li>
                                <li><a href="shop.html">Capes & Hats</a></li>
                                <li><a href="shop.html">Belts</a></li>
                            </ul>
                        </div>
                        <div class="mx-3 mega-megu-image">
                            <img class="img-fluid h-100" src="{{asset('images/mega-megu.jpg')}}" alt="feature-img">
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="order-3 navbar-right-elements">
            <div class="search-cart">
                <!-- search -->
                <div class="search">
                    <button id="searchOpen" class="search-btn"><i class="fas fa-search"></i></button>
                    <div class="search-wrapper">
                        <form action="#">
                            <input class="search-box" id="search" type="search" placeholder="Enter Keywords...">
                            <button class="search-icon" type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- cart -->
                <div class="cart">
                    <button id="cartOpen" class="cart-btn"><i class="fas fa-shopping-cart"></i><span
                            class="d-xs-none">CART</span>
                        3</button>
                    <div class="cart-wrapper">
                        <i id="cartClose" class="ti-close cart-close"></i>
                        <h4 class="mb-4">Your Cart</h4>
                        <ul class="pl-0 mb-3">
                            <li class="d-flex border-bottom">
                                <img src="{{asset('images/cart/product-1.jpg')}}" alt="product-img">
                                <div class="mx-3">
                                    <h6>Eleven Paris Skinny Jeans</h6>
                                    <span>1</span> X <span>$79.00</span>
                                </div>
                                <i class="ti-close"></i>
                            </li>
                            <li class="d-flex border-bottom">
                                <img src="{{asset('images/cart/product-2.jpg')}}" alt="product-img">
                                <div class="mx-3">
                                    <h6>Eleven Paris Skinny Jeans top</h6>
                                    <span>1 X</span> <span>$79.00</span>
                                </div>
                                <i class="ti-close"></i>
                            </li>
                        </ul>
                        <div class="mb-3">
                            <span>Cart Total</span>
                            <span class="float-right">$79.00</span>
                        </div>
                        <div class="text-center">
                            <a href="cart.html" class="btn btn-dark btn-mobile rounded-0">view cart</a>
                            <a href="shipping.html" class="btn btn-dark btn-mobile rounded-0">check out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- /navigation -->

    <!-- main wrapper -->
    <div class="main-wrapper">

        <section class="section bg-gray hero-area">
            <div class="container">
                <div class="hero-slider">

                    <!-- Start first slide  -->
                    <div class="slider-item">
                        <div class="row">
                            <div class="col-lg-6 align-self-center text-center text-md-left mb-4 mb-lg-0">
                                <h3 data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in="0"
                                    data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-out=".3">For Men’s
                                </h3>
                                <!-- Start Title -->
                                <h1 data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".2"
                                    data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-out=".3">High
                                    Quality Converse</h1>
                                <!-- end title -->
                                <!-- Start Subtitle -->
                                <h3 class="mb-4" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".4"
                                    data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-out=".3">for only
                                    $59.00</h3>
                                <!-- end subtitle -->
                                <!-- Start description -->
                                <p class="mb-4" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".6"
                                    data-animation-out="fadeOutLeft" data-delay-out="5" data-duration-out=".3">Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <!-- end description -->
                                <!-- Start button -->
                                <a href="shop.html" class="btn btn-primary" data-duration-in=".5"
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
                                    <img class="img-fluid d-unset" src="{{asset('images/hero-area/converse.png')}}" alt="converse"
                                        data-duration-in=".5" data-animation-in="fadeInRight" data-delay-in="1"
                                        data-animation-out="fadeOutRight" data-delay-out="5" data-duration-out=".3">
                                </div>
                            </div>
                            <!-- end slide image  -->
                        </div>
                    </div> <!-- end slider item -->


                    <!-- Start slide  -->
                    <div class="slider-item">
                        <div class="row">
                            <div class="col-lg-6 align-self-center text-center text-md-left mb-4 mb-lg-0">
                                <h3 data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="0"
                                    data-animation-out="fadeOutDown" data-delay-out="5.8" data-duration-out=".3">For
                                    Women’s</h3>
                                <h1 data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".2"
                                    data-animation-out="fadeOutDown" data-delay-out="5.4" data-duration-out=".3">High
                                    Quality Bag</h1>
                                <h3 class="mb-4" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".4"
                                    data-animation-out="fadeOutDown" data-delay-out="5" data-duration-out=".3">for only
                                    $37.00</h3>
                                <p class="mb-4" data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in=".6"
                                    data-animation-out="fadeOutDown" data-delay-out="4.6" data-duration-out=".3">Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <a href="shop.html" class="btn btn-primary" data-duration-in=".5"
                                    data-animation-in="fadeInDown" data-delay-in=".8" data-animation-out="fadeOutDown"
                                    data-delay-out="4.2" data-duration-out=".3">shop now</a>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="bg-letter">
                                    <!-- background letter -->
                                    <span data-duration-in=".5" data-animation-in="fadeInRight" data-delay-in="1.2"
                                        data-animation-out="fadeOutRight" data-delay-out="5" data-duration-out=".3">
                                        B
                                    </span>
                                    <img class="img-fluid d-unset" src="{{asset('images/hero-area/bag.png')}}" alt="converse"
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
                    <!-- categories item -->
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="card p-0">
                            <div class="border-bottom text-center hover-zoom-img">
                                <a href="shop.html"><img src="{{asset('images/categories/product-big-1.jpg')}}"
                                        class="rounded-top img-fluid w-100" alt="product-img"></a>
                            </div>
                            <ul class="d-flex list-unstyled pl-0 categories-list">
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-1.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-2.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-3.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                            </ul>
                            <div class="px-4 py-3 border-top">
                                <h4 class="d-inline-block mb-0 mt-1">Clothing</h4>
                                <a href="shop.html" class="btn btn-sm btn-outline-primary float-right">view more</a>
                            </div>
                        </div>
                    </div>
                    <!-- categories item -->
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="card p-0">
                            <div class="border-bottom text-center hover-zoom-img">
                                <a href="shop.html"><img src="{{asset('images/categories/product-big-2.jpg')}}"
                                        class="rounded-top img-fluid w-100" alt="product-img"></a>
                            </div>
                            <ul class="d-flex list-unstyled pl-0 categories-list">
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-4.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-5.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-6.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                            </ul>
                            <div class="px-4 py-3 border-top">
                                <h4 class="d-inline-block mb-0 mt-1">Shoes</h4>
                                <a href="shop.html" class="btn btn-sm btn-outline-primary float-right">view more</a>
                            </div>
                        </div>
                    </div>
                    <!-- categories item -->
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="card p-0">
                            <div class="border-bottom text-center hover-zoom-img">
                                <a href="shop.html"><img src="{{asset('images/categories/product-big-3.jpg')}}"
                                        class="rounded-top img-fluid w-100" alt="product-img"></a>
                            </div>
                            <ul class="d-flex list-unstyled pl-0 categories-list">
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-7.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-8.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                                <li class="m-0 hover-zoom-img">
                                    <a href="shop.html"><img src="{{asset('images/categories/product-sm-9.jpg')}}"
                                            class="img-fluid w-100" alt="product-img"></a>
                                </li>
                            </ul>
                            <div class="px-4 py-3 border-top">
                                <h4 class="d-inline-block mb-0 mt-1">Accessories</h4>
                                <a href="shop.html" class="btn btn-sm btn-outline-primary float-right">view more</a>
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
                        <p class="text-white mb-4">Take 25% off all sweaters and knits. Discount applied at checkout.
                        </p>
                        <a href="shop.html" class="btn btn-light">shop now</a>
                    </div>
                </div>
            </div>
        </section>

        <div id="quickView" class="quickview">
            <div class="row w-100">
                <div class="col-lg-6 col-md-6 mb-5 mb-md-0 pl-5 pt-4 pt-lg-0 pl-lg-0">
                    <img src="{{asset('images/feature/product.png')}}" alt="product-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6 text-center text-md-left align-self-center pl-5">
                    <h3 class="mb-lg-2 mb-2">Woven Crop Cami</h3>
                    <span class="mb-lg-4 mb-3 h5">$90.00</span>
                    <p class="mb-lg-4 mb-3 text-gray">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum. sed ut perspic atis unde omnis iste natus</p>
                    <form action="#">
                        <select class="form-control w-100 mb-2" name="color">
                            <option value="brown">Brown Color</option>
                            <option value="gray">Gray Color</option>
                            <option value="black">Black Color</option>
                        </select>
                        <select class="form-control w-100 mb-3" name="size">
                            <option value="small">Small Size</option>
                            <option value="medium">Medium Size</option>
                            <option value="large">Large Size</option>
                        </select>
                        <button class="btn btn-primary w-100 mb-lg-4 mb-3">add to cart</button>
                    </form>
                    <ul class="list-inline social-icon-alt">
                        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- collection -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Top Collections</h2>
                    </div>
                    <div class="col-12">
                        <div class="collection-slider">
                            <!-- product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/collection/product-1.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/collection/product-4.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-hover-overlay">
                                            <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                data-placement="left" title="Compare"><i
                                                    class="ti-direction-alt"></i></a>
                                            <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                                data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                    class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h5"><a class="text-color" href="product-single.html">Leather
                                                Backpack</a></h3>
                                        <span class="h5">$320.79</span>
                                    </div>
                                </div>
                            </div>
                            <!-- //end of product -->
                            <!-- product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/collection/product-2.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/collection/product-5.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-hover-overlay">
                                            <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                data-placement="left" title="Compare"><i
                                                    class="ti-direction-alt"></i></a>
                                            <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                                data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                    class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h5"><a class="text-color" href="product-single.html">Box Leather
                                                Shoulder Bag</a></h3>
                                        <span class="h5">$520.79</span>
                                    </div>
                                    <!-- product label badge -->
                                    <div class="product-label new">
                                        new
                                    </div>
                                </div>
                            </div>
                            <!-- //end of product -->
                            <!-- product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/collection/product-3.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/collection/product-6.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-hover-overlay">
                                            <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                data-placement="left" title="Compare"><i
                                                    class="ti-direction-alt"></i></a>
                                            <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                                data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                    class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h5"><a class="text-color" href="product-single.html">Sneaky Leather
                                                Sneakers</a></h3>
                                        <span class="h5">$270.79</span>
                                    </div>
                                    <!-- product label badge -->
                                </div>
                            </div>
                            <!-- //end of product -->
                            <!-- product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/collection/product-4.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/collection/product-2.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-hover-overlay">
                                            <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                data-placement="left" title="Compare"><i
                                                    class="ti-direction-alt"></i></a>
                                            <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                                data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                    class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle leather
                                                shoulder bag</a></h3>
                                        <span class="h5">$400.79</span>
                                    </div>
                                    <!-- product label badge -->
                                    <div class="product-label sale">
                                        -10%
                                    </div>
                                </div>
                            </div>
                            <!-- //end of product -->
                            <!-- product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/collection/product-5.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/collection/product-3.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-hover-overlay">
                                            <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                data-placement="left" title="Compare"><i
                                                    class="ti-direction-alt"></i></a>
                                            <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                                data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                    class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle leather
                                                shoulder bag</a></h3>
                                        <span class="h5">$400.79</span>
                                    </div>
                                    <!-- product label badge -->
                                </div>
                            </div>
                            <!-- //end of product -->
                            <!-- product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/collection/product-6.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/collection/product-1.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-hover-overlay">
                                            <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                data-placement="left" title="Compare"><i
                                                    class="ti-direction-alt"></i></a>
                                            <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                                data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                    class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle leather
                                                shoulder bag</a></h3>
                                        <span class="h5">$400.79</span>
                                    </div>
                                </div>
                            </div>
                            <!-- //end of product -->
                            <!-- product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/collection/product-7.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/collection/product-3.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-hover-overlay">
                                            <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                data-placement="left" title="Compare"><i
                                                    class="ti-direction-alt"></i></a>
                                            <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                                data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                    class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle leather
                                                shoulder bag</a></h3>
                                        <span class="h5">$400.79</span>
                                    </div>
                                    <!-- product label badge -->
                                </div>
                            </div>
                            <!-- //end of product -->
                            <!-- product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/collection/product-8.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/collection/product-5.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-hover-overlay">
                                            <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                data-placement="left" title="Compare"><i
                                                    class="ti-direction-alt"></i></a>
                                            <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                                data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                    class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle leather
                                                shoulder bag</a></h3>
                                        <span class="h5">$400.79</span>
                                    </div>
                                </div>
                            </div>
                            <!-- //end of product -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /collection -->

        <!-- deal -->
        <section class="section bg-cover" data-background="images/backgrounds/deal.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                        <h1>Deal of the day</h1>
                        <h4 class="mb-40">Get at discounted price!</h4>
                        <!-- syo-timer -->
                        <div class="syotimer large">
                            <div id="simple-timer" data-year="2019" data-month="12" data-day="1" data-hour="1"></div>
                        </div>
                        <a href="shop.html" class="btn btn-primary">shop now</a>
                    </div>
                    <div class="col-md-6 text-center text-md-left align-self-center">
                        <img src="{{asset('images/deal/product.png')}}" alt="product-img" class="img-fluid up-down">
                    </div>
                </div>
            </div>
        </section>
        <!-- /deal -->

        <!-- instagram -->
        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-2">Follow Us On Instagram</h2>
                        <p class="mb-5">@ Occaecat Cupidatat</p>
                    </div>
                </div>
                <!-- instafeed -->
                <!-- <div class="row" id="instafeed" data-userId="4044026246" data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div> -->
                <!-- for linking to instagram, just uncomment this line and change data-userid with your instagram user id andata-accesstoken with your instagram access token -->

                <!-- without instagram image -->
                <!-- remove this section after link with your instagram account -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 px-0 mb-4">
                        <div class="instagram-post mx-2"><img class="img-fluid w-100" src="{{asset('images/instagram/item-1.png')}}"
                                alt="instagram-image">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-heart mr-2"></i>40</a></li>
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-comments mr-2"></i>24</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 px-0 mb-4">
                        <div class="instagram-post mx-2"><img class="img-fluid w-100" src="{{asset('images/instagram/item-2.png')}}"
                                alt="instagram-image">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-heart mr-2"></i>65</a></li>
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-comments mr-2"></i>11</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 px-0 mb-4">
                        <div class="instagram-post mx-2"><img class="img-fluid w-100" src="{{asset('images/instagram/item-3.png')}}"
                                alt="instagram-image">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-heart mr-2"></i>33</a></li>
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-comments mr-2"></i>78</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 px-0 mb-4">
                        <div class="instagram-post mx-2"><img class="img-fluid w-100" src="{{asset('images/instagram/item-4.png')}}"
                                alt="instagram-image">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-heart mr-2"></i>32</a></li>
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-comments mr-2"></i>77</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 px-0 mb-4">
                        <div class="instagram-post mx-2"><img class="img-fluid w-100" src="{{asset('images/instagram/item-5.png')}}"
                                alt="instagram-image">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-heart mr-2"></i>80</a></li>
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-comments mr-2"></i>38</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 px-0 mb-4">
                        <div class="instagram-post mx-2"><img class="img-fluid w-100" src="{{asset('images/instagram/item-6.png')}}"
                                alt="instagram-image">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-heart mr-2"></i>22</a></li>
                                <li class="list-inline-item"><a href="" target="_blank" class="text-white"><i
                                            class="ti-comments mr-2"></i>57</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /without instagram image -->
            </div>
        </section>
        <!-- /instagram -->

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

        <!-- newsletter -->
        <section class="section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Our Newsletter</h2>
                        <p class="mb-4">Subscribe to our Newsletter to receive early discount offers</p>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-9 col-10 mx-auto">
                        <form action="#" class="d-flex flex-column flex-sm-row">
                            <input type="email" class="form-control rounded-0 border-0 mr-3 mb-4 mb-sm-0" id="mail"
                                placeholder="Enter your email">
                            <button type="submit" value="send" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /newsletter -->

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


        <!-- footer -->
        <footer class="bg-light">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-5 mb-md-0 text-center text-sm-left">
                            <h4 class="mb-4">Contact</h4>
                            <p>20464 Hirthe Curve Suite, Emardton, CT 12471-4107</p>
                            <p>+5(305) 785-0437</p>
                            <p>info@example.com</p>
                            <!--                             <ul class="list-inline social-icons">
                                <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ti-google"></i></a></li>
                            </ul> -->
                        </div>
                        <div class="col-md-3 col-sm-6 mb-5 mb-md-0 text-center text-sm-left">
                            <h4 class="mb-4">Category</h4>
                            <ul class="pl-0 list-unstyled">
                                <li class="mb-2"><a class="text-color" href="shop.html">Men</a></li>
                                <li class="mb-2"><a class="text-color" href="shop.html">Women</a></li>
                                <li class="mb-2"><a class="text-color" href="shop.html">Kids</a></li>
                                <li class="mb-2"><a class="text-color" href="shop.html">Accessories</a></li>
                                <li class="mb-2"><a class="text-color" href="shop.html">Shoe</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-5 mb-md-0 text-center text-sm-left">
                            <h4 class="mb-4">Useful Link</h4>
                            <ul class="pl-0 list-unstyled">
                                <li class="mb-2"><a class="text-color" href="about.html">News & Tips</a></li>
                                <li class="mb-2"><a class="text-color" href="about.html">About Us</a></li>
                                <li class="mb-2"><a class="text-color" href="address.html">Support</a></li>
                                <li class="mb-2"><a class="text-color" href="shop.html">Our Shop</a></li>
                                <li class="mb-2"><a class="text-color" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center text-sm-left">
                            <h4 class="mb-4">Our Policies</h4>
                            <ul class="pl-0 list-unstyled">
                                <li class="mb-2"><a class="text-color" href="404.html">Privacy Policy</a></li>
                                <li class="mb-2"><a class="text-color" href="404.html">Terms & Conditions</a></li>
                                <li class="mb-2"><a class="text-color" href="404.html">Cookie Policy</a></li>
                                <li class="mb-2"><a class="text-color" href="404.html">Terms of Sale</a></li>
                                <li class="mb-2"><a class="text-color" href="dashboard.html">Free Shipping & Returns</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 text-center text-md-left mb-4 mb-md-0 align-self-center">
                            <p class="text-white mb-0">Logo &copy; 2018 all right reserved</p>
                        </div>
                        <div class="col-md-2 text-center text-md-left mb-4 mb-md-0">
                            <img src="{{asset('images/logo-alt.png')}}" alt="logo">
                        </div>
                        <div class="col-md-5 text-center text-md-right mb-4 mb-md-0">
                            <ul class="list-inline">
                                <li class="list-inline-item"><img class="img-fluid rounded atm-card-img"
                                        src="{{asset('images/payment-card/card-1.jpg')}}" alt="card"></li>
                                <li class="list-inline-item"><img class="img-fluid rounded atm-card-img"
                                        src="{{asset('images/payment-card/card-2.jpg')}}" alt="card"></li>
                                <li class="list-inline-item"><img class="img-fluid rounded atm-card-img"
                                        src="{{asset('images/payment-card/card-3.jpg')}}" alt="card"></li>
                                <li class="list-inline-item"><img class="img-fluid rounded atm-card-img"
                                        src="{{asset('images/payment-card/card-4.jpg')}}" alt="card"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->
    </div>

@endsection
  