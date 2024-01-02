<?php

namespace USpeedo\Core\Request;

interface RequestInterface
{
    /**
     * Get an array representation of request.
     *
     * @return array
     */
    public function toArray();
}
