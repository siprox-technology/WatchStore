@extends('layouts.app')

@section('content')
    <!-- products -->
    <!-- main wrapper -->
    <div class="main-wrapper">
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- top bar -->
                    <div class="col-lg-12 mb-50">
                        <div class="d-flex border">
                            <div class="col-md-9 col-6 p-2 p-sm-4 align-self-sm-center">
                                <p class="text-gray mb-0">Showing <span class="text-color">1-9 of 20</span> Results
                                </p>
                            </div>
                            {{-- sort products --}}
                            <div class="col-md-3 col-6 p-2 p-sm-4 border-right border-left text-center">
                                <select class="select" name="filter" id="filter">
                                    <option value="1">Newest</option>
                                    <option value="2">Best selling</option>
                                    <option value="3">Discount</option>
                                    <option value="3">Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- filter product sidebar -->
                    <div class="d-none d-lg-flex flex-lg-column col-lg-3">
                        <div class="row justify-content-center">
                            <h4>Filter Products</h4>
                        </div>
                        <!-- filter by Brand -->
                        <div class="mb-30 mt-3">
                            <h4 class="mb-3">Brands</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by categories -->
                        <div class="mb-30">
                            <h4 class="mb-3">Categories</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by features -->
                        <div class="mb-30">
                            <h4 class="mb-3">Features</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by gender -->
                        <div class="mb-30">
                            <h4 class="mb-3">Gender</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Mens</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Ladies</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Unisex</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by price range -->
                        <div class="mb-30">
                            <h4 class="mb-4">Shop by Price</h4>
                            <input class="range-track" type="text" data-slider-min="0" data-slider-max="1000"
                                data-slider-step="5" data-slider-value="[0,300]" data-value="0,300" value="0,300"
                                style="display: none;">
                            <div class="d-flex flex-column">
                                <span class="value m-auto">$0 - $300</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <button class="btn btn-sm btn-primary">Filter</button>
                                </div>
                            </div>
                        </div>
                        <!-- color selector -->
                        <div class="color">
                            <h4 class="mb-3">Shop by Color</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-magenta"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-dark-green"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-sky-blue"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-red"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-dark"></span>
                                    </label>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                    </div>
                    {{-- filter product modal button (mobile view) --}}
                    <div class="d-flex flex-column col-12 d-lg-none mb-50">
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filterProductModal">
                                Filter
                            </button>
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
        <!-- Button trigger modal -->

  
    <!-- filter product Moda(mobile view))  -->
    <div class="modal fade p-4" id="filterProductModal" tabindex="-1" aria-labelledby="filterProductModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex justify-content-end mt-3 mr-3">
                    <button class="btn btn-primary"  data-dismiss="modal" aria-label="Close" style="padding: 5px 11px;">X</button>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-10 p-4">
                        <!-- filter by Brand -->
                        <div class="mb-30 mt-3">
                            <h4 class="mb-3">Brands</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Brand name</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by categories -->
                        <div class="mb-30">
                            <h4 class="mb-3">Categories</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Man Fashion</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by features -->
                        <div class="mb-30">
                            <h4 class="mb-3">Features</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Chronograph</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by gender -->
                        <div class="mb-30">
                            <h4 class="mb-3">Gender</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Mens</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Ladies</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Unisex</span>
                                    <input type="checkbox" class="" id="">
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by price range -->
                        <div class="mb-30">
                            <h4 class="mb-4">Shop by Price</h4>
                            <input class="range-track" type="text" data-slider-min="0" data-slider-max="1000"
                                data-slider-step="5" data-slider-value="[0,300]" data-value="0,300" value="0,300"
                                style="display: none;">
                            <div class="d-flex flex-column">
                                <span class="value m-auto">$0 - $300</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <button class="btn btn-sm btn-primary">Filter</button>
                                </div>
                            </div>
                        </div>
                        <!-- color selector -->
                        <div class="color">
                            <h4 class="mb-3">Shop by Color</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-magenta"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-dark-green"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-sky-blue"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-red"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <label class="radio">
                                        <input type="checkbox" name="radio">
                                        <span class="radio-box bg-dark"></span>
                                    </label>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection