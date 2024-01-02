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

class TemplateComponentButton extends Response
{

    /**
     * PhoneNumber: 
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->get("PhoneNumber");
    }

    /**
     * PhoneNumber: 
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->set("PhoneNumber", $phoneNumber);
    }
    
    /**
     * Text: 
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->get("Text");
    }

    /**
     * Text: 
     *
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->set("Text", $text);
    }
    
    /**
     * Type: 
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }
    
    /**
     * URL: 
     *
     * @return string|null
     */
    public function getURL()
    {
        return $this->get("URL");
    }

    /**
     * URL: 
     *
     * @param string $url
     */
    public function setURL(string $url)
    {
        $this->set("URL", $url);
    }
    
    /**
     * Example: 
     *
     * @return string[]|null
     */
    public function getExample()
    {
        return $this->get("Example");
    }

    /**
     * Example: 
     *
     * @param string[] $example
     */
    public function setExample(array $example)
    {
        $this->set("Example", $example);
    }
    
}






