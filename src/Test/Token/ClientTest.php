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
        $config = TestAccount::getTestAccount();
        $RtcTokenBuilder = new RtcTokenBuilder($config);
        $token = $RtcTokenBuilder->buildTokenWithUid('moyou2', 8, 7200);
        $this->assertIsString($token);
        echo 'Token with int uid: ' . $token . PHP_EOL;
    }


}
