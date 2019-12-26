<?php

namespace App\Http\Controllers;

use App\Products;
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
            'stock' => 'required'
        ]);
        Products::create(request(['name','description','price','stock']));

        return redirect()-> to('/admin');
    }
}
