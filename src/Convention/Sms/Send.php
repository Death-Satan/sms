<?php

namespace DeathSatan\Sms\Convention\Sms;

interface Send
{
    /**
     * 发送短信
     * @param array $params
     */
    public function send(array $params);

    /**
     * 批量发送短信
     * @param array $params
     */
    public function batch_send(array $params);

    /**
     * 查询短信发送详情
     * @param array $params
     */
    public function send_detail(array $params);

    /**
     * 查询短信发送统计信息
     * @param array $params
     */
    public function send_statistics(array $params);
}