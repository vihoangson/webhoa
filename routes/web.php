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

Route::get( '/', [ 'uses' => 'HomeController@index', 'as' => 'home' ] );
Route::get( '/contact', 'HomeController@contact' )->name('contact');
Route::post( '/contact', 'HomeController@process_contact' )->name('contact');

Route::post( '/customer/add_wishlist', 'common\AjaxController@add_wishlist' )->name('add_wishlist');

Route::get( '/product', 'ProductController@index' )->name('contact')->name('product.index');
Route::get( '/product/payment', 'ProductController@payment' )->name('contact')->name('product.payment');
Route::get( '/product/remove_item_in_cart/{rowId}/{redirect}', 'ProductController@remove_item_in_cart' )->name('');
Route::get( '/product/remove_item_in_cart/{rowId}', 'ProductController@remove_item_in_cart' )->name('');
Route::post( '/product/payment', 'ProductController@submit_payment' );
Route::get( '/product/checkout', 'ProductController@checkout' )->name('contact')->name('product.checkout');
Route::get( '/product/add_cart/{id}', 'ProductController@add_cart' )->name('product.add_cart');
Route::post( '/product/update_cart', 'ProductController@update_cart' );
Route::get( '/product/finish', 'ProductController@finish' )->name('product.finish');
Route::get( '/product/{id}', 'ProductController@show' )->name('product.show');

Route::post( '/register_email', 'ProductController@register_email' )->name('register_email');

Route::get( 'post/{id}', 'PostController@show' );
//Route::resource('post', 'PostController');

//Route::resource('/menu', 'MenuController');

Route::resource( '/group', 'GroupController' );


Route::resource( '/category', 'CategoryController' );



Route::auth();

//Route::get( '/home', 'HomeController@index' );
// Home

