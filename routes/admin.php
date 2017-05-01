<?php
Route::post('/up', 'admin\ProductController@up');
Route::post('/update_ajax', 'admin\ProductController@update_ajax');
Route::get('/admin', 'admin\DashboardController@index');
Route::get('/admin/setting', 'admin\DashboardController@setting');
Route::post('/admin/setting', 'admin\DashboardController@save_setting');
Route::get('/admin/logout', 'admin\DashboardController@logout');
Route::get('/admin/product/template', 'admin\ProductController@template');
Route::get('/admin/menu/sort', 'admin\MenuController@sort');
Route::resource('/admin/menu', 'admin\MenuController');
Route::get('/admin/group/sort', 'admin\GroupController@sort');
Route::resource('/admin/group', 'admin\GroupController');
Route::resource('/admin/product', 'admin\ProductController');
Route::resource('/admin/post', 'admin\PostController');
Route::resource('/admin/category', 'admin\CategoryController');
Route::resource('/admin/order', 'admin\OrderController');