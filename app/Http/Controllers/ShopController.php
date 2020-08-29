<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Acme\Entities\Product;

class ShopController extends Controller
{
	public function index()
	{
		return view('shop');
	}

	public function show($id, $slug)
    {
    	return view('show', compact('slug', 'id'));
    }
}
