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

Route::get("/catalog", "viewsController@catalog");

Route::get("/contact", "viewsController@contact");

Route::get("/payment", "viewsController@payment");

Route::get("/product", "viewsController@product");

Route::get("/registration", "viewsController@registration");

Route::get("/cart", "viewsController@cart");

//RegisterController
Route::post("/registration", "registerController@register");

//LoginController
Route::post("/login", "loginController@login");



