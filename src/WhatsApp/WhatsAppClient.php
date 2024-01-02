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
namespace USpeedo\WhatsApp;

use USpeedo\Core\Client;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\WhatsApp\Apis\GetMediaReq;
use USpeedo\WhatsApp\Apis\GetMediaResData;
use USpeedo\WhatsApp\Apis\GetMessageSummaryReq;
use USpeedo\WhatsApp\Apis\GetMessageSummaryResData;
use USpeedo\WhatsApp\Apis\GetTemplatesReq;
use USpeedo\WhatsApp\Apis\GetTemplatesResData;
use USpeedo\WhatsApp\Apis\SendWhatsappMessageReq;
use USpeedo\WhatsApp\Apis\SendWhatsappMessageResData;
use USpeedo\WhatsApp\Apis\UploadMediaReq;
use USpeedo\WhatsApp\Apis\UploadMediaResData;
use USpeedo\WhatsApp\Apis\DeleteMediaReq;
use USpeedo\WhatsApp\Apis\DeleteMediaRes;
use USpeedo\WhatsApp\Apis\DeleteTemplateReq;
use USpeedo\WhatsApp\Apis\DeleteTemplateRes;
use USpeedo\WhatsApp\Apis\GetAccountPhoneListRequest;
use USpeedo\WhatsApp\Apis\GetAccountPhoneListResData;

/**
 * This client is used to call actions of **WhatsApp** service
 */
class WhatsAppClient extends Client
{
        
    /**
     * GetMedia - 
     *
     * @throws USpeedoException
     */
    public function getMedia(GetMediaReq $request = null)
    {
        $resp = $this->invoke($request);
        return new GetMediaResData($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * GetMessageSummary - 
     *
     * @throws USpeedoException
     */
    public function getMessageSummary(GetMessageSummaryReq $request = null)
    {
        $resp = $this->invoke($request);
        return new GetMessageSummaryResData($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * GetTemplates - 
     *
     * @throws USpeedoException
     */
    public function getTemplates(GetTemplatesReq $request = null)
    {
        $resp = $this->invoke($request);
        return new GetTemplatesResData($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * SendWhatsappMessage - 
     *
     * @throws USpeedoException
     */
    public function sendWhatsappMessage(SendWhatsappMessageReq $request = null)
    {
        $resp = $this->invoke($request);
        return new SendWhatsappMessageResData($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * UploadMedia - 
     *
     * @throws USpeedoException
     */
    public function uploadMedia(UploadMediaReq $request = null)
    {
        $resp = $this->invoke($request);
        return new UploadMediaResData($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * DeleteMedia - 
     *
     * @throws USpeedoException
     */
    public function deleteMedia(DeleteMediaReq $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteMediaRes($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * DeleteTemplate - 
     *
     * @throws USpeedoException
     */
    public function deleteTemplate(DeleteTemplateReq $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteTemplateRes($resp->toArray(), $resp->getRequestId());
    }
        
    /**
     * GetAccountPhoneList - 
     *
     * @throws USpeedoException
     */
    public function getAccountPhoneList(GetAccountPhoneListRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetAccountPhoneListResData($resp->toArray(), $resp->getRequestId());
    }
}
