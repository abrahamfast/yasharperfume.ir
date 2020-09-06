<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Acme\Service\OtpAuth;

Route::put('/user', function (Request $request) {
	return $request->all();
});

Route::post('/user', function (Request $request) {
	$request->validate([
		'name' => 'required',
		'phone' => 'required'
	]);

	$existAccount = Acme\Entities\Account::list([
		'select' => '',
        'where[0][type]' => 'equals',
        'where[0][attribute]' => 'phoneNumber',
        'where[0][value]' => $request->get('phone')
	]);

	if($existAccount['total']){
		return $existAccount['list'][0];
	}

	$account = Acme\Entities\Account::create([
		'name' => $request->get('name'),
		'phoneNumber' => $request->get('phone')
	]);

    return $account;
});

Route::post('/user/update', function (Request $request) {
    return $request->all();
});

Route::post('/auth/send', function (Request $request) {
    $code = OtpAuth::sendOtp($request->get('phone'));

    return [
    	'message' => 'otp sended',
    	'code' => $code
    ];
});

Route::post('/auth/verfiy', function (Request $request) {
    return $request->all();
});


