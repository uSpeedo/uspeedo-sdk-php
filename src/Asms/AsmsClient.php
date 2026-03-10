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
namespace USpeedo\Asms;

use USpeedo\Core\Client;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\Asms\Apis\UpdateUSMSTemplateReq;
use USpeedo\Asms\Apis\UpdateUSMSTemplateResp;
use USpeedo\Asms\Apis\GetUSMSSendReceiptReq;
use USpeedo\Asms\Apis\GetUSMSSendReceiptResp;
use USpeedo\Asms\Apis\SendBatchUSMSMessageReq;
use USpeedo\Asms\Apis\SendBatchUSMSMessageResp;
use USpeedo\Asms\Apis\QueryUSMSTemplateReq;
use USpeedo\Asms\Apis\QueryUSMSTemplateResp;
use USpeedo\Asms\Apis\CreateUSMSTemplateReq;
use USpeedo\Asms\Apis\CreateUSMSTemplateResp;
use USpeedo\Asms\Apis\DeleteUSMSTemplateReq;
use USpeedo\Asms\Apis\DeleteUSMSTemplateResp;

/**
 * This client is used to call actions of **Asms** service
 */
class AsmsClient extends Client
{
        
    /**
     * UpdateUSMSTemplate - 
     *
     * @throws USpeedoException
     */
    public function updateUSMSTemplate(UpdateUSMSTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUSMSTemplateResp($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * GetUSMSSendReceipt - 
     *
     * @throws USpeedoException
     */
    public function getUSMSSendReceipt(GetUSMSSendReceiptReq $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUSMSSendReceiptResp($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * SendBatchUSMSMessage - 
     *
     * @throws USpeedoException
     */
    public function sendBatchUSMSMessage(SendBatchUSMSMessageReq $request = null)
    {
        $resp = $this->invoke($request);
        return new SendBatchUSMSMessageResp($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * QueryUSMSTemplate - 
     *
     * @throws USpeedoException
     */
    public function queryUSMSTemplate(QueryUSMSTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryUSMSTemplateResp($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * CreateUSMSTemplate - 
     *
     * @throws USpeedoException
     */
    public function createUSMSTemplate(CreateUSMSTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUSMSTemplateResp($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * DeleteUSMSTemplate - 
     *
     * @throws USpeedoException
     */
    public function deleteUSMSTemplate(DeleteUSMSTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUSMSTemplateResp($resp->toArray(), $resp->getRequestId());
    }
}
