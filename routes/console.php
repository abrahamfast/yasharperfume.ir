<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('test', function () {
	dd(\Acme\Entities\Product::list([
		'select' => 'name,sliderCaption,sliderItemIds',
		'where[0][type]' => 'equals',
		'where[0][attribute]' => 'slider',
		'where[0][value]' => true
	])['list']);
});
