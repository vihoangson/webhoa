<?php
Route::get('', 'admin\DashboardController@index');

Route::post('/up', 'admin\ProductController@up');
Route::post('/update_ajax', 'admin\ProductController@update_ajax');

Route::get('/logout', 'admin\DashboardController@logout');

Route::get('/menu/sort', 'admin\MenuController@sort');

Route::resource('/menu', 'admin\MenuController');

Route::resource('/post', 'admin\PostController');
Route::resource('/category', 'admin\CategoryController');
Route::resource('/order', 'admin\OrderController');

Route::get('/group/sort', 'admin\GroupController@sort');
Route::resource('/group', 'admin\GroupController');

Route::get('/setting', 'admin\DashboardController@setting');
Route::post('/setting', 'admin\DashboardController@save_setting');

Route::get('/product/template', 'admin\ProductController@template');
Route::resource('/product', 'admin\ProductController');