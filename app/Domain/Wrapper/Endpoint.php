<?php

namespace Acme\Wrapper;

use SnapyCloud\PhpApi\Client\SnapyClient;


class Endpoint
{
	protected $client;
	public function __construct()
	{
		$this->client = new SnapyClient(
			env('ENDPOINT_URL'), env('ENDPOINT_USER'), env('ENDPOINT_SEC')
		);
	}

	public function endpoint()
	{
		return $this->client;
	}
}
