<?php

Route::get('', 'admin\DashboardController@index');

Route::get('/setting','admin\SettingController@index')->name('admin.setting');
Route::get('/setting/add_setting','admin\SettingController@add_setting')->name('admin.setting.add_setting');
Route::post('/setting/add_setting','admin\SettingController@process_add_setting')->name('admin.setting.process.add_setting');

Route::delete('/setting/{id}','admin\SettingController@destroy')->name('admin.setting.delete_setting');
Route::get('/setting/edit_setting/{id}','admin\SettingController@edit_setting')->name('admin.setting.edit_setting');
Route::post('/setting/edit_setting','admin\SettingController@process_edit_setting')->name('admin.setting.process.edit_setting');

//Route::post('/add_setting', 'admin\SettingController@add_setting')->name('admin.common.setting.add_setting');
//Route::post('/save_setting', 'admin\SettingController@save_setting')->name('admin.common.setting.save');

Route::post('/up_photo_ajax', 'common\AjaxController@up_photo_ajax')->name('photo.ajax.upload');
Route::post('/update_ajax', 'common\AjaxController@update_ajax')->name('ajax.update');

Route::get('/logout', 'admin\DashboardController@logout');

Route::get('/menu/sort', 'admin\MenuController@sort');

Route::resource('/menu', 'admin\MenuController');

Route::resource('/post', 'admin\PostController');
Route::resource('/category', 'admin\CategoryController');
Route::post('/order/change_status', 'admin\OrderController@change_status')->name('admin.order.change_status');
Route::get('/order/{status}', 'admin\OrderController@index')->name('admin.order.show');
Route::get('/order/cancel/{id}', 'admin\OrderController@cancel')->name('admin.order.cancel');

Route::resource('/order', 'admin\OrderController');



Route::get('/group/sort', 'admin\GroupController@sort');
Route::resource('/group', 'admin\GroupController');

Route::get('/product/template', 'admin\ProductController@template');
Route::resource('/product', 'admin\ProductController');



Route::get('/import_file', 'admin\ImportFileController@import_file')->name('admin.import');
Route::post('/import_file', 'admin\ImportFileController@process_import_file')->name('admin.import.process');

Route::resource('/coupon', 'admin\CouponController');
