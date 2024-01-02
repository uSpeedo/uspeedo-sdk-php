# Quick start

## Install

Install using `composer` (recommended):

```bash
$ composer require uspeedo-sdks/uspeedo-sdk-php
```

## First time use

Currently, the SDK uses PublicKey/PrivateKey as the only authentication method. The public and private keys can be obtained from the following channels:

- [Account Key Management](https://console.uspeedo.com/dashboard)

A simple example is provided below:

```php
use USpeedo\UHost\UHostClient;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\UHost\Apis\CreateUHostInstanceRequest;
use USpeedo\UHost\Params\CreateUHostInstanceParamDisks;

$client = new UHostClient([
    "publicKey" => getenv("USPEEDO_PUBLIC_KEY"),
    "privateKey" => getenv("USPEEDO_PRIVATE_KEY"),
]);

// Create Instance
try {
    $req = new CreateUHostInstanceRequest();
    $req->setName("sdk-php-example");
    $req->setImageId("...");
    $req->setLoginMode("Password");
    $req->setPassword(base64_encode("USpeedo1234!"));
    $req->setCPU(1);
    $req->setMemory(1024);

    $disk = new CreateUHostInstanceParamDisks();
    $disk->setSize(40);
    $disk->setType("CLOUD_SSD");
    $disk->setIsBoot("True");

    $req->setDisks([$disk]);

    $resp = $client->createUHostInstance($req);
} catch (USpeedoException $e) {
    throw $e;
}
$id = $resp->getUHostIds()[0];
```

Every api call in the SDK has detailed annotation documentation.
You can jump to the specific method through Editor/IDE to view it (you can
also [view the interface document](https://docs.uspeedo.com/)),
And continue to explore the usage of the SDK based on the IDE's auto-completion and error messages.

If you need to know the usage techniques mentioned but not fully covered by this code, please refer to:

- [Common configuration](configure.md), learn how to configure the SDK, such as logs, retries, service access
  endpoints (public cloud, private cloud), etc.
- [Error Handling](error.md), learn how to handle different types of SDK exceptions, including parameter errors,
  business exceptions where RetCode is not 0, etc.
- [Request Middleware](middleware.md), learn how to intercept requests initiated by the SDK and add additional logic
  uniformly.
- [Generalized Call](generic.md), how to call APIs that are not yet supported by the SDK (the use of such APIs is not
  recommended because there is no compatibility guarantee)
