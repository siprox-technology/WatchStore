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
            $brands = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->select('brands.name')->distinct()
            ->get();
            $categories = DB::table('products')->select('category as name')->distinct()->get();
            $features = DB::table('products')->select('feature as name')->distinct()->get();
            $genders = DB::table('products')->select('gender as name')->distinct()->get();
            $colors = DB::table('products')->select('color as name')->distinct()->get();
            
            //extract parameters from request
            $params = $request->except(['sortBy']);

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
            ->Orwhere('products.sub_brand','like',$key)
            ->Orwhere('products.category','like',$key)
            ->Orwhere('products.feature','like',$key)
            ->Orwhere('products.gender','like',$key)
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
        //product model
        $product = Product::where('model_number', $model_number)->first();
        $numOfImages = count(\File::allFiles("images/product-images/".$model_number));
        //product specs array
        $product_specs = explode(',',(DB::table('products')->
        select('specification')->
        where('model_number',$model_number)->first())->specification);
        $specs = [];
        $i = 0;
        while($i<count($product_specs))
        {
            $specs += [$product_specs[$i] => $product_specs[$i+1]];
            $i+=2; 
        }
        //related items
        $related_products = DB::table('products')
        ->select('id','model_number','price','discount','name')
        ->where('feature','like',(explode(' ',$product->feature))[0].'%')
        ->where('gender','=',$product->gender)
        ->orderBy('price','desc')->get();
        //average review star
        $average_review_star = 0;
        for($i=0; $i<count($product->reviews->toArray());$i++)
        {
            $average_review_star+= $product->reviews->toArray()[$i]['star_number'];
        }

        return view('shop.product-details',
        [
            'product'=>$product,
            'numOfImages'=>$numOfImages,
            'specs'=>$specs,
            'related_products'=>$related_products,
            'average_review_star'=> ($average_review_star)==0?'0.0':($average_review_star/count($product->reviews->toArray()))
        ]);
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
