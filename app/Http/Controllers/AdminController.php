<?php

namespace App\Http\Controllers;

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
}
