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

namespace USpeedo\WhatsApp\Apis;

use USpeedo\Core\Request\Request;

class DeleteTemplateReq extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteTemplate"]);
        $this->markRequired("BusinessPhone");
        $this->markRequired("Name");
    }


    /**
     * BusinessPhone: 
     *
     * @return string|null
     */
    public function getBusinessPhone()
    {
        return $this->get("BusinessPhone");
    }

    /**
     * BusinessPhone: 
     *
     * @param string $businessPhone
     */
    public function setBusinessPhone(string $businessPhone)
    {
        $this->set("BusinessPhone", $businessPhone);
    }
    
    /**
     * Name: 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    
}






