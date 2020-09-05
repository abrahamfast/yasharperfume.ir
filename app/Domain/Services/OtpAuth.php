<?php

namespace Acme\Service;

class OtpAuth
{
	protected  $client;

	function __construct()
	{
		$this->client = new \Kavenegar\KavenegarApi(env('ENDPOINT_OTP_KEY'));
	}

	public function getClient()
	{
		return $this->client;
	}

	public static function sendOtp($receptor)
	{
		$token = rand(1357, 9457);
		(new self)->getClient()->VerifyLookup('09129796502', $token, "", "", env('ENDPOINT_OTP_TEMNAME'), 'sms');

		return $token;
	}
}
