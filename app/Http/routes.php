<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/product/payment', 'ProductController@payment');
Route::get('/product/remove_item_in_cart/{rowId}/{redirect}', 'ProductController@remove_item_in_cart');
Route::get('/product/remove_item_in_cart/{rowId}', 'ProductController@remove_item_in_cart');
Route::post('/product/payment', 'ProductController@submit_payment');
Route::get('/product/checkout', 'ProductController@checkout');
Route::get('/product/add_cart/{id}', 'ProductController@add_cart');
Route::post('/product/update_cart', 'ProductController@update_cart');
Route::get('/product/finish', 'ProductController@finish');
Route::get('/product/{id}', 'ProductController@show');


Route::resource('post', 'PostController');

Route::post('/up', 'admin\ProductController@up');
Route::post('/update_ajax', 'admin\ProductController@update_ajax');


Route::get('admin/product/template', 'admin\ProductController@template');
Route::resource('admin/product', 'admin\ProductController');
Route::resource('admin/category', 'admin\CategoryController');
Route::resource('category', 'CategoryController');

//
Route::get('/welcome', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
