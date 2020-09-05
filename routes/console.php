<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('test', function () {

	dd(\Acme\Entities\Product::list([
           'select' => '',
            'where[0][type]' => 'equals',
            'where[0][attribute]' => 'bestSale',
            'where[0][value]' => true
	])['list']);
});
