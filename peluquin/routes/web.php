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

Route::get('/', 'HomeController@index')->name('home');
<<<<<<< HEAD

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
Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');
Route::post('/productsaction', 'ProductsController@storeProduct');
=======
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> eb1303dbd40d678481b8d590605876dd307d17dd

//Shops
Route::get('/shops','ShopsController@directory')->name('shops');
Route::get('/shops/search', 'ShopsController@search')->name('shops.search');
Route::get('/shops/{id}','ShopsController@show')->name('shops.show');

Route::get('/cart','CartController@show')->name('cart')->middleware('auth');
Route::get('/cart/add/{id}','CartController@add')->middleware('auth');
Route::get('/cart/remove/{id}','CartController@remove')->middleware('auth');

//Users
//Route::delete('/user/delete', 'userController@destroy')->name('user.destroy')-middleware('auth');
Route::get('/user','UsersController@show')->name('user.profile')->middleware('auth');
Route::get('/user/config','UsersController@edit')->name('user.edit')->middleware('auth');
//Route::put('/user/{id}', 'userController@update')->name('user.update')-middleware('auth');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('help.faq');
})->name('faq');

Route::get('/termsandconditions',function(){
  return view('help.tac');
})->name('terms');

Auth::routes();
