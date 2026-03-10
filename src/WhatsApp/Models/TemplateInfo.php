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

class TemplateInfo extends Response
{

    /**
     * Category: 
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->get("Category");
    }

    /**
     * Category: 
     *
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->set("Category", $category);
    }
    
    /**
     * ID: 
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->get("ID");
    }

    /**
     * ID: 
     *
     * @param string $id
     */
    public function setID(string $id)
    {
        $this->set("ID", $id);
    }
    
    /**
     * QualityScore: 
     *
     * @return TemplateQualityScore|null
     */
    public function getQualityScore()
    {
        return new TemplateQualityScore($this->get("QualityScore"));
    }

    /**
     * QualityScore: 
     *
     * @param TemplateQualityScore $qualityScore
     */
    public function setQualityScore(TemplateQualityScore $qualityScore)
    {
        $this->set("QualityScore", $qualityScore->getAll());
    }
    
    /**
     * Status: 
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->set("Status", $status);
    }
    
    /**
     * Tags: 
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->get("Tags");
    }

    /**
     * Tags: 
     *
     * @param string[] $tags
     */
    public function setTags(array $tags)
    {
        $this->set("Tags", $tags);
    }
    
    /**
     * Attributes: 
     *
     * @return TemplateAttribute[]|null
     */
    public function getAttributes()
    {
        $items = $this->get("Attributes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TemplateAttribute($item));
        }
        return $result;
    }

    /**
     * Attributes: 
     *
     * @param TemplateAttribute[] $attributes
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
     * Components: 
     *
     * @return TemplateComponent[]|null
     */
    public function getComponents()
    {
        $items = $this->get("Components");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TemplateComponent($item));
        }
        return $result;
    }

    /**
     * Components: 
     *
     * @param TemplateComponent[] $components
     */
    public function setComponents(array $components)
    {
        $result = [];
        foreach ($components as $i => $item) {
            array_push($result, $item->getAll());
        }
        $this->set("Components", $result);
    }
    
    /**
     * Language: 
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->get("Language");
    }

    /**
     * Language: 
     *
     * @param string $language
     */
    public function setLanguage(string $language)
    {
        $this->set("Language", $language);
    }
    
    /**
     * Name: 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    
    /**
     * RejectedReason: 
     *
     * @return string|null
     */
    public function getRejectedReason()
    {
        return $this->get("RejectedReason");
    }

    /**
     * RejectedReason: 
     *
     * @param string $rejectedReason
     */
    public function setRejectedReason(string $rejectedReason)
    {
        $this->set("RejectedReason", $rejectedReason);
    }
    
}






