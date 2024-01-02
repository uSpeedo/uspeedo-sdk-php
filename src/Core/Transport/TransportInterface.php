<?php


namespace USpeedo\Core\Transport;

use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;

interface TransportInterface
{
    public function invoke(Request $req);
}
