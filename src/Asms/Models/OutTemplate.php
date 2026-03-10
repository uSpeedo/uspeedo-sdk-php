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

namespace USpeedo\Asms\Models;

use USpeedo\Core\Response\Response;

class OutTemplate extends Response
{

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
     * Template: 
     *
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->get("Template");
    }

    /**
     * Template: 
     *
     * @param string $template
     */
    public function setTemplate(string $template)
    {
        $this->set("Template", $template);
    }
    
    /**
     * Attributes: Properties corresponding to template variables
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
     * Attributes: Properties corresponding to template variables
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
     * Instruction: 
     *
     * @return string|null
     */
    public function getInstruction()
    {
        return $this->get("Instruction");
    }

    /**
     * Instruction: 
     *
     * @param string $instruction
     */
    public function setInstruction(string $instruction)
    {
        $this->set("Instruction", $instruction);
    }
    
    /**
     * Purpose: 
     *
     * @return int|null
     */
    public function getPurpose()
    {
        return $this->get("Purpose");
    }

    /**
     * Purpose: 
     *
     * @param int $purpose
     */
    public function setPurpose(int $purpose)
    {
        $this->set("Purpose", $purpose);
    }
    
    /**
     * Remark: 
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
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
    
}






