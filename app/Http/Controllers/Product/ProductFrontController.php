<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\product;
use App\Models\Categories\category;

class ProductFrontController extends Controller
{
    
    public function getAll(Request $request){
        $products = Product::LatestFirst()->paginate(20);
        $categories = category::get();

        if( !$request->hasCookie('referral') && $request->query('ref') ) {
        return redirect($request->url())->withCookie(cookie()->forever('referral', $request->query('ref')));
        }else{

          //dd($request->cookie('referral'));
        }

        return view('FrontEnd.Products.list', compact('products', 'categories'));
    }

    public function getOne(Request $request, product $product){

    	if( !$request->hasCookie('referral') && $request->query('ref') ) {
        return redirect($request->url())->withCookie(cookie()->forever('referral', $request->query('ref')));
        }else{

          //dd($request->cookie('referral'));
        }
       
        $related = product::where('category_id', '=', $product->category_id)->get();
        return view('FrontEnd.Products.single', compact('product'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductCategory(Category $categories)
    {
        $caties = category::with('product')->get();
        return view('FrontEnd.Products.category', compact('categories','caties'));
    }

}
