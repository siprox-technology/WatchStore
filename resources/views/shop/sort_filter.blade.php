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
                                    <option value="created_at"
                                        @if (request()->sortBy == 'created_at')
                                            selected = "selected"
                                        @endif
                                    >Newest</option>
                                    <option value="sale_number"
                                        @if (request()->sortBy == 'sale_number')
                                            selected = "selected"
                                        @endif
                                    >Best selling</option>
                                    <option value="discount"
                                        @if (request()->sortBy == 'discount')
                                            selected = "selected"
                                        @endif
                                    >Discount</option>
                                    <option value="price"
                                        @if (request()->sortBy == 'price')
                                            selected = "selected"
                                        @endif
                                    >Price</option>
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
                                            <input class="mt-1" type= "checkbox" 
                                            name="{{'brand'.$i}}" 
                                            value="{{$brands[$i]->name}}" 
                                            onclick="this.form.submit()"
                                            @if ((request()['brand'.$i]))
                                                checked = "checked"
                                            @endif 
                                             id="">
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
                                            <input class="mt-1" type= "checkbox" name="{{'category'.$i}}" value="{{$categories[$i]->name}}" onclick="this.form.submit()"
                                              id=""                                            
                                            @if ((request()['category'.$i]))
                                              checked = "checked"
                                            @endif >
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
                                            <input class="mt-1" type= "checkbox" name="{{'feature'.$i}}" value="{{$features[$i]->name}}" onclick="this.form.submit()" 
                                             id=""
                                             @if ((request()['feature'.$i]))
                                                checked = "checked"
                                             @endif>
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
                                        <input class="mt-1" type= "checkbox" name="gender0" value="Mens" id="" onclick="this.form.submit()"
                                        @if ((request()['gender0']))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Ladies</span>
                                            <input class="mt-1" type= "checkbox" name="gender1"value="Ladies" id="" onclick="this.form.submit()"
                                        @if ((request()['gender1']))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Unisex</span>
                                        <input class="mt-1" type= "checkbox" name="gender2" value="Unisex" id="" onclick="this.form.submit()"
                                        @if ((request()['gender2']))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                </ul>
                            </div>
                            <!-- filter by price range -->
                            <div class="mb-30">
                                <h4 class="mb-4">Shop by Price</h4>
                                <select class="select" name="price" id="price" onchange="this.form.submit()">
                                    <option value="1000000"
                                        @if (request()->price == '1000000')
                                            selected = "selected"
                                        @endif
                                    >All prices</option>
                                    <option value="100"
                                        @if (request()->price == '100')
                                            selected = "selected"
                                        @endif
                                    >Up to $100</option>
                                    <option value="200"
                                        @if (request()->price == '200')
                                            selected = "selected"
                                        @endif
                                    >Up to $200</option>
                                    <option value="500"
                                        @if (request()->price == '500')
                                            selected = "selected"
                                        @endif
                                    >Up to $500</option>
                                    <option value="1000"
                                        @if (request()->price == '1000')
                                            selected = "selected"
                                        @endif
                                    >Up to $1000</option>
                                </select>   
                            </div>
                            <!-- color selector -->
                            <div class="color">
                                <h4 class="mb-3">Shop by Color</h4>
                                <ul class="list-inline">
                                    @for ($i = 0; $i < count($colors); $i++)
                                        <li class="d-flex py-2 text-gray">
                                            <span class="mr-auto">{{(explode('/',$colors[$i]->name))[0].'-'.(explode('/',$colors[$i]->name))[1]}}</span>
                                            <span  style="
                                            height: 30px;
                                            width: 30px;
                                            border-radius: 20px;
                                            background-color :{{(explode('/',$colors[$i]->name))[0]}};
                                            @if ((explode('/',$colors[$i]->name))[0]=='white')
                                            border: 1px solid black;
                                            @endif
                                            "></span>
                                             <span  style="
                                            height: 30px;
                                            width: 30px;
                                            border-radius: 20px;
                                            background-color:{{(explode('/',$colors[$i]->name))[1]}};
                                            @if ((explode('/',$colors[$i]->name))[0]=='white')
                                            border: 1px solid black;
                                            @endif
                                            "></span>
                                            <input class="mt-1 ml-4" type= "checkbox" name="{{'color'.$i}}" value="{{$colors[$i]->name}}" id="" onclick="this.form.submit()"
                                            @if (request()['color'.$i])
                                                checked = "checked"
                                            @endif>
                                        </li>
                                    @endfor
                                </ul>
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
    </form>
  
    <!-- filter product Moda(mobile view))  -->
    <form action="{{route('shop.sort_filter.index')}}" method="GET">
        @csrf
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
                                    @for ($i=0; $i<count($brands);$i++)
                                        <li class="d-flex py-2 text-gray justify-content-between">
                                            <span>{{$brands[$i]->name}}</span>
                                            <input class="mt-1" type= "checkbox" 
                                            name="{{'brand'.$i}}" 
                                            value="{{$brands[$i]->name}}" 
                                            @if ((request()['brand'.$i]))
                                                checked = "checked"
                                            @endif 
                                            id="">
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
                                            <input class="mt-1" type= "checkbox" name="{{'category'.$i}}" value="{{$categories[$i]->name}}" id=""                                            
                                            @if ((request()['category'.$i]))
                                              checked = "checked"
                                            @endif >
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
                                            <input class="mt-1" type= "checkbox" name="{{'feature'.$i}}" value="{{$features[$i]->name}}" 
                                             id=""
                                             @if ((request()['feature'.$i]))
                                                checked = "checked"
                                             @endif>
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
                                        <input class="mt-1" type= "checkbox" name="gender0" value="Mens" id=""
                                        @if ((request()['gender0']))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Ladies</span>
                                            <input class="mt-1" type= "checkbox" name="gender1"value="Ladies" id=""
                                        @if ((request()['gender1']))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Unisex</span>
                                        <input class="mt-1" type= "checkbox" name="gender2" value="Unisex" id=""
                                        @if ((request()['gender2']))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                </ul>
                            </div>
                            <!-- filter by price range -->
                            <div class="mb-30">
                                <h4 class="mb-4">Shop by Price</h4>
                                <select class="select" name="price" id="price" onchange="this.form.submit()">
                                    <option value="1000000"
                                        @if (request()->price == '1000000')
                                            selected = "selected"
                                        @endif
                                    >All prices</option>
                                    <option value="100"
                                        @if (request()->price == '100')
                                            selected = "selected"
                                        @endif
                                    >Up to $100</option>
                                    <option value="200"
                                        @if (request()->price == '200')
                                            selected = "selected"
                                        @endif
                                    >Up to $200</option>
                                    <option value="500"
                                        @if (request()->price == '500')
                                            selected = "selected"
                                        @endif
                                    >Up to $500</option>
                                    <option value="1000"
                                        @if (request()->price == '1000')
                                            selected = "selected"
                                        @endif
                                    >Up to $1000</option>
                                </select>   
                            </div>
                            <!-- color selector -->
                            <div class="color mb-30">
                                <h4 class="mb-3">Shop by Color</h4>
                                <ul class="list-inline">
                                    @for ($i = 0; $i < count($colors); $i++)
                                        <li class="d-flex py-2 text-gray">
                                            <span class="mr-auto">{{(explode('/',$colors[$i]->name))[0].'-'.(explode('/',$colors[$i]->name))[1]}}</span>
                                            <span  style="
                                            height: 30px;
                                            width: 30px;
                                            border-radius: 20px;
                                            background-color :{{(explode('/',$colors[$i]->name))[0]}};
                                            @if ((explode('/',$colors[$i]->name))[0]=='white')
                                            border: 1px solid black;
                                            @endif
                                            "></span>
                                             <span  style="
                                            height: 30px;
                                            width: 30px;
                                            border-radius: 20px;
                                            background-color:{{(explode('/',$colors[$i]->name))[1]}};
                                            @if ((explode('/',$colors[$i]->name))[0]=='white')
                                            border: 1px solid black;
                                            @endif
                                            "></span>
                                            <input class="mt-1 ml-4" type= "checkbox" name="{{'color'.$i}}" value="{{$colors[$i]->name}}" id="" onclick="this.form.submit()"
                                            @if (request()['color'.$i])
                                                checked = "checked"
                                            @endif>
                                        </li>
                                    @endfor
                                </ul>
                            </div>

                            <div class="mb-30">
                                <h4 class="mb-3">Sort by</h4>
                                <select class="select" name="sortBy" id="sortBy">
                                    <option value="created_at"
                                        @if (request()->sortBy == 'created_at')
                                            selected = "selected"
                                        @endif
                                    >Newest</option>
                                    <option value="sale_number"
                                        @if (request()->sortBy == 'sale_number')
                                            selected = "selected"
                                        @endif
                                    >Best selling</option>
                                    <option value="discount"
                                        @if (request()->sortBy == 'discount')
                                            selected = "selected"
                                        @endif
                                    >Discount</option>
                                    <option value="price"
                                        @if (request()->sortBy == 'price')
                                            selected = "selected"
                                        @endif
                                    >Price</option>
                                </select> 
                            </div>

                            <div class="d-flex justify-content-center mt-5">
                                <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>



    
@endsection