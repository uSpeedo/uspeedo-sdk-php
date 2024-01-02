<?php


namespace USpeedo\Core\Middleware;

use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;

abstract class Middleware implements MiddlewareInterface
{
    public function handleRequest(Context $ctx)
    {
        return $ctx->getRequest();
    }

    public function handleResponse(Context $ctx)
    {
        return $ctx->getResponse();
    }

    public function handleException(Context $ctx)
    {
    }
}
