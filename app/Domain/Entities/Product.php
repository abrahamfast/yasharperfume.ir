<?php

namespace Acme\Entities;

use Acme\Contracts\EntitiesInterface;
use Acme\Wrapper\Endpoint;

class Product extends Endpoint implements EntitiesInterface
{
	public function list($filter = [])
	{
		return $this->endpoint()->request('GET', 'product', $filter);
	}

	public function read($id, $filter = [])
	{
		return $this->endpoint()->request('GET', "product/$id", $filter);
	}

	public function update($id, $data)
	{

	}

	public function delete($id)
	{

	}
}
