<?php

namespace DeathSatan\Sms\Convention\Sms;

interface Sign
{
    /**
     * 申请短信签名
     * @param array $params
     */
    public function add_sign(array $params);

    /**
     * 删除短信签名
     * @param array $params
     */
    public function del_sign(array $params);

    /**
     * 修改未审核通过的短信签名
     * @param array $params
     */
    public function modify_sign(array $params);

    /**
     * 查询短信签名列表
     * @param array $params
     */
    public function sign_list(array $params);

    /**
     * 查询短信签名申请状态
     * @param array $params
     */
    public function sign_status(array $params);
}