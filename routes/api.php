<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Acme\Service\OtpAuth;




Route::post('/user/{id}/attachment', function ($id, Request $request) {

	$data = [
		'file' => $request->file('file')->get(),
		'field' => 'avatar',
		'name' => $request->file('file')->getClientOriginalName(),
		'relatedType' => 'account',
		"role" => "Attachment",
		"size" => $request->file('file')->getSize(),
		"type" => $request->file('file')->getMimeType(),
	];


	$attachment =  Acme\Entities\Attachment::create($data);

	return Acme\Entities\Account::update($id, [
		'avatarId' => $attachment['id'],
		'avatarName' => $attachment['name']
	]);
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


