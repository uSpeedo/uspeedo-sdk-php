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

class GetAccountPhoneListResItem extends Response
{

    /**
     * Country: 
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->get("Country");
    }

    /**
     * Country: 
     *
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->set("Country", $country);
    }
    
    /**
     * DisplayName: 
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->get("DisplayName");
    }

    /**
     * DisplayName: 
     *
     * @param string $displayName
     */
    public function setDisplayName(string $displayName)
    {
        $this->set("DisplayName", $displayName);
    }
    
    /**
     * MessagingLimit: 
     *
     * @return string|null
     */
    public function getMessagingLimit()
    {
        return $this->get("MessagingLimit");
    }

    /**
     * MessagingLimit: 
     *
     * @param string $messagingLimit
     */
    public function setMessagingLimit(string $messagingLimit)
    {
        $this->set("MessagingLimit", $messagingLimit);
    }
    
    /**
     * Number: 
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->get("Number");
    }

    /**
     * Number: 
     *
     * @param string $number
     */
    public function setNumber(string $number)
    {
        $this->set("Number", $number);
    }
    
    /**
     * QualityRating: 
     *
     * @return string|null
     */
    public function getQualityRating()
    {
        return $this->get("QualityRating");
    }

    /**
     * QualityRating: 
     *
     * @param string $qualityRating
     */
    public function setQualityRating(string $qualityRating)
    {
        $this->set("QualityRating", $qualityRating);
    }
    
    /**
     * Status: 
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->set("Status", $status);
    }
    
}






