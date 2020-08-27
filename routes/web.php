<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomePage@index');
Route::get('/{slug}', 'HomePage@show');
