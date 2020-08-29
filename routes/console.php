<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('test', function () {
	$a = new Acme\Entities\Product();
	dd($a->read('5f11faeb3f318b6a9'));
});
