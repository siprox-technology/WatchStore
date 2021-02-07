@extends('layouts.app')

@section('content')
<form action="{{route('shop.sort_filter.index')}}" method="GET">
    @csrf
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
                                <p class="text-gray mb-0">Showing 
                                    <span class="text-color">
                                        {{$products->count()}} of {{$products->total()}}
                                    </span> Results 
                                </p>
                            </div>
                            {{-- sort products --}}
                
                            <div class="col-md-3 col-6 p-2 p-sm-4 border-right border-left text-center">
                                <select class="select" name="sortBy" id="sortBy" onchange="this.form.submit()">
                                    <option value="created_at">Newest</option>
                                    <option value="sale_number">Best selling</option>
                                    <option value="discount">Discount</option>
                                    <option value="price">Price</option>
                                </select>   
                            </div>
                        </div>
                    </div>
                    <!-- filter and product sidebar -->
                    <div class="d-none d-lg-flex flex-lg-column col-lg-3">
                        <div class="row justify-content-center">
                            <h4>Filter Products</h4>
                            @error('brand')
                               <h4>{{$message}}</h4>     
                            @enderror
                            
                        </div>
                            <!-- filter by Brand -->
                            <div class="mb-30 mt-3">
                                <h4 class="mb-3">Brands</h4>
                                <ul class="pl-0 shop-list list-unstyled">
                                    @for ($i=0; $i<count($brands);$i++)
                                        <li class="d-flex py-2 text-gray justify-content-between">
                                            <span>{{$brands[$i]->name}}</span>
                                            <input type="checkbox" 
                                            name="{{'brand'.$i}}" 
                                            value="{{$brands[$i]->name}}" 
                                            onclick="this.form.submit()"
                                            @if ((request()['brand'.$i]))
                                                checked = "checked"
                                            @endif 
                                            class="" id="">
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <!-- filter by categories -->
                            <div class="mb-30">
                                <h4 class="mb-3">Categories</h4>
                                <ul class="pl-0 shop-list list-unstyled">
                                    @for ($i=0; $i<count($categories);$i++)
                                        <li class="d-flex py-2 text-gray justify-content-between">
                                            <span>{{$categories[$i]->name}}</span>
                                            <input type="checkbox" name="{{'category'.$i}}" value="{{$categories[$i]->name}}" onclick="this.form.submit()"
                                             class="" id=""                                            
{{--                                             @if (!(request()->category.$i))
                                                checked = "checked"
                                            @endif --}} >
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <!-- filter by features -->
                            <div class="mb-30">
                                <h4 class="mb-3">Features</h4>
                                <ul class="pl-0 shop-list list-unstyled">
                                    @for ($i=0; $i<count($features);$i++)
                                        <li class="d-flex py-2 text-gray justify-content-between">
                                            <span>{{$features[$i]->name}}</span>
                                            <input type="checkbox" name="{{'feature'.$i}}" value="{{$features[$i]->name}}" onclick="this.form.submit()" 
                                            class="" id="">
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <!-- filter by gender -->
                            <div class="mb-30">
                                <h4 class="mb-3">Gender</h4>
                                <ul class="pl-0 shop-list list-unstyled">
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Mens</span>
                                        <input type="checkbox" name="gender0" value="Mens"class="" id="" onclick="this.form.submit()">
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Ladies</span>
                                        <input type="checkbox" name="gender1"value="Ladies"class="" id="" onclick="this.form.submit()">
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Unisex</span>
                                        <input type="checkbox" name="gender2" value="Unisex"class="" id="" onclick="this.form.submit()">
                                    </li>
                                </ul>
                            </div>
                            <!-- filter by price range -->
                            <div class="mb-30">
                                <h4 class="mb-4">Shop by Price</h4>
                                <ul class="pl-0 shop-list list-unstyled">
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>up to $100</span>
                                        <input type="checkbox" name="price0" value="100"class="" id="" onclick="this.form.submit()">
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>up to $200</span>
                                        <input type="checkbox" name="price1" value="200"class="" id="" onclick="this.form.submit()">
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>up to $500</span>
                                        <input type="checkbox" name="price2"value="300"class="" id="" onclick="this.form.submit()">
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>up to $1000</span>
                                        <input type="checkbox" name="price3" value="1000"class="" id="" onclick="this.form.submit()">
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>more than $1000</span>
                                        <input type="checkbox" name="price0" value="1001"class="" id="" onclick="this.form.submit()">
                                    </li>
                                </ul>
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
                        </form>
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
                            @foreach ($products as $product)
                            <!-- products links -->
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="product text-center">
                                    <div class="product-thumb">
                                        <div class="overflow-hidden position-relative">
                                            <a href="product-single.html">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/product-images/'.$product->model_number.'/'.$product->model_number.'-0.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/product-images/'.$product->model_number.'/'.$product->model_number.'-1.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="#" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h6"><a class="text-color" href="product-single.html">{{$product->name}}</a></h3>
                                        <span class="h6"><b>{{$product->price}}</b></span>
                                    </div>
                                    <!-- product label badge -->
                                    <div class="product-label sale">
                                        @if ($product->discount !== '0')
                                        -{{$product->discount}}%
                                        @endif
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                        {{-- pagination links --}}
                        <div class="row justify-content-center">
                            {{ $products->links() }}
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
                                @foreach ($brands as $brand)
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>{{$brand->name}}</span>
                                        <input type="checkbox" class="" id="">
                                    </li>
                                @endforeach
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by categories -->
                        <div class="mb-30">
                            <h4 class="mb-3">Categories</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                @foreach ($categories as $category)
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>{{$category->name}}</span>
                                        <input type="checkbox" class="" id="">
                                    </li>
                                @endforeach
                            </ul>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                        <!-- filter by features -->
                        <div class="mb-30">
                            <h4 class="mb-3">Features</h4>
                            <ul class="pl-0 shop-list list-unstyled">
                                @foreach ($features as $feature)
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>{{$feature->name}}</span>
                                        <input type="checkbox" class="" id="">
                                    </li>
                                @endforeach
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
</form>

    
@endsection