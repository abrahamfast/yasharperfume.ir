<?php

namespace Acme\Entities;

use Acme\Contracts\EntitiesInterface;
use Acme\Wrapper\Endpoint;

class Account extends Endpoint implements EntitiesInterface
{

	public static function list($filter = [])
	{
		return (new self)->endpoint()->request('GET', 'Account', $filter);
	}

	public static function read($id, $filter = [])
	{
		return (new self)->endpoint()->request('GET', "account/$id", $filter);
	}

	public static function create($data)
	{
		return (new self)->endpoint()->request('POST', 'account', $data);
	}

	public function update($id, $data)
	{

	}

	public function delete($id)
	{

	}
}
