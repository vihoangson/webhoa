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
Route::get('/product/{id}', 'HomeController@show');

Route::post('/up', 'admin\ProductController@up');
Route::post('/update_ajax', 'admin\ProductController@update_ajax');

Route::resource('post', 'PostController');
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
