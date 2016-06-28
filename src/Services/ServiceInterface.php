<?php

namespace DeveloperDynamo\PushNotification\Services;

use DeveloperDynamo\PushNotification\Contracts\Payload;

interface ServiceInterface
{	
	public function getPlatform();
	public function send(Payload $payload, $tokens);
}