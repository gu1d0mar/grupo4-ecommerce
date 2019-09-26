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

Route::get('/', function () {
    return view('welcome');
});

//Products
//Route::get('/products', 'ProductsController@directory')->name('products');
//Route::get('/products/search', 'productsController@search')->name('products.search');
//Route::delete('/products/delete', 'productsController@destroy')->name('products.destroy')//->middleware(admins);
//Route::get('/products/add','productsController@create')->name('products.create')//->middleware(admins);
//Route::post('/products/add','productsController@store')->name('products.save')//->middleware(admins);
//Route::get('/products/{id}', 'productsController@show')->name('products.show');
//Route::get('/products/{id}/edit', 'productsController@edit')->name('products.edit')//->middleware(admins);
//Route::put('/products/{id}', 'productsController@update')->name('products.update')//->middleware(admins);
//Route::get('/products/{id}/buy', 'productsController@buy')->name('products.buy')->middleware('auth');
//Route::post('/products/{id}/buy', 'productsController@addToCart')->name('products.cart')->middleware('auth');

Route::get('/shops','ShopsController@directory')->name('shops');
Route::get('/shops/{id}','ShopsController@show')->name('shops.show');

//Cart
Route::get('/cart', function () {
  return view('cart');
});

//Users
//Route::delete('/user/delete', 'userController@destroy')->name('user.destroy')-middleware('auth');
//Route::get('/user{id}', 'userController@show')->name('user')-middleware('auth');
//Route::put('/user/{id}', 'userController@update')->name('user.update')-middleware('auth');

//Shops
//Route::get('/shops','shopsController@directory')->name('shops');
//Route::get('/shops/search','shopsController@search')->name('shops.search');
//Route::delete('/shops/delete', 'shopsController@destroy')->name('shop.destroy')//->middleware(admins);
//Route::get('/shops/{id}', 'shopsController@show')->name('shop.show');
//Route::get('/shops/{id}/edit', 'shopsController@edit')->name('shop.edit')//->middleware(admins);
//Route::put('/shops/{id}', 'shopsController@update')->name('shop.update')//->middleware(admins);



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
