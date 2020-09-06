<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');
Route::get('shop', 'ShopController@index');
Route::get('shop/{id}/{slug}', 'ShopController@show');
Route::get('register', 'UserController@create');
Route::get('profile', 'UserController@profile');
Route::get('login', 'UserController@login');

Route::get('asset/{slug}', function($slug){
    $attachment = \App\Attachment::where('name', $slug)->first();
        header('Pragma: public');
        header('Cache-Control: max-age=360000, must-revalidate');
        header('content-Type: ' . $attachment->type);
        header('Content-Size: ' . $attachment->size);
        readfile(env('ENDPOINT_UPLOAD_PATH') . $attachment->id );
})->name('asset');
