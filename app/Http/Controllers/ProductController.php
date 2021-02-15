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
    //display all products
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
    //display products based on request
    public function show(Request $request)
    {
        if(count($request->request)<3)
        {
            //products
            $products = Product::latest()
            ->select('products.id as product_id','products.model_number','products.price','products.discount','products.name as name')
            ->paginate(9);
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
            ->select('products.id as product_id','products.model_number','products.price','products.discount','products.name as name')
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
    //search products
    public function search(Request $request)
    {
        if(isset($request->key))
        {
            $key = '%'.$request->key.'%';
            //search for products to display
            $products = DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.id as product_id','products.model_number','products.price','products.discount','products.name as name')
            ->Orwhere('brands.name','like',$key)
            ->Orwhere('products.name','like',$key)
            ->Orwhere('products.category','like',$key)
            ->Orwhere('products.feature','like',$key)
            ->orderBy('price','desc')
            ->paginate(9);
            return view('shop.search',['products'=>$products->appends(request()->input())]);
        }
        else
        {
            return redirect()->route('shop.index');
        }


    }
    //show product details page
    public function showDetails($model_number)
    {
        $product = DB::table('products')->where('model_number', $model_number)->first();
        return view('product-details',['product'=>$product]);/* here */
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
