<?php

Route::match(['get', 'post'], '/',                      'HomeController@home');

Route::match(['get', 'post'], '/add-category',          'CategoryController@addCatergory');
Route::match(['get', 'post'], '/get-all-category',      'CategoryController@getAllCategory');

Route::match(['get', 'post'], '/add-bill',              'BillController@addBill');
Route::match(['get', 'post'], '/get-all-bill',          'BillController@getAllBill');

Route::match(['get', 'post'], '/add-biller',            'BillerController@addBiller');
Route::match(['get', 'post'], '/get-all-biller',        'BillerController@getAllBiller');
Route::match(['get', 'post'], '/get-biller/{catId}',    'BillerController@getSingleBiller');

Route::get('/home', 'HomeController@index');