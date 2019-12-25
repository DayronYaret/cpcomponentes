<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index(){
        return view("index");
    }

    public function login(){
        return view("login");
    }

    public function catalog(){
        return view("catalog-page");
    }

    public function contact(){
        return view("contact-us");
    }

    public function payment(){
        return view("payment-page");
    }

    public function product(){
        return view("product-page");
    }

    public function registration(){
        return view("registration");
    }

    public function cart(){
        return view("shopping-cart");
    }

    public function admin(){
        return view("admin");
    }

}
