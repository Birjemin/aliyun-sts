<?php
/**
 *
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2019/10/23
 * Time: 18:19
 */

return [
    /**
     * @link https://help.aliyun.com/document_detail/100624.html
     * AccessKeyId、AccessKeySecret：子账号AK信息
     */
    'AccessKeyId'     => '',
    'AccessKeySecret' => '',

    /**
     * @link https://help.aliyun.com/document_detail/66053.html
     * regionId和endpoint
     */
    'regionId'        => 'cn-hangzhou',
    'endpoint'        => 'sts.cn-hangzhou.aliyuncs.com',

    /**
     * @link https://help.aliyun.com/document_detail/100624.html
     * 创建角色(需要扮演的角色ID)
     */
    'roleArn'         => 'acs:********',

    /**
     * @link https://help.aliyun.com/document_detail/100624.html
     * 设置临时凭证的有效期，单位是s，最小为900，最大为3600
     */
    'expiration'      => '3600',  // 令牌过期时间

    /**
     * @link https://help.aliyun.com/document_detail/100624.html
     * RoleSessionName即临时身份的会话名称，用于区分不同的临时身份
     */
    'clientName'      => 'client_name',

    /**
     * @link https://help.aliyun.com/document_detail/100624.html
     * 创建权限策略(在扮演角色的时候额外添加的权限限制)
     */
    'policy'          => [
        'Statement' => [
            [
                'Action'   => "*",
                'Effect'   => 'Allow',
                'Resource' => [
                    "acs:oss:*:*:default",
                ],
            ],
        ],
        "Version"   => "1",
    ],
];

