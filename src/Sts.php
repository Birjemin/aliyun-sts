<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2019/10/23
 * Time: 18:40
 */

namespace Birjemin\AliyunSts;


use JimChen\AliyunCore\DefaultAcsClient;
use JimChen\AliyunCore\Exception\ClientException;
use JimChen\AliyunCore\Exception\ServerException;
use JimChen\AliyunCore\Profile\DefaultProfile;
use JimChen\AliyunSts\AssumeRoleRequest;

/**
 * @doc https://help.aliyun.com/document_detail/28792.html
 * Class Sts
 * @package Birjemin\AliyunSts
 */
class Sts
{
    private $accessKeyId;
    private $accessKeySecret;
    private $endpoint;
    private $regionId;
    private $roleArn;
    private $expiration;
    private $clientName;
    private $policy;

    /**
     * STSService constructor.
     */
    public function __construct()
    {
        $this->accessKeyId     = config('aliyun-sts.AccessKeyId');
        $this->accessKeySecret = config('aliyun-sts.AccessKeySecret');
        $this->endpoint        = config('aliyun-sts.endpoint');
        $this->regionId        = config('aliyun-sts.regionId');
        $this->roleArn         = config('aliyun-sts.roleArn');
        $this->expiration      = config('aliyun-sts.expiration');
        $this->clientName      = config('aliyun-sts.clientName');
        $this->policy          = json_encode(config('aliyun-sts.policy'));
    }

    /**
     * @param string $format
     *
     * @return mixed|\SimpleXMLElement
     * @throws ClientException
     * @throws ServerException
     */
    public function getToken($format = "JSON")
    {
        DefaultProfile::addEndpoint($this->regionId, $this->regionId, "Sts", $this->endpoint);
        $profile = DefaultProfile::getProfile($this->regionId, $this->accessKeyId, $this->accessKeySecret);
        $client  = new DefaultAcsClient($profile);
        $request = new AssumeRoleRequest();
        $request->setRoleSessionName($this->clientName);
        $request->setRoleArn($this->roleArn);
        $request->setPolicy($this->policy);
        $request->setDurationSeconds($this->expiration);
        $request->setAcceptFormat($format);
        return $client->getAcsResponse($request);
    }
}
