<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');
Route::get('shop', 'ShopController@index');
Route::get('shop/{slug}', 'ShopController@show');
