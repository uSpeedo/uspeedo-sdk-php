<?php

namespace USpeedo\Core;

use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;

interface ClientInterface
{
    public function invoke(Request $req);
}
