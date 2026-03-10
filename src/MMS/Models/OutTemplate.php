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

class OutTemplate extends Response
{

    /**
     * TemplateId: 
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId)
    {
        $this->set("TemplateId", $templateId);
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
     * Attributes: properties corresponding to template variables
     *
     * @return VariableAttr[]|null
     */
    public function getAttributes()
    {
        $items = $this->get("Attributes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new VariableAttr($item));
        }
        return $result;
    }

    /**
     * Attributes: properties corresponding to template variables
     *
     * @param VariableAttr[] $attributes
     */
    public function setAttributes(array $attributes)
    {
        $result = [];
        foreach ($attributes as $i => $item) {
            array_push($result, $item->getAll());
        }
        $this->set("Attributes", $result);
    }
    
    /**
     * ErrDesc: 
     *
     * @return string|null
     */
    public function getErrDesc()
    {
        return $this->get("ErrDesc");
    }

    /**
     * ErrDesc: 
     *
     * @param string $errDesc
     */
    public function setErrDesc(string $errDesc)
    {
        $this->set("ErrDesc", $errDesc);
    }
    
    /**
     * MediaFile: media file address, base64 encoding, 3-second validity period
     *
     * @return string|null
     */
    public function getMediaFile()
    {
        return $this->get("MediaFile");
    }

    /**
     * MediaFile: media file address, base64 encoding, 3-second validity period
     *
     * @param string $mediaFile
     */
    public function setMediaFile(string $mediaFile)
    {
        $this->set("MediaFile", $mediaFile);
    }
    
    /**
     * Status: 
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 
     *
     * @param int $status
     */
    public function setStatus(int $status)
    {
        $this->set("Status", $status);
    }
    
    /**
     * TemplateName: 
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->get("TemplateName");
    }

    /**
     * TemplateName: 
     *
     * @param string $templateName
     */
    public function setTemplateName(string $templateName)
    {
        $this->set("TemplateName", $templateName);
    }
    
    /**
     * CreateTime: 
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
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
    
    /**
     * Tags: tags
     *
     * @return int[]|null
     */
    public function getTags()
    {
        return $this->get("Tags");
    }

    /**
     * Tags: tags
     *
     * @param int[] $tags
     */
    public function setTags(array $tags)
    {
        $this->set("Tags", $tags);
    }
    
}






