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

class CreateUSMSTemplateReq extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUSMSTemplate"]);
        $this->markRequired("Template");
        $this->markRequired("TemplateName");
        $this->markRequired("Purpose");
    }


    /**
     * Remark: 
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
    
    /**
     * Template: 
     *
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->get("Template");
    }

    /**
     * Template: 
     *
     * @param string $template
     */
    public function setTemplate(string $template)
    {
        $this->set("Template", $template);
    }
    
    /**
     * TemplateName: 
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->get("TemplateName");
    }

    /**
     * TemplateName: 
     *
     * @param string $templateName
     */
    public function setTemplateName(string $templateName)
    {
        $this->set("TemplateName", $templateName);
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
    
    /**
     * Purpose: Verification code: 1 , Notify : 2, sale : 3
     *
     * @return int|null
     */
    public function getPurpose()
    {
        return $this->get("Purpose");
    }

    /**
     * Purpose: Verification code: 1 , Notify : 2, sale : 3
     *
     * @param int $purpose
     */
    public function setPurpose(int $purpose)
    {
        $this->set("Purpose", $purpose);
    }
    
}






