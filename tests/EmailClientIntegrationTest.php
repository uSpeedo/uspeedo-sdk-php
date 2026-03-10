<?php

namespace USpeedo\Tests;

use PHPUnit\Framework\TestCase;
use USpeedo\Email\Apis\SendEmailTemplateReq;
use USpeedo\Email\EmailClient;
use USpeedo\Email\Models\TargetEmail;

/**
 * Email integration test
 *
 * 1. Serialization test: verify encode behavior of optional Subject and Abstract fields
 * 2. Real API call: requires USPEEDO_PUBLIC_KEY and USPEEDO_PRIVATE_KEY env vars, otherwise skipped
 */
class EmailClientIntegrationTest extends TestCase
{
    private const TEMPLATE_ID = "UETXXXXXXXXXXX";
    private const SEND_EMAIL = "examples@examples.com";

    private function buildMinimalRequest(): SendEmailTemplateReq
    {
        $req = new SendEmailTemplateReq();
        $req->setTemplateId(self::TEMPLATE_ID);
        $req->setSendEmail(self::SEND_EMAIL);

        $target = new TargetEmail();
        $target->setEmailAddress("example@examples.com");
        $target->setTemplateVariableParams(["variableName{##}variableValue"]);

        $req->setEmailContent([$target]);
        return $req;
    }

    public function testSendEmailTemplateReqEncodeWithoutOptionalFields(): void
    {
        $req = $this->buildMinimalRequest();
        $encoded = $req->toArray();

        $this->assertArrayHasKey("TemplateId", $encoded);
        $this->assertArrayHasKey("SendEmail", $encoded);
        $this->assertArrayHasKey("EmailContent", $encoded);
        $this->assertArrayNotHasKey("Subject", $encoded);
        $this->assertArrayNotHasKey("Abstract", $encoded);
    }

    public function testSendEmailTemplateReqEncodeWithOptionalFields(): void
    {
        $req = $this->buildMinimalRequest();
        $req->setSubject("Custom email subject");
        $req->setAbstract("Email abstract content");

        $encoded = $req->toArray();

        $this->assertEquals("Custom email subject", $encoded["Subject"]);
        $this->assertEquals("Email abstract content", $encoded["Abstract"]);
    }

    public function testSendEmailTemplateIntegration(): void
    {
        $publicKey = getenv("USPEEDO_PUBLIC_KEY");
        $privateKey = getenv("USPEEDO_PRIVATE_KEY");

        if ($publicKey === false || $publicKey === "" || $privateKey === false || $privateKey === "") {
            $this->markTestSkipped("Skip: USPEEDO_PUBLIC_KEY or USPEEDO_PRIVATE_KEY not set");
        }

        $client = new EmailClient([
            "publicKey" => $publicKey,
            "privateKey" => $privateKey,
        ]);

        $req = $this->buildMinimalRequest();
        $req->setSubject("Integration test subject");
        $req->setAbstract("Integration test abstract");

        $resp = $client->sendEmailTemplate($req);

        $this->assertNotNull($resp);
    }

}
