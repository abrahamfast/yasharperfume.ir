<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('test', function () {
	$number = 5500;
	for ($i=0; $i < 200; $i++) {
		$number = $number + 1;
		echo "http_proxy=159.89.237.207:80 php artisan mrterhan:batch https://mrtehran.com/artist/" . $number . " ;\ \n\r";
	}
	die;
	$a = new Acme\Entities\Product();
	dd($a->read('5f11faeb3f318b6a9'));
});
