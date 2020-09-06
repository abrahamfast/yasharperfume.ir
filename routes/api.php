<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Acme\Service\OtpAuth;




Route::post('/user/{id}/attachment', function ($id, Request $request) {
	$request->all();
// 	field: "avatar"
// file: "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD"
// name: "fdfd.jpg"
// relatedType: "Account"
// role: "Attachment"
// size: 65040
// type: "image/jpeg"
	return Acme\Entities\Attachment::create($data);
// 	https://panel.srv.yasharperfume.ir/api/v1/Account/5f54254f9bde340f9
// 	avatarId: "5f5443bd6d063e266"
// avatarName: "fdfd.jpg"
});

Route::get('/user/{id}', function ($id) {
	return Acme\Entities\Account::read($id);
});

Route::put('/user', function (Request $request) {
	$request->validate(['id' => 'required']);
	Acme\Entities\Account::update($request->get('id'), $request->all());
});

Route::post('/user', function (Request $request) {
	$request->validate([
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

	$request->validate([
		'name' => 'required',
	]);

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


