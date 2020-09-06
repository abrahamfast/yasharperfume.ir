<?php

namespace Acme\Entities;

use Acme\Contracts\EntitiesInterface;
use Acme\Wrapper\Endpoint;

class Attachment extends Endpoint implements EntitiesInterface
{

	public static function list($filter = [])
	{
		return (new self)->endpoint()->request('GET', 'Attachment', $filter);
	}

	public static function read($id, $filter = [])
	{
		return (new self)->endpoint()->request('GET', "Attachment/$id", $filter);
	}

	public static function create($data)
	{
		return (new self)->endpoint()->request('POST', 'Attachment', $data);
	}

	public static function update($id, $data)
	{
		return (new self)->endpoint()->request('PUT', "Attachment/{$id}", $data);
	}

	public function delete($id)
	{

	}
}
