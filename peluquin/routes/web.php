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
Route::get('/home', 'HomeController@index')->name('home');

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
