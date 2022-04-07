<?php

namespace DeathSatan\Sms\Exceptions;

use Throwable;

class SdkException extends \Exception
{
    /**
     *
     * @param string $message 错误信息
     * @param string[] $cause 解决方案和原因
     */
    public function __construct(string $message,array $cause = [])
    {
        $message = '错误信息为:['.$message.']   ';
        if (!empty($cause)){
            switch (count($cause)){
                case 0:
                    break;
                case 1:
                    $message .= '原因:['.$cause[0].']   ';
                    break;
                case 2:
                    $message .= '原因:['.$cause[0].']   ';
                    $message .= '解决方案为:['.$cause[1].']   ';
                    break;
            }
        }
        parent::__construct($message);
    }
}