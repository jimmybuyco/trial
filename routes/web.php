<?php

Route::match(['get', 'post'], '/',             'HomeController@home');
Route::match(['get', 'post'], '/addBill',      'HomeController@addBill');
Route::match(['get', 'post'], '/getAllBiller', 'BillerController@getAllBiller');