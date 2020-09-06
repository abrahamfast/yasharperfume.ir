<?php

namespace Acme\Contracts;

interface EntitiesInterface
{

	public static function list(?array $filter = []);

	public static function read(string $id, ?array $filter = []);


	public static function update(string $id, ?array $data);

	public function delete(string $id);
}
