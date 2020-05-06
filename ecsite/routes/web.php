<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ItemController@index');
Route::get('/item/{item}', 'ItemController@show');
Route::post('/cartitem', 'CartItemController@store');
Route::get('/cartitem', 'CartItemController@index');
Route::delete('/cartitem/{cartItem}', 'CartItemController@destroy');
Route::put('/cartitem/{cartItem}', 'CartItemController@update');
Route::get('/buy', 'BuyController@index');
Route::post('/buy', 'BuyController@store');