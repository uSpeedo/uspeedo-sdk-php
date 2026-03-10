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

namespace USpeedo\MMS\Apis;

use USpeedo\Core\Request\Request;

class CreateMMSTemplateReq extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateMMSTemplate"]);
        $this->markRequired("Media");
        $this->markRequired("TemplateName");
        $this->markRequired("Text");
        $this->markRequired("AccountId");
        $this->markRequired("MediaType");
    }


    /**
     * Media: media files, base64 encoded, less than 300kb
     *
     * @return string|null
     */
    public function getMedia()
    {
        return $this->get("Media");
    }

    /**
     * Media: media files, base64 encoded, less than 300kb
     *
     * @param string $media
     */
    public function setMedia(string $media)
    {
        $this->set("Media", $media);
    }
    
    /**
     * TemplateName: template name
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->get("TemplateName");
    }

    /**
     * TemplateName: template name
     *
     * @param string $templateName
     */
    public function setTemplateName(string $templateName)
    {
        $this->set("TemplateName", $templateName);
    }
    
    /**
     * Text: text content
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->get("Text");
    }

    /**
     * Text: text content
     *
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->set("Text", $text);
    }
    
    /**
     * AccountId: Account ID,Get accountId reference: https://docs.uspeedo.com/docs/mms/api/
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: Account ID,Get accountId reference: https://docs.uspeedo.com/docs/mms/api/
     *
     * @param int $accountId
     */
    public function setAccountId(int $accountId)
    {
        $this->set("AccountId", $accountId);
    }
    
    /**
     * MediaType: media file type
     *
     * @return string|null
     */
    public function getMediaType()
    {
        return $this->get("MediaType");
    }

    /**
     * MediaType: media file type
     *
     * @param string $mediaType
     */
    public function setMediaType(string $mediaType)
    {
        $this->set("MediaType", $mediaType);
    }
    
    /**
     * Subject: subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->get("Subject");
    }

    /**
     * Subject: subject
     *
     * @param string $subject
     */
    public function setSubject(string $subject)
    {
        $this->set("Subject", $subject);
    }
    
}






