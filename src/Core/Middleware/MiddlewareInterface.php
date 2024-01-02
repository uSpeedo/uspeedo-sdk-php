<?php

namespace USpeedo\Core\Middleware;

use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;

interface MiddlewareInterface
{
    public function handleRequest(Context $ctx);

    public function handleResponse(Context $ctx);

    public function handleException(Context $ctx);
}
