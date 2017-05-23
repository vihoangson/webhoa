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
Route::post( '/contact', 'HomeController@process_contact' )->name('contact.process');

Route::get( '/unsubscribe', 'HomeController@unsubscribe' )->name('unsubscribe');

Route::post( '/customer/add_wishlist', 'common\AjaxController@add_wishlist' )->name('add_wishlist');
Route::post( '/product/process_review', 'common\AjaxController@process_review' )->name('process_review');


Route::get( '/khuyen-mai-hot', 'CategoryController@khuyenmaihot' )->name('khuyenmaihot');
Route::get( '/deal-moi', 'ProductController@deal_moi' )->name('deal-moi');

Route::get( '/product/check_order/{order_code}', 'ProductController@check_order' )->name('product.check_order');
Route::post( '/product/add_coupon', 'ProductController@add_coupon' )->name('product.add_coupon');
Route::get( '/remove_coupon_code', 'ProductController@remove_coupon_code' )->name('product.remove_coupon_code');


Route::get( '/product', 'ProductController@index' )->name('product.index');
Route::get( '/product/payment', 'ProductController@payment' )->name('product.payment');
Route::get( '/product/remove_item_in_cart/{rowId}/{redirect}', 'ProductController@remove_item_in_cart' )->name('');
Route::get( '/product/remove_item_in_cart/{rowId}', 'ProductController@remove_item_in_cart' )->name('');
Route::post( '/product/payment', 'ProductController@submit_payment' );
Route::get( '/product/checkout', 'ProductController@checkout' )->name('product.checkout');
Route::get( '/product/add_cart/{id}', 'ProductController@add_cart' )->name('product.add_cart');
Route::post( '/product/update_cart', 'ProductController@update_cart' );
Route::get( '/product/finish', 'ProductController@finish' )->name('product.finish');
Route::get( 'product/search', 'ProductController@search' )->name('product.search');
Route::get( '/product/{id}', 'ProductController@show' )->name('product.show');

Route::get( '/tags/{tag}', 'common\CommonController@tags' )->name('tags.show');

Route::post( '/register_email', 'common\CommonController@register_email' )->name('register_email');



Route::get( 'post/{id}', 'PostController@show' );
//Route::resource('post', 'PostController');

//Route::resource('/menu', 'MenuController');

Route::resource( '/group', 'GroupController' );


Route::resource( '/category', 'CategoryController' );



Route::auth();

//Route::get( '/home', 'HomeController@index' );
// Home

