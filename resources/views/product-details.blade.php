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
        <!-- products details -->
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
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <!-- product image slider -->
                            <div id="product-gallary-images" class="carousel slide w-100" data-ride="imgList">
                                <!-- The slideshow -->
                                <div class="carousel-inner text-center" id="imgList">
                                    <div class="carousel-item"><img class="w-100"
                                            src="images/product-single/product-sm-1.jpg" alt=""></div>
                                    <div class="carousel-item active"><img class="w-100"
                                            src="images/product-single/product-sm-2.jpg" alt=""></div>
                                    <div class="carousel-item"><img class="w-100"
                                            src="images/product-single/product-sm-3.jpg" alt=""></div>
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
                            <h2>Box Leather Shoulder Bag</h2>
                            <i class="ti-check-box text-success"></i>
                            <span class="text-success">Instock</span>
                            <ul class="list-inline mb-4">
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
                                <li class="list-inline-item"><a href="#" class="text-gray ml-3">( 3 Reviews )</a></li>
                            </ul>
                            <h4 class="text-primary h3">$65.00 <s class="text-color ml-2">$90.00</s></h4>
                            <h6 class="mb-4">You save: <span class="text-primary">$25.00 USD (30%)</span></h6>
                            <div class="d-flex flex-column flex-sm-row justify-content-between mb-4">
                                <select class="form-control mr-sm-2 mb-3 mb-sm-0" name="color" style="display: none;">
                                    <option value="brown">Brown Color</option>
                                    <option value="gray">Gray Color</option>
                                    <option value="black">Black Color</option>
                                </select>
                                <select class="form-control mx-sm-2 mb-3 mb-sm-0" name="color" style="display: none;">
                                    <option value="brown">Brown Color</option>
                                    <option value="gray">Gray Color</option>
                                    <option value="black">Black Color</option>
                                </select>
                                <div class="nice-select form-control mx-sm-2 mb-3 mb-sm-0" tabindex="0"><span
                                        class="current">Brown Color</span>
                                    <ul class="list">
                                        <li data-value="brown" class="option selected">Brown Color</li>
                                        <li data-value="gray" class="option">Gray Color</li>
                                        <li data-value="black" class="option">Black Color</li>
                                    </ul>
                                </div>

                                <select class="form-control ml-sm-2 mb-3 mb-sm-0" name="size" style="display: none;">
                                    <option class="form-control" value="small">Small Size</option>
                                    <option value="medium">Medium Size</option>
                                    <option value="large">Large Size</option>
                                </select>
                                <div class="nice-select form-control ml-sm-2 mb-3 mb-sm-0" tabindex="0"><span
                                        class="current">Small Size</span>
                                    <ul class="list">
                                        <li data-value="small" class="option selected">Small Size</li>
                                        <li data-value="medium" class="option">Medium Size</li>
                                        <li data-value="large" class="option">Large Size</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary mb-4">add to cart</a>
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
                                <img class="img-fluid w-100 p-3" src="images/payment-card/all-card.png"
                                    alt="payment-card">
                            </div>
                            <h5 class="mb-3">4 Great Reason to Buy From Us</h5>
                            <div class="row">
                                <!-- service item -->
                                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <i class="ti-truck icon-md mr-3"></i>
                                        <div class="align-items-center">
                                            <h6>Free Shipping</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- service item -->
                                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <i class="ti-shield icon-md mr-3"></i>
                                        <div class="align-items-center">
                                            <h6>Secure Payment</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- service item -->
                                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <i class="ti-money icon-md mr-3"></i>
                                        <div class="align-items-center">
                                            <h6>Lowest Price</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- service item -->
                                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <i class="ti-reload icon-md mr-3"></i>
                                        <div class="align-items-center">
                                            <h6>30 Days Return</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h3 class="mb-3">Product Description</h3>
                            <p class="text-gray mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                natus error sit
                                voluptatem accusantium doloremque laudantium.</p>
                            <h4>Product Features</h4>
                            <ul class="features-list">
                                <li>Mapped with 3M™ Thinsulate™ Insulation [40G Body / Sleeves / Hood]</li>
                                <li>Embossed Taffeta Lining</li>
                                <li>DRYRIDE Durashell™ 2-Layer Oxford Fabric [10,000MM, 5,000G]</li>
                            </ul>
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