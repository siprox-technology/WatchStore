@extends('layouts.app')

@section('content')
<form action="{{route('shop.sort_filter.index')}}" method="GET">
    <!-- products -->
    <!-- main wrapper -->
    <div class="main-wrapper">
        <section class="section">
            <div class="container">
                <div class="row">
                    {{-- number of items shown  -  sort by--}}
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex border">
                            <div class="col-md-9 col-6 my-auto align-self-sm-center">
                                <div class="row w-100">
                                    <p class="text-color mb-0 p-2">Showing 
                                        <span class=" text-gray">
                                            {{$products->count()}} of {{$products->total()}}
                                        </span> Results 
                                    </p>

                                </div>
                            </div>
                            {{-- sort products --}}
                            <div class="col-md-3 col-6 pr-0 my-auto border-right border-left text-center">
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
                    {{-- filters selected--}}
                        <div class="col-lg-12 mb-50">
                            <div class="d-flex border">
                                <div class="col-12 my-auto align-self-sm-center px-0">
                                    <div class="row w-100 m-0 p-0">
                                        <p class="text-dark m-0 p-2 ">Filters :</p>
                                        {{-- brands filter --}}
                                        @if (isset($params['brand']))
                                            @for ($i = 0; $i < count($params['brand']); $i++)
                                                <span class="text-gray m-0 ml-2 p-2">
                                                    {{$params['brand'][$i]}}
                                                </span>
                                            @endfor
                                        @endif
                                        {{-- categories filter --}}
                                        @if (isset($params['category']))
                                            @for ($i = 0; $i < count($params['category']); $i++)
                                                <span class="text-gray m-0 ml-2 p-2 ">
                                                    {{$params['category'][$i]}}
                                                </span>
                                            @endfor
                                        @endif     
                                        {{-- features --}}
                                        @if (isset($params['feature']))
                                            @for ($i = 0; $i < count($params['feature']); $i++)
                                                <span class="text-gray m-0 ml-2 p-2 ">
                                                    {{$params['feature'][$i]}}
                                                </span>
                                            @endfor
                                        @endif
                                        {{-- gender --}}
                                        @if (isset($params['gender']))
                                            @foreach ($params['gender'] as $key => $value)
                                                <span class="text-gray m-0 ml-2 p-2 ">
                                                    {{$value}}
                                                </span>
                                            @endforeach                        
                                        @endif
                                        {{-- color --}}
                                        @if (isset($params['color']))
                                            @for ($i = 0; $i < count($params['color']); $i++)
                                                <span class="text-gray m-0 ml-2 p-2 ">
                                                    {{$params['color'][$i]}}
                                                </span>
                                            @endfor                                          
                                        @endif
                                        {{-- price filters --}}
                                        @if ($params['price']!='1000000')
                                            <span class="text-gray m-0 ml-2 p-2 ">
                                                {{'up to $'.$params['price']}}
                                            </span>
                                        @endif
                                        {{-- clear all filter --}}
                                        @if (count($params)<2)
                                            <p class="text-gray m-0 ml-2 p-2">All</p>
                                        @else
                                            <a href="{{route('shop.index')}}" class="text-warning px-4 py-2">Clear all filters</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- filter and product sidebar -->
                    <div class="d-none d-lg-flex flex-lg-column col-lg-3">
                        <div class="row justify-content-center">
                            <h4>Filter Products</h4>             
                        </div>
                        <!-- filter by Brand -->
                        <div class="mb-30  mt-3" >
                            <h4 class="mb-3">Brands</h4>
                            <ul class="pl-0 pr-3 shop-list list-unstyled" style="max-height: 120px; overflow-y:auto;">
                                @for ($i=0; $i<count($brands);$i++)
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>{{$brands[$i]->name}}</span>
                                        <input class="mt-1" type= "checkbox" autocomplete='off' 
                                        name="brand[]" 
                                        value="{{$brands[$i]->name}}" 
                                        onclick="this.form.submit()"
                                        @if(isset($params['brand'])&&(array_search($brands[$i]->name,$params['brand'])!==false))
                                            checked = "checked"
                                        @endif 
                                        id="">
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <!-- filter by categories -->
                        <div class="mb-30 " >
                            <h4 class="mb-3">Categories</h4>
                            <ul class="pl-0 shop-list list-unstyled pr-3" style="max-height: 300px; overflow-y:auto;">
                                @for ($i=0; $i<count($categories);$i++)
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>{{$categories[$i]->name}}</span>
                                        <input class="mt-1" type= "checkbox" autocomplete='off' name="category[]" value="{{$categories[$i]->name}}" onclick="this.form.submit()"
                                        id=""                                            
                                        @if (isset($params['category'])&&(array_search($categories[$i]->name,$params['category'])!==false))
                                        checked = "checked"
                                        @endif >
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <!-- filter by features -->
                        <div class="mb-30 " >
                            <h4 class="mb-3">Features</h4>
                            <ul class="pl-0 shop-list list-unstyled pr-3" style="max-height: 150px; overflow-y:auto;" >
                                @for ($i=0; $i<count($features);$i++)
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>{{$features[$i]->name}}</span>
                                        <input class="mt-1" type= "checkbox" autocomplete='off' name="feature[]" value="{{$features[$i]->name}}" onclick="this.form.submit()" 
                                        id=""
                                        @if (isset($params['feature'])&&(array_search($features[$i]->name,$params['feature'])!==false))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <!-- filter by gender -->
                        <div class="mb-30 ">
                            <h4 class="mb-3">Gender</h4>
                            <ul class="pl-0 shop-list list-unstyled pr-3" style="max-height: 120px; overflow-y:auto;">
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Mens</span>
                                    <input class="mt-1" type= "checkbox" autocomplete='off' name="gender[0]" value="Mens" id="" onclick="this.form.submit()"
                                    @if (isset($params['gender'][0]))                                           
                                        checked = "checked"
                                    @endif>
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Ladies</span>
                                        <input class="mt-1" type= "checkbox" autocomplete='off' name="gender[1]"value="Ladies" id="" onclick="this.form.submit()"
                                    @if (isset($params['gender'][1]))
                                        checked = "checked"
                                    @endif>
                                </li>
                                <li class="d-flex py-2 text-gray justify-content-between">
                                    <span>Unisex</span>
                                    <input class="mt-1" type= "checkbox" autocomplete='off' name="gender[2]" value="Unisex" id="" onclick="this.form.submit()"
                                    @if (isset($params['gender'][2]))
                                        checked = "checked"
                                    @endif>
                                </li>
                            </ul>
                        </div>
                        <!-- filter by price range -->
                        <div class="mb-30 pr-3">
                            <h4 class="mb-4">Shop by Price</h4>
                            <select class="select pr-3" name="price" id="price"  onchange="this.form.submit()">
                                <option value="1000000"
                                    @if ($params['price'] == '1000000')
                                        selected = "selected"
                                    @endif
                                >All prices</option>
                                <option value="100"
                                    @if ($params['price'] == '100')
                                        selected = "selected"
                                    @endif
                                >Up to $100</option>
                                <option value="200"
                                    @if ($params['price'] == '200')
                                        selected = "selected"
                                    @endif
                                >Up to $200</option>
                                <option value="500"
                                    @if ($params['price'] == '500')
                                        selected = "selected"
                                    @endif
                                >Up to $500</option>
                                <option value="1000"
                                    @if ($params['price'] == '1000')
                                        selected = "selected"
                                    @endif
                                >Up to $1000</option>
                            </select>   
                        </div>
                        <!-- color selector -->
                        <div class="color pr-3" style="max-height: 150px; overflow-y:auto;">
                            <h4 class="mb-3">Shop by Color</h4>
                            <ul class="list-inline">
                                @for ($i = 0; $i < count($colors); $i++)
                                    <li class="d-flex py-2 text-gray">
                                        <span class="mr-auto">{{(explode('/',$colors[$i]->name))[0].'-'.(explode('/',$colors[$i]->name))[1]}}</span>
                                        <span  style="
                                        height: 25px;
                                        width: 25px;
                                        border-radius: 20px;
                                        background-color :{{(explode('/',$colors[$i]->name))[0]}};
                                        @if ((explode('/',$colors[$i]->name))[0]=='white')
                                        border: 1px solid black;
                                        @endif
                                        "></span>
                                        <span  style="
                                        height: 25px;
                                        width: 25px;
                                        border-radius: 20px;
                                        background-color:{{(explode('/',$colors[$i]->name))[1]}};
                                        @if ((explode('/',$colors[$i]->name))[0]=='white')
                                        border: 1px solid black;
                                        @endif
                                        "></span>
                                        <input class="mt-1 ml-4" type= "checkbox" autocomplete='off' name="color[]" value="{{$colors[$i]->name}}" id="" onclick="this.form.submit()"
                                        @if (isset($params['color'])&&(array_search($colors[$i]->name,$params['color'])!==false))
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
                                            <a href="{{route('shop.product_details.index',$product->model_number)}}">
                                                <img class="img-fluid w-100 mb-3 img-first"
                                                    src="{{asset('images/product-images/'.$product->model_number.'/'.$product->model_number.'-0.jpg')}}" alt="product-img">
                                                <img class="img-fluid w-100 mb-3 img-second"
                                                    src="{{asset('images/product-images/'.$product->model_number.'/'.$product->model_number.'-1.jpg')}}" alt="product-img">
                                            </a>
                                            <div class="btn-cart">
                                                <a href="{{route('cart.add',$product->product_id)}}" class="btn btn-primary btn-sm">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="h6"><a class="text-color" href="{{route('shop.product_details.index',$product->model_number)}}">{{$product->name}}</a></h3>
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
        <div class="modal fade p-4" id="filterProductModal" tabindex="-1" aria-labelledby="filterProductModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="d-flex justify-content-end mt-3 mr-3">
                        <button class="btn btn-primary"  data-dismiss="modal" aria-label="Close" style="padding: 5px 11px;">X</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-10 p-2">
                            <!-- filter by Brand -->
                            <div class="mb-30 mt-3">
                                <h4 class="mb-3">Brands</h4>
                                <ul class="pl-0 shop-list list-unstyled pr-2" style="max-height: 120px; overflow-y:auto;">
                                    @for ($i=0; $i<count($brands);$i++)
                                        <li class="d-flex py-2 text-gray justify-content-between">
                                            <span>{{$brands[$i]->name}}</span>
                                            <input class="mt-1" type= "checkbox" autocomplete='off' 
                                            name="brand[]" 
                                            value="{{$brands[$i]->name}}" 
                                            @if(isset($params['brand'])&&(array_search($brands[$i]->name,$params['brand'])!==false))
                                                checked = "checked"
                                            @endif 
                                            id="">
                                        </li>
                                    @endfor
                                </ul>
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                </div>
                            </div>
                            <!-- filter by categories -->
                            <div class="mb-30">
                                <h4 class="mb-3">Categories</h4>
                                <ul class="pl-0 shop-list list-unstyled pr-2" style="max-height: 200px; overflow-y:auto;">
                                    @for ($i=0; $i<count($categories);$i++)
                                        <li class="d-flex py-2 text-gray justify-content-between">
                                            <span>{{$categories[$i]->name}}</span>
                                            <input class="mt-1" type= "checkbox" autocomplete='off' name="category[]" value="{{$categories[$i]->name}}" id=""                                            
                                            @if (isset($params['category'])&&(array_search($categories[$i]->name,$params['category'])!==false))
                                              checked = "checked"
                                            @endif >
                                        </li>
                                    @endfor
                                </ul>
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                </div>
                            </div>
                            <!-- filter by features -->
                            <div class="mb-30">
                                <h4 class="mb-3">Features</h4>
                                <ul class="pl-0 shop-list list-unstyled pr-2"  style="max-height: 200px; overflow-y:auto;">
                                    @for ($i=0; $i<count($features);$i++)
                                        <li class="d-flex py-2 text-gray justify-content-between">
                                            <span>{{$features[$i]->name}}</span>
                                            <input class="mt-1" type= "checkbox" autocomplete='off' name="feature[]" value="{{$features[$i]->name}}" 
                                             id=""
                                             @if (isset($params['feature'])&&(array_search($features[$i]->name,$params['feature'])!==false))
                                                checked = "checked"
                                             @endif>
                                        </li>
                                    @endfor
                                </ul>
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                </div>
                            </div>
                            <!-- filter by gender -->
                            <div class="mb-30">
                                <h4 class="mb-3">Gender</h4>
                                <ul class="pl-0 shop-list list-unstyled pr-2" style="max-height: 120px; overflow-y:auto;">
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Mens</span>
                                        <input class="mt-1" type= "checkbox" autocomplete='off' name="gender[0]" value="Mens" id=""
                                        @if (isset($params['gender'][0]))                                           
                                            checked = "checked"
                                        @endif>
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Ladies</span>
                                            <input class="mt-1" type= "checkbox" autocomplete='off' name="gender[1]"value="Ladies" id=""
                                        @if (isset($params['gender'][1]))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                    <li class="d-flex py-2 text-gray justify-content-between">
                                        <span>Unisex</span>
                                        <input class="mt-1" type= "checkbox" autocomplete='off' name="gender[2]" value="Unisex" id=""
                                        @if (isset($params['gender'][2]))
                                            checked = "checked"
                                        @endif>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                </div>
                            </div>
                            <!-- filter by price range -->
                            <div class="mb-30">
                                <select class="select" name="price" id="price">
                                    <option value="1000000"
                                        @if ($params['price'] == '1000000')
                                            selected = "selected"
                                        @endif
                                    >All prices</option>
                                    <option value="100"
                                        @if ($params['price'] == '100')
                                            selected = "selected"
                                        @endif
                                    >Up to $100</option>
                                    <option value="200"
                                        @if ($params['price'] == '200')
                                            selected = "selected"
                                        @endif
                                    >Up to $200</option>
                                    <option value="500"
                                        @if ($params['price'] == '500')
                                            selected = "selected"
                                        @endif
                                    >Up to $500</option>
                                    <option value="1000"
                                        @if ($params['price'] == '1000')
                                            selected = "selected"
                                        @endif
                                    >Up to $1000</option>
                                </select>    
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                </div>
                            </div>
                            <!-- color selector -->
                            <div class="color mb-30">
                                <h4 class="mb-3">Shop by Color</h4>
                                <ul class="list-inline pr-2" style="max-height: 200px; overflow-y:auto;">
                                    @for ($i = 0; $i < count($colors); $i++)
                                        <li class="d-flex py-2 text-gray">
                                            <span class="mr-auto">{{(explode('/',$colors[$i]->name))[0].'-'.(explode('/',$colors[$i]->name))[1]}}</span>
                                            <span  style="
                                            height: 25px;
                                            width: 25px;
                                            border-radius: 20px;
                                            background-color :{{(explode('/',$colors[$i]->name))[0]}};
                                            @if ((explode('/',$colors[$i]->name))[0]=='white')
                                            border: 1px solid black;
                                            @endif
                                            "></span>
                                             <span  style="
                                            height: 25px;
                                            width: 25px;
                                            border-radius: 20px;
                                            background-color:{{(explode('/',$colors[$i]->name))[1]}};
                                            @if ((explode('/',$colors[$i]->name))[0]=='white')
                                            border: 1px solid black;
                                            @endif
                                            "></span>
                                            <input class="mt-1 ml-4" type= "checkbox" autocomplete='off' name="color[]" value="{{$colors[$i]->name}}" id=""
                                            @if (isset($params['color'])&&(array_search($colors[$i]->name,$params['color'])!==false))
                                                checked = "checked"
                                            @endif>
                                        </li>
                                    @endfor
                                </ul>
                                
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                </div>
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

                            <div class="d-flex justify-content-center mb-3">
                                <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>



    
@endsection