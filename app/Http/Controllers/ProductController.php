<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(9);
        $brands = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->select('brands.name')->distinct()
            ->get();
        $categories = DB::table('products')->select('category as name')->distinct()->get();
        $features = DB::table('products')->select('feature as name')->distinct()->get();
        $genders = DB::table('products')->select('gender as name')->distinct()->get();
        $colors = DB::table('products')->select('color as name')->distinct()->get();

        return view('shop.index',
        [
            'products'=>$products,
            'brands'=>$brands,
            'colors'=>$colors,
            'categories'=>$categories,
            'features'=>$features,
            'genders'=>$genders
        ]);
    }
    public function show(Request $request)
    {

        if(count($request->request)<3)
        {
            //products
            $products = Product::latest()->paginate(9);
            $brands = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.brand_id')
                ->select('brands.name')->distinct()
                ->get();
            //all filters    
            $categories = DB::table('products')->select('category as name')->distinct()->get();
            $features = DB::table('products')->select('feature as name')->distinct()->get();
            $genders = DB::table('products')->select('gender as name')->distinct()->get();
            $colors = DB::table('products')->select('color as name')->distinct()->get();

            return view('shop.index',
            [
                'products'=>$products,
                'brands'=>$brands,
                'categories'=>$categories,
                'features'=>$features,
                'genders'=>$genders,
                'colors'=>$colors
            ]);
        }
        else
        {
            //all filters
            $brands = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->select('brands.name')->distinct()
            ->get();
            $categories = DB::table('products')->select('category as name')->distinct()->get();
            $features = DB::table('products')->select('feature as name')->distinct()->get();
            $genders = DB::table('products')->select('gender as name')->distinct()->get();
            $colors = DB::table('products')->select('color as name')->distinct()->get();
            //extract parameters from request

            $params = $request->except(['_token']);
/*             $params_sort = $params['sortBy']; */
            $params_brands = [];
            $params_categories = [];
            $params_features = [];
            $params_gender = [];
            $params_colors = [];


            //extract brands 
            for($i=0; $i<count($brands->toArray()); $i++)
            {
                if(isset($params['brand'.$i]))
                {
                    array_push($params_brands,$params['brand'.$i]);
                }
            }
            if(count($params_brands)<1)
            {
                $params_brands = $brands->pluck('name')->toArray();
            }

            //extract categories 
            for($i=0; $i<count($categories->toArray()); $i++)
            {
                if(isset($params['category'.$i]))
                {
                    array_push($params_categories,$params['category'.$i]);
                }
            }
            if(count($params_categories)<1)
            {
                $params_categories = $categories->pluck('name')->toArray();
            }

            //extract features 
            for($i=0; $i<count($features->toArray()); $i++)
            {
                if(isset($params['feature'.$i]))
                {
                    array_push($params_features,$params['feature'.$i]);
                }
            }
            if(count($params_features)<1)
            {
                $params_features = $features->pluck('name')->toArray();
            }


            //extract color filter
            for($i=0; $i<count($colors->toArray()); $i++)
            {
                if(isset($params['color'.$i]))
                {
                    array_push($params_colors,$params['color'.$i]);
                }
            }
            if(count($params_colors)<1)
            {
                $params_colors = $colors->pluck('name')->toArray();
            }


            //extract gender filter
            for($i=0; $i<count($genders->toArray()); $i++)
            {
                if(isset($params['gender'.$i]))
                {
                    array_push($params_gender,$params['gender'.$i]);
                }
            }
            if(count($params_gender)<1)
            {
                $params_gender = $genders->pluck('name')->toArray();
            }

            //filter and sort products to display
            $products = DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->whereIn('brands.name',$params_brands)
            ->whereIn('products.category',$params_categories)
            ->whereIn('products.feature',$params_features)
            ->whereIn('products.color',$params_colors)
            ->whereIn('products.gender',$params_gender)
            ->where('products.price', '<', $request->price)
            ->orderBy($request->sortBy,'ASC')
            ->paginate(9);
        
            return view('shop.sort_filter',
            [
                'products'=>$products->appends(request()->input()),
                'brands'=>$brands,
                'colors'=>$colors,
                'categories'=>$categories,
                'features'=>$features,
                'genders'=>$genders
            ]);
        }
    }


    public function store(Request $request)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
