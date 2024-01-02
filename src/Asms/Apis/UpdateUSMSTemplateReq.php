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

namespace USpeedo\Asms\Apis;

use USpeedo\Core\Request\Request;

class UpdateUSMSTemplateReq extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUSMSTemplate"]);
        $this->markRequired("TemplateId");
    }


    /**
     * VariableAttr: Properties corresponding to template variables
     *
     * @return string|null
     */
    public function getVariableAttr()
    {
        return $this->get("VariableAttr");
    }

    /**
     * VariableAttr: Properties corresponding to template variables
     *
     * @param string $variableAttr
     */
    public function setVariableAttr(string $variableAttr)
    {
        $this->set("VariableAttr", $variableAttr);
    }
    
    /**
     * AccountId: Account ID,Get accountId reference: https://docs.uspeedo.com/docs/sms/api/
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: Account ID,Get accountId reference: https://docs.uspeedo.com/docs/sms/api/
     *
     * @param int $accountId
     */
    public function setAccountId(int $accountId)
    {
        $this->set("AccountId", $accountId);
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






