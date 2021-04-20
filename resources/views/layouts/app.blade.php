<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <title>Elite Shop</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
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
        {{-- cookie accept message --}}
        <?php 
        //check cookies accepted
        if(isset($_COOKIE["accepted-user"]))
        {
            if($_COOKIE["accepted-user"] != $_SERVER['REMOTE_ADDR'])
            {
                setcookie("accepted-user",$_SERVER['REMOTE_ADDR']);
                echo'<div class="alert alert-secondary alert-dismissible fade show rounded-0 pr-4" role="alert">
                        <div class="row mx-auto justify-content-center">
                            <p class="col-lg-11 col-md-10 col-sm-9 col-8">All cookies in this website are used for providing a better user experience and WILL NOT be shared with other parties.</p>
                            <div class="col-lg-1 col-md-1 col-sm-3 col-4 ">
                                <div class="row justify-content-center">
                                    <button type="button" class="btn btn-sm btn-primary ml-auto text-center" data-dismiss="alert" aria-label="Close">
                                    OK
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
        }
        else {
            setcookie("accepted-user",$_SERVER['REMOTE_ADDR']);
            echo'<div class="alert alert-secondary alert-dismissible fade show rounded-0 pr-4" role="alert">
                <div class="row mx-auto justify-content-center">
                            <p class="col-lg-11 col-md-10 col-sm-9 col-8">All cookies in this website are used for providing a better user experience and WILL NOT be shared with other parties.</p>
                            <div class="col-lg-1 col-md-1 col-sm-3 col-4">
                                <div class="row justify-content-center">
                                    <button type="button" class="btn btn-sm btn-primary ml-auto text-center" data-dismiss="alert" aria-label="Close">
                                    OK
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
    ?>

    
        <!-- top header -->
        <div class="top-header">
            <div class="row w-100 mx-auto">
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
                    </ul>
                </div>
            </div>
        </div>
        <!-- /top-header -->
        </header>
    
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white w-100" id="navbar">
            <a class="navbar-brand order-2 order-lg-1 mr-0 ml-3" href="{{route('home')}}"><img class="img-fluid" src="{{asset('images/logo.png')}}"
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
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu mega-menu">
                            {{-- brands --}}
                            <div class="mx-3 mega-menu-item">
                                <h4 class="text-light">Brands</h4>
                                <ul class="pl-0">
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','brand'=>['0'=>'Casio'],'price'=>'1000000'])}}">Casio</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','brand'=>['0'=>'Tissot'],'price'=>'1000000'])}}">Tissot</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','brand'=>['0'=>'Swatch'],'price'=>'1000000'])}}">Swatch</a></li>
                                </ul>
                            </div>
                            {{-- category --}}
                            <div class="mx-3 mega-menu-item">
                                <h4 class="text-light">Category</h4>
                                <ul class="pl-0">
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'T-Lady'],'price'=>'1000000'])}}">T-Lady</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'Supersport'],'price'=>'1000000'])}}">Supersport</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'Original Gent'],'price'=>'1000000'])}}">Original Gent</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'Masters of G'],'price'=>'1000000'])}}">Masters of G</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'Heritage'],'price'=>'1000000'])}}">Heritage</a></li>
                                </ul>
                            </div>
                            {{-- genders --}}
                            <div class="mx-3 mega-menu-item">
                                <h4 class="text-light">Genders</h4>
                                <ul class="pl-0">
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','gender'=>['0'=>'Mens'],'price'=>'1000000'])}}">Mens</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','gender'=>['0'=>'Ladies'],'price'=>'1000000'])}}">Ladies</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','gender'=>['0'=>'Unisex'],'price'=>'1000000'])}}">Unisex</a></li>
                                </ul>
                            </div>
                            {{-- features --}}
                            <div class="mx-3 mega-menu-item">
                                <h4 class="text-light">Features</h4>
                                <ul class="pl-0">
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','feature'=>['0'=>'Solar Powered'],'price'=>'1000000'])}}">Solar Powered</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','feature'=>['0'=>'Quartz'],'price'=>'1000000'])}}">Quartz</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','feature'=>['0'=>'Mudmaster'],'price'=>'1000000'])}}">Mudmaster </a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','feature'=>['0'=>'Automatic'],'price'=>'1000000'])}}">Automatic </a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','feature'=>['0'=>'Chronograph'],'price'=>'1000000'])}}">Chronograph</a></li>
                                    <li><a href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','feature'=>['0'=>'Bluetooth'],'price'=>'1000000'])}}">Bluetooth</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown view">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Users
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('login.index')}}">Login</a>
                            <a class="dropdown-item @if(auth()->user()) d-none @endif" href="{{route('register.index')}}">Signup</a>
                            <a class="dropdown-item" href="{{route('forgetPassword.index')}}">Forget Password</a>
                            <a class="dropdown-item" href="{{route('dashboard.index')}}">Dashboard</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#site-footer">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="order-3 navbar-right-elements">
                <div class="search-cart">
                    <!-- cart -->
                        <div class="cart">
                            <button id="cartOpen" class="cart-btn d-flex">
                                <i class="fas fa-shopping-cart mt-3"></i><span class="d-xs-none">CART </span>

                                    <div class="shopping-cart">
                                        <p class="m-0 text-center">
                                            <!-- get number of items in basket -->
                                            {{Session::has('cart')?Session::get('cart')->totalQty:'0'}}
                                        </p>
                                    </div>
                            </button>
                                {{-- cart links --}}
                            <div class="cart-wrapper">
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
            <div class="row justify-content-center w-100 mx-auto">
                <form class="col-10 col-md-6 " action="{{route('shop.search')}}">
                    <input type="search" class="form-control" id="search-product"
                        placeholder="Search..." name="key" value="{{old('key')}}">
                </form>
            </div>
        </nav>
        <!-- /breadcrumb -->
        @yield('content')

        <!-- footer -->
        <footer class="bg-light" id="site-footer">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-5 mb-md-0 text-center text-sm-left">
                            <h4 class="mb-4"><b>Contact</b></h4>
                            <p><b>Address:</b> No 33 Woodbridge avenue Clifton, UK, NG11 8GP</p>
                            <p><b>Phone:</b> +44 798 5505 786</p>
                            <p><b>Email:</b> admin@siprox-tech.com</p>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-5 mb-md-0 text-center text-sm-left">
                            <h4 class="mb-4"><b>Category</b></h4>
                            <ul class="pl-0 list-unstyled">
                                <li class="mb-2"><a class="dropdown-item" href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'T-Lady'],'price'=>'1000000'])}}">T-Lady</a></li>
                                <li class="mb-2"><a class="dropdown-item" href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'Supersport'],'price'=>'1000000'])}}">Supersport</a></li>
                                <li class="mb-2"><a class="dropdown-item" href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'Original Gent'],'price'=>'1000000'])}}">Original Gent</a></li>
                                <li class="mb-2"><a class="dropdown-item" href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'Masters of G'],'price'=>'1000000'])}}">Masters of G</a></li>
                                <li class="mb-2"><a class="dropdown-item" href="{{route('shop.sort_filter.index',['sortBy'=>'created_at','category'=>['0'=>'Heritage'],'price'=>'1000000'])}}">Heritage</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-5 mb-md-0 text-center text-sm-left">
                            <h4 class="mb-4"><b>Useful Link</b></h4>
                            <ul class="pl-0 list-unstyled">
                                @guest
                                    <li class="mb-2"><a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li class="mb-2"><a class="dropdown-item" href="{{route('register.index')}}">Register</a></li>
                                    <li class="mb-2"><a class="dropdown-item" href="{{route('login.index')}}">Login</a></li> 
                                    <li class="mb-2"><a class="dropdown-item" href="{{route('forgetPassword.index')}}">Forget Password</a></li>
                                    <li class="mb-2"><a class="dropdown-item" href="{{route('shop.index')}}">Our Shop</a></li>   
                                @endguest
                                @auth
                                    <li class="mb-2"><a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li class="mb-2"><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                    <li class="mb-2"><a class="dropdown-item" href="{{route('shop.index')}}">Our Shop</a></li> 
                                @endauth
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center text-sm-left">
                            <h4 class="mb-4"><b>Business hours</b></h4>
                            <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week
                            </p>
                            <ul class="hours_links whitecolor">
                                <li><span><b>Monday-Saturday:</b></span> <span>8.00-18.00</span></li>
                                <li><span><b>Friday:</b></span> <span>09:00-21:00</span></li>
                                <li><span><b>Sunday:</b></span> <span>09:00-20:00</span></li>
                                <li><span><b>Calendar Events:</b></span> <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="copyright">
                            <div class="col-md-12 text-center wow fadeIn  animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                                <p class="m-0 py-3 text-light">Copyright © <span id="year1">2019-2021</span> <a target="_blank" href="https://www.siprox-tech.com" class="hover-default">SIPROX TECHNOLOGY</a>. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->

    <script src="{{asset ('js/app.js')}}"></script>
</body>
</html>