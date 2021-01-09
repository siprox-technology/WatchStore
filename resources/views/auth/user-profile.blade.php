@extends('layouts.app')

@section('content')
        <!-- preloader start -->
        <div class="preloader">
            <img src="{{asset('images/preloader.gif')}}" alt="preloader">
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
            <!-- user profile -->
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
    
                <section class="user-dashboard section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-inline dashboard-menu text-center">
                                    <li class="list-inline-item m-1"><a class="active" href="/dashboard">Profile
                                            Details</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/changePassword">Change password</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/changeAddress">Address</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/shoppingCart">Basket</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/orderHistory">Orders</a></li>
                                    <li class="list-inline-item m-1"><a href="dashboard/contactPref">Contact method</a></li>
                                </ul>
                                <div class="dashboard-wrapper dashboard-user-profile">
                                    <div class="d-md-flex">
                                        <div class="text-center">
                                            <img class="media-object user-img" src="{{asset('images/users-image/avater.jpg')}}"
                                                alt="Image">
                                            <a href="#" class="btn btn-sm mt-3 d-block">Change Image</a>
                                        </div>
                                        <div class="media-body">
                                            <ul class="user-profile-list">
                                                <li><span>Full Name:</span>Johanna Doe</li>
                                                <li><span>Country:</span>USA</li>
                                                <li><span>Email:</span>mail@gmail.com</li>
                                                <li><span>Phone:</span>+880123123</li>
                                                <li><span>Date of Birth:</span>Dec , 22 ,1991</li>
                                            </ul>
                                        </div>
                                        <div class="text-center mt-5 mt-md-0">
                                            <a class="bg-primary text-white p-3" data-toggle="modal"
                                                data-target="#edit_acc_details_modal">Edit
                                                details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- edit account details modal -->
                <div class="modal fade" id="edit_acc_details_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">New account details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- edit user personal details -->
                                <div class="col-12">
                                    <div class="heading-title">
                                        <div class=" flex justify-center">
                                            <div class=" w-6/12 bg-white p-6 rounded-lg">
                                                <div class="block text-center">
                                                    <form class="text-left clearfix" action="index.html">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control"
                                                                placeholder="contact preferences">
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
@endsection