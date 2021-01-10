@extends('layouts.app')

@section('content')

    <!-- preloader start -->
    <div class="preloader">
        <img src="images/preloader.gif" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- header -->
    <header>
        <!-- top advertise -->
        <!--         <div class="alert alert-secondary alert-dismissible fade show rounded-0 pb-0 mb-0" role="alert">
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
                        <li class="list-inline-item"><img src="images/flag.jpg" alt="flag"></li>
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
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white w-100" id="navbar">
            <a class="navbar-brand order-2 order-lg-1" href="index.html"><img class="img-fluid" src="images/logo.png"
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
                                <img class="img-fluid h-100" src="images/mega-megu.jpg" alt="feature-img">
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
                                    <img src="images/cart/product-1.jpg" alt="product-img">
                                    <div class="mx-3">
                                        <h6>Eleven Paris Skinny Jeans</h6>
                                        <span>1</span> X <span>$79.00</span>
                                    </div>
                                    <i class="ti-close"></i>
                                </li>
                                <li class="d-flex border-bottom">
                                    <img src="images/cart/product-2.jpg" alt="product-img">
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
        <!-- products -->
        <!-- main wrapper -->
        <div class="main-wrapper">

            <!-- breadcrumb -->
            <nav class="bg-gray py-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Accounts</li>
                    </ol>
                </div>
            </nav>
            <!-- /breadcrumb -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <!-- top bar -->
                        <div class="col-lg-12 mb-50">
                            <div class="d-flex border">
                                <div class="flex-basis-70 p-2 p-sm-4 align-self-sm-center">
                                    <p class="text-gray mb-0">Showing <span class="text-color">1-9 of 20</span> Results
                                    </p>
                                </div>
                                <div class="flex-basis-15 p-2 p-sm-4 border-right border-left text-center">
                                    <select class="select" name="filter" id="filter" style="display: none;">
                                        <option value="1">Filter</option>
                                        <option value="2">Popular</option>
                                        <option value="3">Top Products</option>
                                    </select>
                                    <div class="nice-select select" tabindex="0"><span class="current">Filter</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Filter</li>
                                            <li data-value="2" class="option">Popular</li>
                                            <li data-value="3" class="option">Top Products</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex-basis-15 p-2 p-sm-4 text-center">
                                    <select class="select" name="short" id="short" style="display: none;">
                                        <option value="1">Short</option>
                                        <option value="2">A-Z</option>
                                        <option value="3">Z-A</option>
                                    </select>
                                    <div class="nice-select select" tabindex="0"><span class="current">Short</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Short</li>
                                            <li data-value="2" class="option">A-Z</li>
                                            <li data-value="3" class="option">Z-A</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar -->
                        <div class="col-lg-3">
                            <!-- search product -->
                            <div class="position-relative mb-5">
                                <form action="#">
                                    <input type="search" class="form-control rounded-0" id="search-product"
                                        placeholder="Search...">
                                    <button type="submit" class="search-icon pr-3 r-0"><i
                                            class="ti-search text-color"></i></button>
                                </form>
                            </div>
                            <!-- categories -->
                            <div class="mb-30">
                                <h4 class="mb-3">Shop by Categories</h4>
                                <ul class="pl-0 shop-list list-unstyled">
                                    <li>
                                        <a href="#" class="d-flex py-2 text-gray justify-content-between">
                                            <span>Women’s Clothing</span><span>9</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-2 text-gray justify-content-between">
                                            <span>Man Fashion</span><span>5</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-2 text-gray justify-content-between">
                                            <span>Kid’s Clothing</span><span>3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-2 text-gray justify-content-between">
                                            <span>Watches &amp; Jewelry</span><span>2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-2 text-gray justify-content-between">
                                            <span>Bags &amp; Shoes</span><span>7</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-2 text-gray justify-content-between">
                                            <span>Toys &amp; Kids</span><span>1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-2 text-gray justify-content-between">
                                            <span>Electronics</span><span>8</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-2 text-gray justify-content-between">
                                            <span>Computers</span><span>11</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- price range -->
                            <div class="mb-30">
                                <h4 class="mb-4">Shop by Price</h4>
                                <input class="range-track" type="text" data-slider-min="0" data-slider-max="1000"
                                    data-slider-step="5" data-slider-value="[0,300]" data-value="0,300" value="0,300"
                                    style="display: none;">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-primary">Filter</button>
                                    <span class="value">$0 - $300</span>
                                </div>
                            </div>
                            <!-- size checkbox -->
                            <div class="mb-30">
                                <h4 class="mb-3">Shop by Size</h4>
                                <form action="#">
                                    <div class="d-flex justify-content-between custom-checkbox">
                                        <label class="label">L Large
                                            <input type="checkbox">
                                            <span class="box"></span>
                                        </label>
                                        <span class="mt-2">9</span>
                                    </div>
                                    <div class="d-flex justify-content-between custom-checkbox">
                                        <label class="label">XL Extra Large
                                            <input type="checkbox">
                                            <span class="box"></span>
                                        </label>
                                        <span class="mt-2">5</span>
                                    </div>
                                    <div class="d-flex justify-content-between custom-checkbox">
                                        <label class="label">M Medium
                                            <input type="checkbox">
                                            <span class="box"></span>
                                        </label>
                                        <span class="mt-2">8</span>
                                    </div>
                                    <div class="d-flex justify-content-between custom-checkbox">
                                        <label class="label">S Small
                                            <input type="checkbox">
                                            <span class="box"></span>
                                        </label>
                                        <span class="mt-2">5</span>
                                    </div>
                                    <div class="d-flex justify-content-between custom-checkbox">
                                        <label class="label">XS Extra Small
                                            <input type="checkbox">
                                            <span class="box"></span>
                                        </label>
                                        <span class="mt-2">3</span>
                                    </div>
                                </form>
                            </div>
                            <!-- color selector -->
                            <div class="color">
                                <h4 class="mb-3">Shop by Color</h4>
                                <ul class="list-inline">
                                    <li class="list-inline-item mr-4">
                                        <label class="radio">
                                            <input type="radio" name="radio">
                                            <span class="radio-box bg-magenta"></span>
                                        </label>
                                    </li>
                                    <li class="list-inline-item mr-4">
                                        <label class="radio">
                                            <input type="radio" name="radio">
                                            <span class="radio-box bg-dark-green"></span>
                                        </label>
                                    </li>
                                    <li class="list-inline-item mr-4">
                                        <label class="radio">
                                            <input type="radio" name="radio">
                                            <span class="radio-box bg-sky-blue"></span>
                                        </label>
                                    </li>
                                    <li class="list-inline-item mr-4">
                                        <label class="radio">
                                            <input type="radio" name="radio">
                                            <span class="radio-box bg-red"></span>
                                        </label>
                                    </li>
                                    <li class="list-inline-item mr-4">
                                        <label class="radio">
                                            <input type="radio" name="radio">
                                            <span class="radio-box bg-dark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- product-list -->
                        <div class="col-lg-9">
                            <div class="row">
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-1.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-4.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <!--                                             <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Leather
                                                    Backpack</a></h3>
                                            <span class="h5">$320.79</span>
                                        </div>
                                        <!-- product label badge -->
                                        <div class="product-label sale">
                                            -8%
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-2.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-5.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <!--                                             <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Box Leather
                                                    Shoulder Bag</a></h3>
                                            <span class="h5">$520.79</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-3.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-6.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <!--                                             <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Sneaky
                                                    Leather Sneakers</a></h3>
                                            <span class="h5">$270.79</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-4.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-2.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <!--                                             <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle
                                                    leather shoulder bag</a></h3>
                                            <span class="h5">$400.79</span>
                                        </div>
                                        <!-- product label badge -->
                                        <div class="product-label new">
                                            new
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-5.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-3.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <!--                                             <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle
                                                    leather shoulder bag</a></h3>
                                            <span class="h5">$400.79</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-6.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-1.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <!--                                             <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle
                                                    leather shoulder bag</a></h3>
                                            <span class="h5">$400.79</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-7.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-3.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <!--                                             <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle
                                                    leather shoulder bag</a></h3>
                                            <span class="h5">$400.79</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-8.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-5.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle
                                                    leather shoulder bag</a></h3>
                                            <span class="h5">$400.79</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->
                                <!-- product -->
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="product text-center">
                                        <div class="product-thumb">
                                            <div class="overflow-hidden position-relative">
                                                <a href="product-single.html">
                                                    <img class="img-fluid w-100 mb-3 img-first"
                                                        src="images/collection/product-9.jpg" alt="product-img">
                                                    <img class="img-fluid w-100 mb-3 img-second"
                                                        src="images/collection/product-2.jpg" alt="product-img">
                                                </a>
                                                <div class="btn-cart">
                                                    <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                                </div>
                                            </div>
                                            <!--                                             <!--                                             <div class="product-hover-overlay">
                                                <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Wishlist"><i
                                                        class="ti-heart"></i></a>
                                                <a href="#" class="product-icon cart" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Compare"><i
                                                        class="ti-direction-alt"></i></a>
                                                <a data-vbtype="inline" href="#quickView"
                                                    class="product-icon view venobox vbox-item" data-toggle="tooltip"
                                                    data-placement="left" title="" data-original-title="Quick View"><i
                                                        class="ti-search"></i></a>
                                            </div> --> -->
                                        </div>
                                        <div class="product-info">
                                            <h3 class="h5"><a class="text-color" href="product-single.html">Puzzle
                                                    leather shoulder bag</a></h3>
                                            <span class="h5">$400.79</span>
                                        </div>
                                        <!-- product label badge -->
                                        <div class="product-label sale">
                                            -25%
                                        </div>
                                    </div>
                                </div>
                                <!-- //end of product -->

                                <div class="col-12 mt-5">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i
                                                        class="ti-arrow-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                                    <li class="mb-2"><a class="text-color" href="dashboard.html">Free Shipping &
                                            Returns</a>
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
                                <img src="images/logo-alt.png" alt="logo">
                            </div>
                            <div class="col-md-5 text-center text-md-right mb-4 mb-md-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img class="img-fluid rounded atm-card-img"
                                            src="images/payment-card/card-1.jpg" alt="card"></li>
                                    <li class="list-inline-item"><img class="img-fluid rounded atm-card-img"
                                            src="images/payment-card/card-2.jpg" alt="card"></li>
                                    <li class="list-inline-item"><img class="img-fluid rounded atm-card-img"
                                            src="images/payment-card/card-3.jpg" alt="card"></li>
                                    <li class="list-inline-item"><img class="img-fluid rounded atm-card-img"
                                            src="images/payment-card/card-4.jpg" alt="card"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

@endsection