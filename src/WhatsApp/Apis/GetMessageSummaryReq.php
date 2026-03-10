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

namespace USpeedo\WhatsApp\Apis;

use USpeedo\Core\Request\Request;

class GetMessageSummaryReq extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetMessageSummary"]);
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
     * EndTime: 
     *
     * @return int|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }
    
    /**
     * StartTime: 
     *
     * @return int|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 
     *
     * @param int $startTime
     */
    public function setStartTime(int $startTime)
    {
        $this->set("StartTime", $startTime);
    }
    
}






