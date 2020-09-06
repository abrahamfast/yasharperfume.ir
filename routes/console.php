<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('test', function () {

	$r = Acme\Entities\Account::list([
			'select' => '',
            'where[0][type]' => 'equals',
            'where[0][attribute]' => 'phoneNumber',
            'where[0][value]' => '09129796502'
	]);

	dd($r);

	$r = Acme\Entities\Account::create([
		'name' => 'full name',
		'phoneNumber' => '09129796502'
	]);

	dd($r);

	dd(\Acme\Entities\Product::list([
           'select' => '',
            'where[0][type]' => 'equals',
            'where[0][attribute]' => 'bestSale',
            'where[0][value]' => true
	])['list']);
});
