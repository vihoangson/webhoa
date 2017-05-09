<?php

Route::get('', 'admin\DashboardController@index');

Route::get('/setting','admin\SettingController@index');

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

Route::get('/product/template', 'admin\ProductController@template');
Route::resource('/product', 'admin\ProductController');

Route::post('/add_setting', 'admin\SettingController@add_setting')->name('admin.common.setting.add_setting');
Route::post('/save_setting', 'admin\SettingController@save_setting')->name('admin.common.setting.save');


