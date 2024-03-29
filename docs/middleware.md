# Request middleware

Learn how to intercept requests initiated by the SDK and add additional logic in unity.

USpeedo SDK provides request middleware features for requests.

This feature allows adding custom logic during the request/response life cycle.

For example, Client-level middleware can intercept parameter/response dictionaries:

```php
use USpeedo\Core\Middleware\Context;
use USpeedo\Core\Middleware\Middleware;
use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;

class LogMiddleware extends Middleware
{
    public function handleRequest(Context $ctx): Request
    {
        $req = $ctx->getRequest();
        $logger = $ctx->getConfig()->getLogger();
        if ($logger != null) {
            $logger->info(sprintf("[request] %s", json_encode($req->toArray())));
        }
        return $req;
    }

    public function handleResponse(Context $ctx): Response
    {
        $resp = $ctx->getResponse();
        $logger = $ctx->getConfig()->getLogger();
        if ($logger != null) {
            $body = $resp->toArray();
            $logger->info(sprintf("[response: %s] %s", $resp->getRequestId(), json_encode($body)));
        }
        return $resp;
    }

    public function handleException(Context $ctx)
    {
        $e = $ctx->getException();
        $logger = $ctx->getConfig()->getLogger();
        if ($logger != null) {
            $logger->error(sprintf("[response: %s] %s Error: %s", $e->getRequestId(), $e->getType(), $e->getMessage()));
        }
    }
}
```
