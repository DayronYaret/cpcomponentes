<?php

namespace App\Http\Controllers;

use App\Products;
use App\Suggestion;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showProduct(){
        return view("products");
    }

    public function add(){
        return view("add-product");
    }

    public function showTransactions(){
        return view("transactions");
    }

    public function showOrders(){
        return view("orders");
    }
    public function newProduct(){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'imageUrl' => 'required',
            'imageUrl2' => 'required',
            'imageUrl3' => 'required',
            'processor' => 'required',
            'RAM' => 'required',
            'graphic' => 'required',
            'motherboard' => 'required',
        ]);
        Products::create(request(['name','description','price','stock', 'imageUrl', 'imageUrl2', 'imageUrl3',"processor","RAM","graphic","motherboard"]));

        return redirect()-> to('/admin');
    }

    public function showSuggestion(){
        $suggestions = Suggestion::all();
        return view("suggestions")
            ->with("suggestions", $suggestions);
    }
    public function deleteSuggestion($id){
        $suggestion = Suggestion::where("id", $id)
            ->first();
        $suggestion->delete();
        return redirect()->to("/suggestion");
    }

    public  function getProductsAdmin(){
        $products = Products::all();
        //dd($products);

        return view('products')
            ->with('products', $products);
    }

}
