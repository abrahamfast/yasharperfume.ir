<?php

namespace Acme\Entities;

use Acme\Contracts\EntitiesInterface;
use Acme\Wrapper\Endpoint;

class ProductCategory extends Endpoint implements EntitiesInterface
{
	public static function list($filter = [])
	{
		return (new self)->endpoint()->request('GET', 'ProductCategory', $filter);
	}

	public static function read($id, $filter = [])
	{
		return (new self)->endpoint()->request('GET', "ProductCategory/$id", $filter);
	}


	public function update($id, $data)
	{

	}

	public function delete($id)
	{

	}
}
