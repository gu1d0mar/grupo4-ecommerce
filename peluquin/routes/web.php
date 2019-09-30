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

Route::group(['middleware' => ['auth']], function () {
  // User
  Route::get('/user','UsersController@show')->name('user.profile');
  Route::get('/user/config','UsersController@edit')->name('user.edit');
  Route::put('/user/config', 'UsersController@update')->name('user.update');

  //Cart
  Route::get('/cart','CartController@show')->name('cart');
  Route::get('/cart/add/{id}','CartController@add');
  Route::get('/cart/remove/{id}','CartController@remove');
  //Create Shops
  Route::get('/shops/create', 'ShopsController@create')->name('shops.create');
  Route::post('/shops/create', 'ShopsController@store')->name('shops.save');
  //Create Products
  Route::get('/products/create', 'ProductsController@create')->name('products.create')->middleware('hasShop');
  Route::post('/product/create', 'ProductsController@store')->name('products.save')->middleware('hasShop');
});

Route::get('/products', 'ProductsController@index');

Route::get('/home', 'HomeController@index')->name('home');

//Shops
Route::get('/shops','ShopsController@directory')->name('shops');
Route::get('/shops/search', 'ShopsController@search')->name('shops.search');
Route::get('/shops/{id}','ShopsController@show')->name('shops.show');

//Cart

//Users
//Route::delete('/user/delete', 'userController@destroy')->name('user.destroy')-middleware('auth');


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
