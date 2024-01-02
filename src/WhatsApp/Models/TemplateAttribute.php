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

class TemplateAttribute extends Response
{

    /**
     * NamedVar: named variable map with 1、2
     *
     * @return string[]|null
     */
    public function getNamedVar()
    {
        return $this->get("NamedVar");
    }

    /**
     * NamedVar: named variable map with 1、2
     *
     * @param string[] $namedVar
     */
    public function setNamedVar(array $namedVar)
    {
        $this->set("NamedVar", $namedVar);
    }
    
    /**
     * Type: component item type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: component item type
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }
    
}






