<?php

namespace DeathSatan\Sms;

use DeathSatan\Sms\Exceptions\SmsException;

class Manage
{


    public function __construct(protected array $config)
    {
        $this->init();
    }

    /**
     * @throws SmsException
     */
    protected function init()
    {
        if (!array_key_exists($this->getDefault(),$this->getChannels()))
        {
            throw new SmsException('程序中设置的['.$this->getDefault().'] 驱动程序不存在,请重新配置程序');
        }

    }

    protected function getDefault():string
    {
        return $this->config['default'];
    }

    protected function getChannels():array
    {
        return $this->config['channels'];
    }

    protected function getHttpOption():array
    {
        return $this->config['http'];
    }

}