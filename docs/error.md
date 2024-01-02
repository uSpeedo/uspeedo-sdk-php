# Error handling

Learn how to handle different types of SDK exceptions, including parameter errors, business exceptions where RetCode is not 0, etc.

```php
use USpeedo\UHost\Apis\DescribeImageRequest;
use USpeedo\UHost\UHostClient;
use USpeedo\Core\Exception\USpeedoException;

$client = new UHostClient([
    "publicKey" => getenv("USPEEDO_PUBLIC_KEY"),
    "privateKey" => getenv("USPEEDO_PRIVATE_KEY"),
]);

try {
    $req = new DescribeImageRequest();
    $resp = $client->describeImage($req);
} catch (USpeedoException $e) {
    if ($e->getType() == USpeedoException::EXC_TYPE_RET_CODE) {
        echo $e->getCode();
        echo $e->getRequestId();
    }
    echo $e->getMessage();
}
```
