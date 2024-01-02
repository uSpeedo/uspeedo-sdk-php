# General configuration

Learn how to configure the SDK such as logging, retries, service access endpoints (public cloud, private cloud), and more.

## Configuration item list

| Configuration | Type | Description |
| --------------- | ---- |---------------------------- -------------------------------------------------- -------------------------------------------------- -------------------------------------------------- -------------------------------------------------- -----|
| **baseUrl** | string | (optional) The access endpoint of the API service, the default is https://api.uspeedo.com/api |
| **userAgent** | string | (Optional) UserAgent is a property unique to the SDK client and is used to distinguish the version of the SDK used. For the definition of User-Agent, please refer to [MDN](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent). The user-defined UserAgent will be appended to the end of the SDK version number. For example, “MyAPP/0.10.1” -> “PHP/8.0.6 PHP-SDK/0.1.0 MyAPP/0.10.1” |
| **timeout** | int | (optional) request timeout, default 30s |
| **maxRetries** | int | (optional) Maximum number of retries. Default is 3 retries. Setting this value greater than 0 will automatically retry network and service availability issues, use exponential backoff retry intervals, and automatically skip interfaces for resource creation classes. |
| **logger** | LoggerInterface | (Optional) Custom Logger, please refer to [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3 -logger-interface.md) Definition of Logger Interface |
## Advanced configuration options

### Modify default log

Close log：

```php
use USpeedo\Core\Client;
use USpeedo\Core\Logger\DisabledLogger;

$client = new Client([
    // ...
    "logger" => new DisabledLogger(),
]);
```

### 访问专有云/渠道云或其它网关

```php
use USpeedo\Core\Client;

$client = new Client([
    // ...
    "base_url" => "foo.api.uspeedo.com/api", // Replace with a proprietary cloud gateway
]);
```
