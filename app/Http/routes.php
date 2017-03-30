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

Route::get('/',  ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/contact', 'HomeController@contact');

Route::get('/product', 'ProductController@index');
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

Route::get('/admin', 'admin\DashboardController@index');
Route::get('/admin/setting', 'admin\DashboardController@setting');
Route::post('/admin/setting', 'admin\DashboardController@save_setting');
Route::get('/admin/logout', 'admin\DashboardController@logout');
Route::get('/admin/product/template', 'admin\ProductController@template');
Route::get('/admin/group/sort', 'admin\GroupController@sort');
Route::resource('/admin/group', 'admin\GroupController');

Route::resource('/admin/product', 'admin\ProductController');
Route::resource('/admin/post', 'admin\PostController');
Route::resource('/admin/category', 'admin\CategoryController');
Route::resource('/admin/order', 'admin\OrderController');

Route::resource('/category', 'CategoryController');

//
Route::get('/welcome', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
// Home

