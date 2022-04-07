<?php

namespace DeathSatan\Sms\Convention\Sms;

interface Template
{
    /**
     * 申请短信模板
     * @param array $params
     */
    public function add_template(array $params);

    /**
     * 删除短信模板
     * @param array $params
     */
    public function del_template(array $params);

    /**
     * 修改未审核通过的短信模板
     * @param array $params
     */
    public function modify_template(array $params);

    /**
     * 查询短信模板列表
     * @param array $params
     */
    public function template_list(array $params);

    /**
     * 查询短信模板的审核状态
     * @param array $params
     */
    public function template_status(array $params);
}