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

class TemplateComponentExample extends Response
{

    /**
     * BodyText: 
     *
     * @return string[][]|null
     */
    public function getBodyText()
    {
        return $this->get("BodyText");
    }

    /**
     * BodyText: 
     *
     * @param string[][] $bodyText
     */
    public function setBodyText(array $bodyText)
    {
        $this->set("BodyText", $bodyText);
    }
    
    /**
     * HeaderHandle: 
     *
     * @return string[]|null
     */
    public function getHeaderHandle()
    {
        return $this->get("HeaderHandle");
    }

    /**
     * HeaderHandle: 
     *
     * @param string[] $headerHandle
     */
    public function setHeaderHandle(array $headerHandle)
    {
        $this->set("HeaderHandle", $headerHandle);
    }
    
    /**
     * HeaderText: 
     *
     * @return string[]|null
     */
    public function getHeaderText()
    {
        return $this->get("HeaderText");
    }

    /**
     * HeaderText: 
     *
     * @param string[] $headerText
     */
    public function setHeaderText(array $headerText)
    {
        $this->set("HeaderText", $headerText);
    }
    
}






