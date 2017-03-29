<?php

Route::match(['get', 'post'], '/',                      'HomeController@home');
Route::match(['get', 'post'], '/add-bill',              'HomeController@addBill');
Route::match(['get', 'post'], '/add-category',          'CategoryController@addCatergory');

Route::match(['get', 'post'], '/get-all-bills',         'BillController@getAllBill');
Route::match(['get', 'post'], '/get-all-biller',        'BillerController@getAllBiller');
Route::match(['get', 'post'], '/get-biller/{catId}',    'BillerController@getSingleBiller');
Route::match(['get', 'post'], '/get-all-category',      'CategoryController@getAllCategory');


Route::get('/home', 'HomeController@index');
