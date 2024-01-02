<?php

namespace USpeedo\Tests;

use PHPUnit\Framework\TestCase;
use USpeedo\Core\Credential\Credential;

/**
 * Check that credential package is worked.
 */
class CredentialTest extends TestCase
{
    /**
     * Check, that signature algorithm is correct for example
     */
    public function testExample()
    {
        $cred = new Credential([
            "publicKey" => "0dca1d51a9b3113c6f562acb0f813bce",
            "privateKey" => "NTk1Mzk0MAItOWI0My10MGM4LTg0NmMMNDM0ZGM5Y2ZkMmNk",
        ]);

        $args = [
            "Action" => "CreateUSMSTemplate",
            "Template" => "your code is {1}",
            "TemplateName" => "demo",
            "AccountId" => 60000011,
            "Purpose" => 1,
        ];

        $this->assertEquals(
            '11a0430ae6f1a4dc0c656e64dfc1886b0ac4b63a',
            $cred->verifyAc($args)
        );
    }
}
