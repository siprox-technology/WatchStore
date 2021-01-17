@extends('layouts.app')

@section('content')

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

@endsection