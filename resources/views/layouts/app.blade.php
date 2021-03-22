<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <title>Elite Shop</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="{{ asset ('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
</head>

<body>
        <!-- preloader start -->
        <div class="preloader">
            <img src="{{asset('images/preloader.gif')}}" alt="preloader">
        </div>
        <!-- preloader end -->


    
        <!-- header -->
        <header>
            <!-- top advertise -->
{{--        <div class="alert alert-secondary alert-dismissible fade show rounded-0 pb-0 mb-0" role="alert">
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
      </div> --}}

        {{-- cookie accept message --}}


    
        <!-- top header -->
        <div class="top-header">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="text-white mb-lg-0 mb-1">Free shipping • Free 30 days return • Express delivery</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="list-inline">
                        @guest
                            <li class="list-inline-item"><a href="{{route('register.index')}}">Register</a></li>
                            <li class="list-inline-item"><a href="{{route('login.index')}}">Login</a></li> 
                        @endguest
                        @auth
                            <li class="list-inline-item">
                                <a href="{{route('logout')}}">Logout</a>
                            </li>
                            <li class="list-inline-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li> 
                        @endauth
                        <li class="list-inline-item">
                            <form action="#">
                                <select class="country" name="country">
                                    <option value="USD">USD</option>
                                    <option value="JPN">JPN</option>
                                    <option value="BAN">BAN</option>
                                </select>
                            </form>
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
                        <a class="nav-link" href="{{route('home')}}">home</a>
                    </li>
                    <li class="nav-item dropdown view">
                        <a class="nav-link" href="{{route('shop.index')}}" role="button">
                            shop
                        </a>
{{--                         <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('shop.index')}}">Shop</a>
                            <a class="dropdown-item" href="shop-list.html">Shop List</a>
                            <a class="dropdown-item" href="product-single.html">Product Single</a>
                            <a class="dropdown-item" href="cart.html">Cart</a>
                            <a class="dropdown-item" href="shipping.html">Shipping Method</a>
                            <a class="dropdown-item" href="payment.html">Payment Method</a>
                            <a class="dropdown-item" href="review.html">Review</a>
                            <a class="dropdown-item" href="confirmation.html">Confirmation</a>
                            <a class="dropdown-item" href="track.html">Track Order</a>
                        </div> --}}
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
                                    {{Session::has('cart')?Session::get('cart')->totalQty:'0'}}
                            </button>
                                {{-- cart links --}}
                            <div class="cart-wrapper {{Session::has('cart')?'open':''}}">
                                <i id="cartClose" class="cart-close">X</i>
                                <h4 class="mb-4">Your Cart</h4>
                                <ul class="pl-0 mb-3">
                                    @if (Session::has('cart'))
                                        @foreach (Session::get('cart')->items as $item)
                                            <li class="d-flex border-bottom">
                                                <img class="" style="width:50px; height:50px;" src="{{asset('images/product-images/'.$item['item']['model_number'].'/'.$item['item']['model_number'].'-0.jpg')}}" alt="product-img">
                                                <div class="mx-3">
                                                    <p class="mb-0">{{$item['item']['model_number']}}</p>
                                                    <h6>{{$item['item']['name']}}</h6>
                                                    <span>{{$item['quantity']}}</span> X <span>${{$item['price']}}</span>
                                                </div>
                                                {{-- remove item --}}
                                                <a href ="{{route('cart.remove',$item['item'])}}" class="text-danger">X</a>
                                            </li>
                                        @endforeach
                                    @else
                                    <li class="d-flex border-bottom">
                                        <p class="text-center">Shopping cart empty !</p>
                                    </li>
                                    @endif

                                </ul>
                                <div class="mb-3">
                                    <span>Cart Total</span>
                                    <span class="float-right">{{(Session::has('cart'))?Session::get('cart')->totalPrice:'0'}}</span>
                                </div>
                                <div class="text-center">
                                    <a href="{{route('cart.index')}}" class="btn btn-dark btn-mobile rounded-0 {{Session::has('cart')?'':'d-none'}}">view cart</a>
                                    <a href="{{route('checkout.index')}}" class="btn btn-dark btn-mobile rounded-0 {{Session::has('cart')?'':'d-none'}}">check out</a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </nav>
        <!-- /navigation -->
        <!-- breadcrumb -->
        <nav class="bg-gray py-3">
            <!-- search product -->
            <div class="row justify-content-center w-100">
                <form class="col-10 col-md-6 " action="{{route('shop.search')}}">
                    <input type="search" class="form-control" id="search-product"
                        placeholder="Search..." name="key" value="{{old('key')}}">
                </form>
            </div>
        </nav>
        <!-- /breadcrumb -->
        @yield('content')

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

    <script src="{{asset ('js/app.js')}}"></script>
</body>
</html>