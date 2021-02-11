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
            $params = $request->except(['_token'],['sortBy']);

            $params_brands = isset($params['brand'])?$params['brand']:$brands->pluck('name')->toArray();
            $params_categories = isset($params['category'])?$params['category']:$categories->pluck('name')->toArray();
            $params_features = isset($params['feature'])?$params['feature']:$features->pluck('name')->toArray();
            $params_gender = isset($params['gender'])?$params['gender']:$genders->pluck('name')->toArray();
            $params_colors = isset($params['color'])?$params['color']:$colors->pluck('name')->toArray();

            //filter sort and paginate products to display
            $products = DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->whereIn('brands.name',$params_brands)
            ->whereIn('products.category',$params_categories)
            ->whereIn('products.feature',$params_features)
            ->whereIn('products.color',$params_colors)
            ->whereIn('products.gender',$params_gender)
            ->where('products.price', '<', $request->price)
            ->orderBy('products.'.$request->sortBy,'desc')
            ->paginate(9);

            return view('shop.sort_filter',
            [
                'products'=>$products->appends(request()->input()),
                'brands'=>$brands,
                'colors'=>$colors,
                'categories'=>$categories,
                'features'=>$features,
                'genders'=>$genders,
                'params' => $params
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
