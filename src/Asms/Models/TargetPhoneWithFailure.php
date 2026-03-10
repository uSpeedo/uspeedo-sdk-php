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

class TargetPhoneWithFailure extends Response
{

    /**
     * Invalid: 
     *
     * @return boolean|null
     */
    public function getInvalid()
    {
        return $this->get("Invalid");
    }

    /**
     * Invalid: 
     *
     * @param boolean $invalid
     */
    public function setInvalid(bool $invalid)
    {
        $this->set("Invalid", $invalid);
    }
    
    /**
     * Phone: 
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->get("Phone");
    }

    /**
     * Phone: 
     *
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->set("Phone", $phone);
    }
    
    /**
     * TemplateParams: 
     *
     * @return string[]|null
     */
    public function getTemplateParams()
    {
        return $this->get("TemplateParams");
    }

    /**
     * TemplateParams: 
     *
     * @param string[] $templateParams
     */
    public function setTemplateParams(array $templateParams)
    {
        $this->set("TemplateParams", $templateParams);
    }
    
    /**
     * UserId: 
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->get("UserId");
    }

    /**
     * UserId: 
     *
     * @param string $userId
     */
    public function setUserId(string $userId)
    {
        $this->set("UserId", $userId);
    }
    
    /**
     * ExtendCode: 
     *
     * @return string|null
     */
    public function getExtendCode()
    {
        return $this->get("ExtendCode");
    }

    /**
     * ExtendCode: 
     *
     * @param string $extendCode
     */
    public function setExtendCode(string $extendCode)
    {
        $this->set("ExtendCode", $extendCode);
    }
    
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
    
}






