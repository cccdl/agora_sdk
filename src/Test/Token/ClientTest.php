<?php

namespace cccdl\agora_sdk\Test\Token;

use cccdl\agora_sdk\Exception\cccdlException;
use cccdl\agora_sdk\Test\TestAccount;
use cccdl\agora_sdk\Token\RtcTokenBuilder;
use PHPUnit\Framework\TestCase;

require '../../../vendor/autoload.php';

class ClientTest extends TestCase
{
    /**
     * @throws cccdlException
     */
    public function test()
    {
        //频道名称
        $channelName = "7d72365eb983485397e3e3f9d460bdda";
        //用户id
        $uid = 2882341273;
        //过期时间秒数
        $expireTime = 7200;
        $config = TestAccount::getTestAccount();
        $RtcTokenBuilder = new RtcTokenBuilder($config);
        $token = $RtcTokenBuilder->buildTokenWithUid($channelName, $uid, RtcTokenBuilder::ROLE_PUBLISHER, $expireTime);
        $this->assertIsString($token);
        echo 'Token with int uid: ' . $token . PHP_EOL;

    }


}
