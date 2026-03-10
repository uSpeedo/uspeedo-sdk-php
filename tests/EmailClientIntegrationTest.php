<?php

namespace USpeedo\Tests;

use PHPUnit\Framework\TestCase;
use USpeedo\Email\Apis\SendEmailTemplateReq;
use USpeedo\Email\EmailClient;
use USpeedo\Email\Models\TargetEmail;

/**
 * Email 集成测试
 *
 * 1. 序列化测试：验证 Subject、Abstract 可选字段的 encode 行为
 * 2. 真实 API 调用：需设置环境变量 USPEEDO_PUBLIC_KEY、USPEEDO_PRIVATE_KEY，否则跳过
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
        $req->setSubject("自定义邮件主题");
        $req->setAbstract("邮件摘要内容");

        $encoded = $req->toArray();

        $this->assertEquals("自定义邮件主题", $encoded["Subject"]);
        $this->assertEquals("邮件摘要内容", $encoded["Abstract"]);
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
        $req->setSubject("集成测试主题");
        $req->setAbstract("集成测试摘要");

        $resp = $client->sendEmailTemplate($req);

        $this->assertNotNull($resp);
    }

}
