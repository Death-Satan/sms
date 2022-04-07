<?php

namespace DeathSatan\Sms\Exceptions;

use Throwable;

class SmsException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}