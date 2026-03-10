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
namespace USpeedo\MMS;

use USpeedo\Core\Client;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\MMS\Apis\DeleteMMSTemplateReq;
use USpeedo\MMS\Apis\DeleteMMSTemplateRes;
use USpeedo\MMS\Apis\QueryMMSTemplateReq;
use USpeedo\MMS\Apis\QueryMMSTemplateRes;
use USpeedo\MMS\Apis\SendBatchMMSMessageReq;
use USpeedo\MMS\Apis\SendBatchMMSMessageRes;
use USpeedo\MMS\Apis\GetMMSSendReceiptReq;
use USpeedo\MMS\Apis\GetMMSSendReceiptRes;
use USpeedo\MMS\Apis\UpdateMMSTemplateReq;
use USpeedo\MMS\Apis\UpdateMMSTemplateRes;
use USpeedo\MMS\Apis\CreateMMSTemplateReq;
use USpeedo\MMS\Apis\CreateMMSTemplateRes;

/**
 * This client is used to call actions of **MMS** service
 */
class MMSClient extends Client
{
        
    /**
     * DeleteMMSTemplate - 
     *
     * @throws USpeedoException
     */
    public function deleteMMSTemplate(DeleteMMSTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteMMSTemplateRes($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * QueryMMSTemplate - 
     *
     * @throws USpeedoException
     */
    public function queryMMSTemplate(QueryMMSTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryMMSTemplateRes($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * SendBatchMMSMessage - 
     *
     * @throws USpeedoException
     */
    public function sendBatchMMSMessage(SendBatchMMSMessageReq $request = null)
    {
        $resp = $this->invoke($request);
        return new SendBatchMMSMessageRes($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * GetMMSSendReceipt - 
     *
     * @throws USpeedoException
     */
    public function getMMSSendReceipt(GetMMSSendReceiptReq $request = null)
    {
        $resp = $this->invoke($request);
        return new GetMMSSendReceiptRes($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * UpdateMMSTemplate - 
     *
     * @throws USpeedoException
     */
    public function updateMMSTemplate(UpdateMMSTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateMMSTemplateRes($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * CreateMMSTemplate - 
     *
     * @throws USpeedoException
     */
    public function createMMSTemplate(CreateMMSTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateMMSTemplateRes($resp->toArray(), $resp->getRequestId());
    }
}
