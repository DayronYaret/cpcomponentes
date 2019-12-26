<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'viewsController@index');

Route::get("/login", "viewsController@login");

//Route::get("/catalog", "viewsController@catalog");

Route::get("/contact", "viewsController@contact");

Route::get("/payment", "viewsController@payment");

Route::get("/product", "viewsController@product");

Route::get("/registration", "viewsController@registration");

Route::get("/cart", "viewsController@cart");

Route::get("/admin", "viewsController@admin");

//RegisterController
Route::post("/registration", "registerController@register");

//LoginController
Route::post("/login", "loginController@login");

Route::get("/logout", "loginController@logout");

//AdminController
//Route::get("/products","adminController@showProduct");

Route::get("/add-product", "adminController@add");

Route::get("/transactions", "adminController@showTransactions");

Route::get("/orders", "adminController@showOrders");

Route::post("/newProduct" ,"adminController@newProduct");

//ProductController

Route::get('/catalog', "productController@getProducts");

Route::get('/product', "productController@showProduct");
