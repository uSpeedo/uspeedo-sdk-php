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

namespace USpeedo\Asms\Apis;

use USpeedo\Core\Request\Request;

class QueryUSMSTemplateReq extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "QueryUSMSTemplate"]);
        $this->markRequired("TemplateId");
    }


    /**
     * TemplateId: Template ID
     *
     * @return string[]|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: Template ID
     *
     * @param string[] $templateId
     */
    public function setTemplateId(array $templateId)
    {
        $this->set("TemplateId", $templateId);
    }
    
    /**
     * AccountId: Account ID,Get accountId reference: https://docs.uspeedo.com/docs/sms/api/
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: Account ID,Get accountId reference: https://docs.uspeedo.com/docs/sms/api/
     *
     * @param int $accountId
     */
    public function setAccountId(int $accountId)
    {
        $this->set("AccountId", $accountId);
    }
    
}






