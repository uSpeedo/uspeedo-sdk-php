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

class GetTemplatesCursors extends Response
{

    /**
     * After: 
     *
     * @return string|null
     */
    public function getAfter()
    {
        return $this->get("After");
    }

    /**
     * After: 
     *
     * @param string $after
     */
    public function setAfter(string $after)
    {
        $this->set("After", $after);
    }
    
    /**
     * Before: 
     *
     * @return string|null
     */
    public function getBefore()
    {
        return $this->get("Before");
    }

    /**
     * Before: 
     *
     * @param string $before
     */
    public function setBefore(string $before)
    {
        $this->set("Before", $before);
    }
    
}






