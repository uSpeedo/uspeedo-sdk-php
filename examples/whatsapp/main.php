<?php

require_once '../../vendor/autoload.php';

use USpeedo\WhatsApp\WhatsAppClient;
use USpeedo\WhatsApp\Apis\GetAccountPhoneListRequest;
use USpeedo\Core\Exception\USpeedoException;

/**
 * example
 *
 * @throws USpeedoException
 */
function main()
{
    // Build client
    $client = new WhatsAppClient([
        "publicKey" => getenv("USPEEDO_PUBLIC_KEY"),
        "privateKey" => getenv("USPEEDO_PRIVATE_KEY"),
    ]);

    // Get Account Phone List
    $req = new GetAccountPhoneListRequest();

    $resp = $client->getAccountPhoneList($req);
    $data = $resp->getData();

    // Check if phone list is not empty
    if (!empty($data->getPhoneList())) {
        $phone = $data->getPhoneList()[0];
        echo "result is " . $phone->getNumber() . "\n";
    } else {
        echo "Phone list is empty.\n";
    }
}

try {
    main();
} catch (USpeedoException $e) {
    echo "Caught USpeedoException: " . $e->getMessage() . "\n";
}
