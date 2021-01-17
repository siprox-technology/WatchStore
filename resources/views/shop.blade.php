@extends('layouts.app')

@section('content')

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
@endsection