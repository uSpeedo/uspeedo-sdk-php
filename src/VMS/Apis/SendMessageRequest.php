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

namespace USpeedo\VMS\Apis;

use USpeedo\Core\Request\Request;

class SendMessageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SendVMSMessage"]);
        $this->markRequired("AccountId");
        $this->markRequired("CalledNumber");
        $this->markRequired("TemplateId");
    }


    /**
     * AccountId: Account ID,Get accountId reference: https://uspeedo.com/docs/api_sdk/api/
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: Account ID,Get accountId reference: https://uspeedo.com/docs/api_sdk/api/
     *
     * @param int $accountId
     */
    public function setAccountId(int $accountId)
    {
        $this->set("AccountId", $accountId);
    }
    
    /**
     * CalledNumber: Called Phone Number
     *
     * @return string|null
     */
    public function getCalledNumber()
    {
        return $this->get("CalledNumber");
    }

    /**
     * CalledNumber: Called Phone Number
     *
     * @param string $calledNumber
     */
    public function setCalledNumber(string $calledNumber)
    {
        $this->set("CalledNumber", $calledNumber);
    }
    
    /**
     * TemplateId: Template id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: Template id
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId)
    {
        $this->set("TemplateId", $templateId);
    }
    
}






