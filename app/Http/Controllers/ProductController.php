<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public  function getProducts(){
        $products = Products::all();
        //dd($products);

        return view('catalog-page')
            ->with('products', $products);
    }
    public function showProduct(Request $request){

        $product = Products::get()
            ->where('id',$request->id)
            ->first();
        return view('product-page')
            ->with('product',$product);
    }
}
