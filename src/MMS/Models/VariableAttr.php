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

namespace USpeedo\MMS\Models;

use USpeedo\Core\Response\Response;

class VariableAttr extends Response
{

    /**
     * Default: default value when attribute does not exist
     *
     * @return string|null
     */
    public function getDefault()
    {
        return $this->get("Default");
    }

    /**
     * Default: default value when attribute does not exist
     *
     * @param string $default
     */
    public function setDefault(string $default)
    {
        $this->set("Default", $default);
    }
    
    /**
     * Variable: template parameter name
     *
     * @return string|null
     */
    public function getVariable()
    {
        return $this->get("Variable");
    }

    /**
     * Variable: template parameter name
     *
     * @param string $variable
     */
    public function setVariable(string $variable)
    {
        $this->set("Variable", $variable);
    }
    
    /**
     * Attribute: the attribute corresponding to the template parameter, if there is no attribute, it is empty
     *
     * @return string|null
     */
    public function getAttribute()
    {
        return $this->get("Attribute");
    }

    /**
     * Attribute: the attribute corresponding to the template parameter, if there is no attribute, it is empty
     *
     * @param string $attribute
     */
    public function setAttribute(string $attribute)
    {
        $this->set("Attribute", $attribute);
    }
    
}






