<?php

namespace USpeedo\Core\Response;

interface ResponseInterface
{
    /**
     * Get an array representation of response.
     *
     * @return array
     */
    public function toArray();
}
