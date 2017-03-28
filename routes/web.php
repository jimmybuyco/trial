<?php

Route::match(['get', 'post'], '/',               'HomeController@home');
Route::match(['get', 'post'], '/add-bill',       'HomeController@addBill');
Route::match(['get', 'post'], '/get-all-biller', 'BillerController@getAllBiller');