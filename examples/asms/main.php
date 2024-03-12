<?php

require_once '../../vendor/autoload.php';

use USpeedo\Asms\AsmsClient;
use USpeedo\Asms\Apis\CreateUSMSTemplateReq;
use USpeedo\Asms\Apis\SendBatchUSMSMessageReq;
use USpeedo\Asms\Models\SendInfo;
use USpeedo\Asms\Models\TargetPhone;
use USpeedo\Core\Logger\DisabledLogger;
use USpeedo\Core\Exception\USpeedoException;

/**
 * example
 *
 * @throws USpeedoException
 */
function main()
{
    // Build client
    $client = new AsmsClient([
        "publicKey" => getenv("USPEEDO_PUBLIC_KEY"),
        "privateKey" => getenv("USPEEDO_PRIVATE_KEY"),
        // Optional: if you do not want log output
        "logger" => new DisabledLogger(),
    ]);

    // Create Template
    $req = new CreateUSMSTemplateReq();
    $req->setPurpose(1);
    $req->setRemark("this is a test template");
    $req->setTemplateName("test template");
    $req->setTemplate("Your verification code is {1}");

    $resp = $client->createUSMSTemplate($req);
    $data = $resp->getTemplateId();
    echo "result is " . $data . "\n";

    // Send SMS
    $req = new SendBatchUSMSMessageReq();
    $task = new SendInfo();
    $task->setTemplateId("UTAxxxxxxx");
    $phone = new TargetPhone();
    $phone->setPhone("(1)1111111");
    // Optional: If the template contains variables, you need to pass the corresponding number of parameters
    $phone->setTemplateParams(["xxxx"]);
    $task->setTarget([$phone]);
    $req->setTaskContent([$task]);

    // Optional: If you need to specify one of multiple
    $req->setAccountId(1111111);
    $resp = $client->sendBatchUSMSMessage($req);
    // This is just an example. Normal business needs to be carried out based on try catch and return value RetCode.
    $data = $resp->getAll();
    echo "result is " . $data . "\n";
}

try {
    main();
} catch (USpeedoException $e) {
    // If RetCode is non-0, special handling is required
    echo "Caught USpeedoException: RetCode: " . $e->getCode() . " Message: " . $e->getMessage() . "\n";
}
