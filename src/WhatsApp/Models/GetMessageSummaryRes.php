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

class GetMessageSummaryRes extends Response
{

    /**
     * MsgAmount: total amount of messages
     *
     * @return int|null
     */
    public function getMsgAmount()
    {
        return $this->get("MsgAmount");
    }

    /**
     * MsgAmount: total amount of messages
     *
     * @param int $msgAmount
     */
    public function setMsgAmount(int $msgAmount)
    {
        $this->set("MsgAmount", $msgAmount);
    }
    
    /**
     * MsgList: detailed message statistics
     *
     * @return MessageSummary[]|null
     */
    public function getMsgList()
    {
        $items = $this->get("MsgList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MessageSummary($item));
        }
        return $result;
    }

    /**
     * MsgList: detailed message statistics
     *
     * @param MessageSummary[] $msgList
     */
    public function setMsgList(array $msgList)
    {
        $result = [];
        foreach ($msgList as $i => $item) {
            array_push($result, $item->getAll());
        }
        $this->set("MsgList", $result);
    }
    
    /**
     * MsgNum: total number of messages
     *
     * @return int|null
     */
    public function getMsgNum()
    {
        return $this->get("MsgNum");
    }

    /**
     * MsgNum: total number of messages
     *
     * @param int $msgNum
     */
    public function setMsgNum(int $msgNum)
    {
        $this->set("MsgNum", $msgNum);
    }
    
}






