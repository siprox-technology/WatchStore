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
        <!-- /top-header -->
    </header>

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

    <!-- login -->
    <section class="signin-page account bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="images/logo.png" alt="logo">
                        </a>
                        <h2 class="text-center">Welcome Back</h2>
                        <form class="text-left clearfix" action="index.html">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <p class="mt-3">New in this site ?<a href="signin.html"> Create New Account</a></p>
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