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

use USpeedo\Core\Response\Response;
use USpeedo\Email\Models\FailedTargetEmail;

class SendEmailTemplateRes extends Response
{

    /**
     * SessionNo: The unique identifier of this sending task
     *
     * @return string|null
     */
    public function getSessionNo()
    {
        return $this->get("SessionNo");
    }

    /**
     * SessionNo: The unique identifier of this sending task
     *
     * @param string $sessionNo
     */
    public function setSessionNo(string $sessionNo)
    {
        $this->set("SessionNo", $sessionNo);
    }
    
    /**
     * SuccessCount: 
     *
     * @return int|null
     */
    public function getSuccessCount()
    {
        return $this->get("SuccessCount");
    }

    /**
     * SuccessCount: 
     *
     * @param int $successCount
     */
    public function setSuccessCount(int $successCount)
    {
        $this->set("SuccessCount", $successCount);
    }
    
    /**
     * FailContent: 
     *
     * @return FailedTargetEmail[]|null
     */
    public function getFailContent()
    {
        $items = $this->get("FailContent");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FailedTargetEmail($item));
        }
        return $result;
    }

    /**
     * FailContent: 
     *
     * @param FailedTargetEmail[] $failContent
     */
    public function setFailContent(array $failContent)
    {
        $result = [];
        foreach ($failContent as $i => $item) {
            array_push($result, $item->getAll());
        }
        $this->set("FailContent", $result);
    }
    
}






