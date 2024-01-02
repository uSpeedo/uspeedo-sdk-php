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

namespace USpeedo\Email\Apis;

use USpeedo\Core\Request\Request;
use USpeedo\Email\Models\TargetEmail;

class SendEmailTemplateReq extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SendEmailTemplate"]);
        $this->markRequired("EmailContent");
        $this->markRequired("SendEmail");
        $this->markRequired("TemplateId");
    }


    /**
     * AccountId: account id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: account id
     *
     * @param int $accountId
     */
    public function setAccountId(int $accountId)
    {
        $this->set("AccountId", $accountId);
    }
    
    /**
     * EmailContent: 
     *
     * @return TargetEmail[]|null
     */
    public function getEmailContent()
    {
        $items = $this->get("EmailContent");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TargetEmail($item));
        }
        return $result;
    }

    /**
     * EmailContent: 
     *
     * @param TargetEmail[] $emailContent
     */
    public function setEmailContent(array $emailContent)
    {
        $result = [];
        foreach ($emailContent as $i => $item) {
            array_push($result, $item->getAll());
        }
        $this->set("EmailContent", $result);
    }
    
    /**
     * SendEmail: 
     *
     * @return string|null
     */
    public function getSendEmail()
    {
        return $this->get("SendEmail");
    }

    /**
     * SendEmail: 
     *
     * @param string $sendEmail
     */
    public function setSendEmail(string $sendEmail)
    {
        $this->set("SendEmail", $sendEmail);
    }
    
    /**
     * TemplateId: 
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId)
    {
        $this->set("TemplateId", $templateId);
    }
    
}






