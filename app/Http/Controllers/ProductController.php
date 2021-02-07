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
        $colors = DB::table('products')->select('color as name')->distinct()->get();
        $categories = DB::table('products')->select('category as name')->distinct()->get();
        $features = DB::table('products')->select('feature as name')->distinct()->get();
        $genders = DB::table('products')->select('gender as name')->distinct()->get();

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
            $products = Product::latest()->paginate(9);
            $brands = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.brand_id')
                ->select('brands.name')->distinct()
                ->get();
            $colors = DB::table('products')->select('color as name')->distinct()->get();
            $categories = DB::table('products')->select('category as name')->distinct()->get();
            $features = DB::table('products')->select('feature as name')->distinct()->get();
            $genders = DB::table('products')->select('gender as name')->distinct()->get();

            //--price--//

            return view('shop.index',
            [
                'products'=>$products,
                'brands'=>$brands,
                'colors'=>$colors,
                'categories'=>$categories,
                'features'=>$features,
                'genders'=>$genders
                //--price
            ]);
        }
        else
        {
            //all filters
            $brands = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->select('brands.name')->distinct()
            ->get();
            $colors = DB::table('products')->select('color as name')->distinct()->get();
            $categories = DB::table('products')->select('category as name')->distinct()->get();
            $features = DB::table('products')->select('feature as name')->distinct()->get();
            $genders = DB::table('products')->select('gender as name')->distinct()->get();
            //--price--//
            //extract sort and filter parameters from request

            $params = $request->except(['_token']);
            $params_brands = [];
            $params_categories = [];
            $params_features = [];
            $params_colors = [];
            $params_gender = [];
            $params_sort = $params['sortBy'];

            //--price--//
            //extract brands filter
            for($i=0; $i<count($brands->toArray()); $i++)
            {
                if(isset($params['brand'.$i]))
                {
                    array_push($params_brands,$params['brand'.$i]);
                }
            }
            //extract categories filter
            for($i=0; $i<count($categories->toArray()); $i++)
            {
                if(isset($params['category'.$i]))
                {
                    array_push($params_categories,$params['category'.$i]);
                }
            }
            //extract features filter
            for($i=0; $i<count($features->toArray()); $i++)
            {
                if(isset($params['feature'.$i]))
                {
                    array_push($params_features,$params['feature'.$i]);
                }
            }
            //extract color filter
            for($i=0; $i<count($colors->toArray()); $i++)
            {
                if(isset($params['color'.$i]))
                {
                    array_push($params_colors,$params['color'.$i]);
                }
            }
            //extract gender filter
            for($i=0; $i<count($genders->toArray()); $i++)
            {
                if(isset($params['gender'.$i]))
                {
                    array_push($params_gender,$params['gender'.$i]);
                }
            }
            //extract price filter
                        //--price--//

            //filter and sort products to display
            $products = DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->whereIn('brands.name',$params_brands)->orderBy('products.created_at','ASC')
            ->paginate(9);
            return view('shop.sort_filter',
            [
                'products'=>$products->appends(request()->input()),
                'brands'=>$brands,
                'colors'=>$colors,
                'categories'=>$categories,
                'features'=>$features,
                'genders'=>$genders
                //--price
            ]);
        }



    }


    public function test()
    {
        
        if(request()->filter)
        {
            dd(request());
            $products =DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('brands.name',request()->filter)->orderBy('products.created_at','ASC')
            ->paginate(9);
            $brands = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->select('brands.name')->distinct()
            ->get();
            $colors = DB::table('products')->select('color as name')->distinct()->get();
            $categories = DB::table('products')->select('category as name')->distinct()->get();
            $features = DB::table('products')->select('feature as name')->distinct()->get();
            return view('shop.sort_filter',
            [
                'products'=>$products,
                'brands'=>$brands,
                'colors'=>$colors,
                'categories'=>$categories,
                'features'=>$features
            
            ]);
        }
        else
        {
            $products = Product::latest()->paginate(9);
            $brands = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.brand_id')
                ->select('brands.name')->distinct()
                ->get();
            $colors = DB::table('products')->select('color as name')->distinct()->get();
            $categories = DB::table('products')->select('category as name')->distinct()->get();
            $features = DB::table('products')->select('feature as name')->distinct()->get();
            return view('shop.index',
            [
                'products'=>$products,
                'brands'=>$brands,
                'colors'=>$colors,
                'categories'=>$categories,
                'features'=>$features
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
