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

class ReceiptPerPhone extends Response
{

    /**
     * ReceiptDesc: 
     *
     * @return string|null
     */
    public function getReceiptDesc()
    {
        return $this->get("ReceiptDesc");
    }

    /**
     * ReceiptDesc: 
     *
     * @param string $receiptDesc
     */
    public function setReceiptDesc(string $receiptDesc)
    {
        $this->set("ReceiptDesc", $receiptDesc);
    }
    
    /**
     * ReceiptResult: 
     *
     * @return string|null
     */
    public function getReceiptResult()
    {
        return $this->get("ReceiptResult");
    }

    /**
     * ReceiptResult: 
     *
     * @param string $receiptResult
     */
    public function setReceiptResult(string $receiptResult)
    {
        $this->set("ReceiptResult", $receiptResult);
    }
    
    /**
     * ReceiptTime: 
     *
     * @return int|null
     */
    public function getReceiptTime()
    {
        return $this->get("ReceiptTime");
    }

    /**
     * ReceiptTime: 
     *
     * @param int $receiptTime
     */
    public function setReceiptTime(int $receiptTime)
    {
        $this->set("ReceiptTime", $receiptTime);
    }
    
    /**
     * AccountId: 
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: 
     *
     * @param int $accountId
     */
    public function setAccountId(int $accountId)
    {
        $this->set("AccountId", $accountId);
    }
    
    /**
     * CostCount: 
     *
     * @return int|null
     */
    public function getCostCount()
    {
        return $this->get("CostCount");
    }

    /**
     * CostCount: 
     *
     * @param int $costCount
     */
    public function setCostCount(int $costCount)
    {
        $this->set("CostCount", $costCount);
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
     * ReceiptCode: 
     *
     * @return string|null
     */
    public function getReceiptCode()
    {
        return $this->get("ReceiptCode");
    }

    /**
     * ReceiptCode: 
     *
     * @param string $receiptCode
     */
    public function setReceiptCode(string $receiptCode)
    {
        $this->set("ReceiptCode", $receiptCode);
    }
    
}






