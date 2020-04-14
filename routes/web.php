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

Route::get('/', 'WelcomeController@index');
Route::get('/contact','WelcomeController@contact');

Route::get('/exchange','WelcomeController@exchange');

Route::get('/category-view/{id}', 'WelcomeController@category');
Route::get('/product-details/{id}', 'WelcomeController@productDetails');
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/show', 'CartController@showCart');
Route::get('/cart/delete/{id}', 'CartController@deleteCartProduct');

Route::get('/checkout', 'CheckoutController@index');
Route::post('/checkout/sign-up', 'CheckoutController@customerRegistration');
Route::post('/customer/login', 'CustomerLoginController@login');
Route::post('/customer/logout', 'CustomerLoginController@customer_logout');




Auth::routes();
Route::get('/dashboard', 'HomeController@index');

    
   
    
    
});
