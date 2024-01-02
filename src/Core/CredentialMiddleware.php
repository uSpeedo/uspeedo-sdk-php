<?php


namespace USpeedo\Core;

use USpeedo\Core\Middleware\Context;
use USpeedo\Core\Middleware\Middleware;
use USpeedo\Core\Request\Request;

class CredentialMiddleware extends Middleware
{
    public function handleRequest(Context $ctx)
    {
        $req = $ctx->getRequest();
        $cred = $ctx->getCredential();
        return new Request($cred->sign($req->toArray()));
    }
}
