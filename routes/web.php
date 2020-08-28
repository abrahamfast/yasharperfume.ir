<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');
Route::get('shop', 'ShopController@index');
Route::get('shop/{slug}', 'ShopController@show');

Route::get('asset/{slug}', function($slug){
    	$attachmentId = explode('_', $slug)[0];
        $attachment = \App\Attachment::find($attachmentId);
        header('Pragma: public');
        header('Cache-Control: max-age=360000, must-revalidate');
        header('content-Type: ' . $attachment->type);
        header('Content-Size: ' . $attachment->size);
        readfile(env('ENDPOINT_UPLOAD_PATH') . $attachment->id );
})->name('asset')
