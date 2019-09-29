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

<<<<<<< Updated upstream
Route::get('/', 'HomeController@index')->name('home');
=======


Route::get('/', function () {
    return view('welcome'); 
});
>>>>>>> Stashed changes

Route::group(['middleware' => ['auth']], function () {
  // User
  Route::get('/user','UsersController@show')->name('user.profile');
  Route::get('/user/config','UsersController@edit')->name('user.edit');
  Route::put('/user/config', 'userController@update')->name('user.update');
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

// Prueba agregar Shops a mano
Route::get('/shops/index', 'ShopsController@index');
//
Route::get('/shops/{id}','ShopsController@show')->name('shops.show');

<<<<<<< HEAD
<<<<<<< Updated upstream
Route::get('/cart','CartController@show')->name('cart')->middleware('auth');
Route::get('/cart/add/{id}','CartController@add')->middleware('auth');
Route::get('/cart/remove/{id}','CartController@remove')->middleware('auth');
=======
//Cart
Route::bind('product', function($slug){
    return App\Product::where('slug',$slug) -> first();
});
Route::get('/cart', function () {
  return view('cart');
Route::get ('cart/show', 'CartController@show');
})->name('cart');
Route::get('cart/add/{product}','CartController@add');
//Compras
    Route::get('comprar', [
        'uses' => 'CartController@comprar',
        'as' => 'cart.comprar',
        'middleware' => 'auth'
    ]);
    Route::post('comprar', [
        'uses' => 'CartController@postcomprar',
        'as' => 'cart.postcomprar',
        'middleware' => 'auth'
    ]);
    Route::get('anadir-al-carro/{id}', [
    'uses' => 'CartController@anadiralcarro',
    'as' => 'cart.anadiralcarro'
    ]);
    Route::post('anadir-al-carro', [
    'uses' => 'CartController@postanadiralcarro',
    'as' => 'cart.postanadiralcarro'
    ]);
    Route::get('remover-un-item/{id}', [
    'uses' => 'CartController@removerunitemcarro',
    'as' => 'cart.removerunitemcarro'
    ]);
    Route::get('remover-item/{id}', [
    'uses' => 'CartController@removeritemcarro',
    'as' => 'cart.removeritemcarro'
    ]);
    Route::get('carro', [
        'uses' => 'CartController@carro',
        'as' => 'cart.carro'
    ]);


>>>>>>> Stashed changes
=======
//Cart
>>>>>>> 1adb9abab5f9533544c8e0f472fa76a698212a5a

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
