<?php

namespace Acme\Contracts;

interface EntitiesInterface
{
	public function list(?array $filter = []);

	public function read(string $id, ?array $filter = []);

	public function update(string $id, ?array $data);

	public function delete(string $id);
}
