<?php


namespace USpeedo\Core;

use USpeedo\Core\Middleware\Context;
use USpeedo\Core\Middleware\Middleware;
use USpeedo\Core\Request\Request;

class DefaultsMiddleware extends Middleware
{
    /**
     * inject default values and validate it
     *
     * @throws Exception\USpeedoException
     */
    public function handleRequest(Context $ctx)
    {
        $req = $ctx->getRequest();
        $cfg = $ctx->getConfig();

        if ($req->loadMaxRetries() == 0) {
            $req->withMaxRetries($cfg->getMaxRetries());
        }

        if ($req->loadTimeout() == 0) {
            $req->withTimeout($cfg->getTimeout());
        }
        $req->validate();
        return $req;
    }
}
