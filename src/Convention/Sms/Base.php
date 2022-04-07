<?php

namespace DeathSatan\Sms\Convention\Sms;

use GuzzleHttp\Client;

interface Base
{
    public function __construct(array $config,Client $client);
}