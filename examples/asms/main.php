<?php

require_once '../../vendor/autoload.php';

use USpeedo\Asms\AsmsClient;
use USpeedo\Asms\Apis\CreateUSMSTemplateReq;
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
}

try {
    main();
} catch (USpeedoException $e) {
    echo "Caught USpeedoException: " . $e->getMessage() . "\n";
}
