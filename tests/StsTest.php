<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2019/10/23
 * Time: 20:57
 */

namespace Birjemin\AliyunSts\Test;


use Birjemin\AliyunSts\Sts;

/**
 * Class StsTest
 * @package Birjemin\AliyunSts\Test
 */
class StsTest extends \TestCase
{
    /**
     * @throws \JimChen\AliyunCore\Exception\ClientException
     * @throws \JimChen\AliyunCore\Exception\ServerException
     */
    public function testGetToken()
    {
        $sts = (new Sts())->getToken();
        $this->assertObjectHasAttribute('Credentials', $sts);
    }
}