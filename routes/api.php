<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Acme\Service\OtpAuth;

Route::get('/user/', function (Request $request) {
    $code = OtpAuth::sendOtp($request->get('phone'));
    return [
    	'message' => 'otp sended',
    	'code' => $code
    ];
});

Route::post('/user/store', function (Request $request) {
    return $request->all();
});

Route::post('/user/update', function (Request $request) {
    return $request->all();
});

Route::post('/api/auth/send', function (Request $request) {
    return $request->all();
});

Route::post('/api/auth/verfiy', function (Request $request) {
    return $request->all();
});


