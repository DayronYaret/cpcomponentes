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
Route::get("/products","adminController@showProduct");

Route::get("/add-product", "adminController@add");

Route::get("/transactions", "adminController@showTransactions");

Route::get("/orders", "adminController@showOrders");

Route::post("/newProduct" ,"adminController@newProduct");

Route::get("/suggestion", "adminController@showSuggestion");

Route::get("/productsAdmin", "adminController@getProductsAdmin");

Route::get("/editProduct", "adminController@editProduct");

Route::post("/updateProduct", "adminController@updateProduct");

Route::get("/productsAdmin/{id}", "adminController@deleteProduct");

Route::get('/suggestion/{id}', 'adminController@deleteSuggestion');

//ProductController

Route::get('/catalog', "productController@getProducts");

Route::get('/product', "productController@showProduct");

Route::get("getLatestProducts", "productController@getLatestProducts");

//SuggestionController

Route::post('/suggestion', 'suggestionController@addSuggestion');


//PaypalController
# The home route, which is used in the authentication scaffolding
# We update the closure argument to the index function of our controller
# Adding a product to the shopping cart
Route::get('/add/{product}', 'WebstoreController@addToCart')->name('add');
# Removing an product from the shopping cart
Route::get('/remove/{productId}', 'WebstoreController@removeProductFromCart')->name('remove');
# Clearing all products from the shopping cart
Route::get('/empty', 'WebstoreController@destroyCart')->name('empty');
# PayPal checkout
Route::get('checkout', 'PaypalController@payWithpaypal')->name('checkout');
# PayPal status callback
Route::get('status', 'PaypalController@getPaymentStatus');

