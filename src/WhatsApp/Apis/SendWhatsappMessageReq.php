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

class SendWhatsappMessageReq extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SendWhatsappMessage"]);
        $this->markRequired("Type");
        $this->markRequired("BusinessPhone");
        $this->markRequired("Content");
        $this->markRequired("To");
    }


    /**
     * Type: message type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: message type
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }
    
    /**
     * BusinessPhone: send phone number
     *
     * @return string|null
     */
    public function getBusinessPhone()
    {
        return $this->get("BusinessPhone");
    }

    /**
     * BusinessPhone: send phone number
     *
     * @param string $businessPhone
     */
    public function setBusinessPhone(string $businessPhone)
    {
        $this->set("BusinessPhone", $businessPhone);
    }
    
    /**
     * Content: message content in json
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->get("Content");
    }

    /**
     * Content: message content in json
     *
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->set("Content", $content);
    }
    
    /**
     * To: target phone number
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->get("To");
    }

    /**
     * To: target phone number
     *
     * @param string $to
     */
    public function setTo(string $to)
    {
        $this->set("To", $to);
    }
    
}






