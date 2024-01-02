<?php

/**
 * Copyright 2024 USpeedo Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace USpeedo\WhatsApp\Models;

use USpeedo\Core\Response\Response;

class GetTemplatesPaging extends Response
{

    /**
     * Cursors: 
     *
     * @return GetTemplatesCursors|null
     */
    public function getCursors()
    {
        return new GetTemplatesCursors($this->get("Cursors"));
    }

    /**
     * Cursors: 
     *
     * @param GetTemplatesCursors $cursors
     */
    public function setCursors(GetTemplatesCursors $cursors)
    {
        $this->set("Cursors", $cursors->getAll());
    }
    
    /**
     * Next: 
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->get("Next");
    }

    /**
     * Next: 
     *
     * @param string $next
     */
    public function setNext(string $next)
    {
        $this->set("Next", $next);
    }
    
    /**
     * Previous: 
     *
     * @return string|null
     */
    public function getPrevious()
    {
        return $this->get("Previous");
    }

    /**
     * Previous: 
     *
     * @param string $previous
     */
    public function setPrevious(string $previous)
    {
        $this->set("Previous", $previous);
    }
    
}






