<?php

require_once '../../vendor/autoload.php';

use USpeedo\Email\EmailClient;
use USpeedo\Email\Apis\SendEmailTemplateReq;
use USpeedo\Email\Models\TargetEmail;
use USpeedo\Core\Exception\USpeedoException;

/**
 * examples
 *
 * @throws USpeedoException
 */
function main()
{
    // Build client
    $client = new EmailClient([
        "publicKey" => getenv("USPEEDO_PUBLIC_KEY"),
        "privateKey" => getenv("USPEEDO_PRIVATE_KEY"),
    ]);

    // Get Account Phone List
    $req = new SendEmailTemplateReq();
    $req->setTemplateId("UETXXXXXXXXXXX");
    $req->setSendEmail("examples@examples.com");

    // Create TargetEmail objects
    $email1 = new TargetEmail();
    $email1->setEmailAddress("example1@examples.com");
    $email1->setTemplateVariableParams(["variableName{##}variableValue", "variableName{##}variableValue"]);

    $email2 = new TargetEmail();
    $email2->setEmailAddress("example2@examples.com");
    $email2->setTemplateVariableParams(["variableName{##}variableValue", "variableName{##}variableValue"]);

    // Add TargetEmail objects to an array
    $emailContent = [$email1, $email2];
    // Set email content
    $req->setEmailContent($emailContent);

    $resp = $client->sendEmailTemplate($req);
    $session = $resp->getSessionNo();
    echo "result is " . $session . "\n";
}

try {
    main();
} catch (USpeedoException $e) {
    echo "Caught USpeedoException: " . $e->getMessage() . "\n";
}
