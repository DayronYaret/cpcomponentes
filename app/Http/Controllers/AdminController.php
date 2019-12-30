<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Order;
use App\Products;
use App\Suborder;
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
    public function editProduct(Request $request){

        $product = Products::get()
            ->where('id',$request->id)
            ->first();
        return view('editProduct')
            ->with('product',$product);
    }
    public function updateProduct(Request $request){
        $product = Products::where("id",$request->id)
            ->first();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->processor = $request->processor;
        $product->graphic = $request->graphic;
        $product->RAM = $request->RAM;
        $product->motherboard = $request->motherboard;
        $product->imageUrl = $request->imageUrl;
        $product->imageUrl2 = $request->imageUrl2;
        $product->imageUrl3 = $request->imageUrl3;
        $product->save();

        return  redirect()->to("/productsAdmin");

    }

    public function deleteProduct($id){
        $product = Products::where("id", $id)
            ->first();
        $product->delete();
        return redirect()->to("/productsAdmin");
    }
    public  function getOrders(){
        $orders = Suborder::orderBy("order_id")
        ->get();
        //dd($products);

        return view('orders')
            ->with('orders', $orders);
    }
    public  function getTransactions(){
        $invoices = Invoice::all();
        //dd($products);

        return view('transactions')
            ->with('invoices', $invoices);
    }
}
