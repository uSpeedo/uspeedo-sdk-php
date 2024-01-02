# Generalized call

How to call APIs not yet supported by the SDK? Generalized calling can be used.

**NOTE** If there is no reason to use it, it is not recommended to use the generalized method to call the API, because you cannot enjoy the compatibility guarantee provided by OpenAPI.

## Calling method

```php
use USpeedo\Core\Client;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\Core\Request\Request;

$client = new Client([
    "publicKey" => getenv("USPEEDO_PUBLIC_KEY"),
    "privateKey" => getenv("USPEEDO_PRIVATE_KEY"),
]);

try {
    $client->invoke(new Request([
        "Action" => "GetImage",
        "ImageType" => "Base",
        "OsType" => "Linux",
    ]));
} catch (USpeedoException $e) {
    if ($e->getType() == USpeedoException::EXC_TYPE_RET_CODE) {
        echo $e->getCode();
        echo $e->getRequestId();
    }
    echo $e->getMessage();
}
```
