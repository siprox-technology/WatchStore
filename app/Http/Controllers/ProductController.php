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
        return view('shop.index',
        [
            'products'=>$products,
            'brands'=>$brands,
            'colors'=>$colors,
            'categories'=>$categories,
            'features'=>$features
        ]);
    }
    public function show(Request $request)
    {
/*   dd($request); */
/*          dd($request); */
        //validate user inputs
        $this->validate($request,[
            'sortBy'=>'string',
            'brand'=>'string',
        ]);
        $products =DB::table('products')
        ->join('brands', 'products.brand_id', '=', 'brands.id')
        ->where('brands.name',$request->brand)->orderBy('products.created_at','ASC')
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
