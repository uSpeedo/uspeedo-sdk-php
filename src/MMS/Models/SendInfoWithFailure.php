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

class SendInfoWithFailure extends Response
{

    /**
     * FailureDetails: 
     *
     * @return string|null
     */
    public function getFailureDetails()
    {
        return $this->get("FailureDetails");
    }

    /**
     * FailureDetails: 
     *
     * @param string $failureDetails
     */
    public function setFailureDetails(string $failureDetails)
    {
        $this->set("FailureDetails", $failureDetails);
    }
    
    /**
     * SenderId: Sender Name is basically used to identify the sender of the bulk SMS message.
     *
     * @return string|null
     */
    public function getSenderId()
    {
        return $this->get("SenderId");
    }

    /**
     * SenderId: Sender Name is basically used to identify the sender of the bulk SMS message.
     *
     * @param string $senderId
     */
    public function setSenderId(string $senderId)
    {
        $this->set("SenderId", $senderId);
    }
    
    /**
     * Target: 
     *
     * @return TargetPhoneWithFailure[]|null
     */
    public function getTarget()
    {
        $items = $this->get("Target");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TargetPhoneWithFailure($item));
        }
        return $result;
    }

    /**
     * Target: 
     *
     * @param TargetPhoneWithFailure[] $target
     */
    public function setTarget(array $target)
    {
        $result = [];
        foreach ($target as $i => $item) {
            array_push($result, $item->getAll());
        }
        $this->set("Target", $result);
    }
    
    /**
     * TemplateId: Template ID
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: Template ID
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId)
    {
        $this->set("TemplateId", $templateId);
    }
    
}






