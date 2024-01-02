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

namespace USpeedo\Asms\Models;

use USpeedo\Core\Response\Response;

class VariableAttr extends Response
{

    /**
     * Attribute: 模版参数对应的属性，如果没有属性，则为空
     *
     * @return string|null
     */
    public function getAttribute()
    {
        return $this->get("Attribute");
    }

    /**
     * Attribute: 模版参数对应的属性，如果没有属性，则为空
     *
     * @param string $attribute
     */
    public function setAttribute(string $attribute)
    {
        $this->set("Attribute", $attribute);
    }
    
    /**
     * Default: 属性不存在的时候的默认值
     *
     * @return string|null
     */
    public function getDefault()
    {
        return $this->get("Default");
    }

    /**
     * Default: 属性不存在的时候的默认值
     *
     * @param string $default
     */
    public function setDefault(string $default)
    {
        $this->set("Default", $default);
    }
    
    /**
     * Variable: 模版参数名称
     *
     * @return string|null
     */
    public function getVariable()
    {
        return $this->get("Variable");
    }

    /**
     * Variable: 模版参数名称
     *
     * @param string $variable
     */
    public function setVariable(string $variable)
    {
        $this->set("Variable", $variable);
    }
    
}






