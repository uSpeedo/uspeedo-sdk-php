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

class MessageSummary extends Response
{

    /**
     * BusinessPhone: 
     *
     * @return string|null
     */
    public function getBusinessPhone()
    {
        return $this->get("BusinessPhone");
    }

    /**
     * BusinessPhone: 
     *
     * @param string $businessPhone
     */
    public function setBusinessPhone(string $businessPhone)
    {
        $this->set("BusinessPhone", $businessPhone);
    }
    
    /**
     * ConvAmount: 
     *
     * @return int|null
     */
    public function getConvAmount()
    {
        return $this->get("ConvAmount");
    }

    /**
     * ConvAmount: 
     *
     * @param int $convAmount
     */
    public function setConvAmount(int $convAmount)
    {
        $this->set("ConvAmount", $convAmount);
    }
    
    /**
     * ConvNum: 
     *
     * @return int|null
     */
    public function getConvNum()
    {
        return $this->get("ConvNum");
    }

    /**
     * ConvNum: 
     *
     * @param int $convNum
     */
    public function setConvNum(int $convNum)
    {
        $this->set("ConvNum", $convNum);
    }
    
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
    
}






