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

class GetTemplatesRes extends Response
{

    /**
     * Data: 
     *
     * @return TemplateInfo[]|null
     */
    public function getData()
    {
        $items = $this->get("Data");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TemplateInfo($item));
        }
        return $result;
    }

    /**
     * Data: 
     *
     * @param TemplateInfo[] $data
     */
    public function setData(array $data)
    {
        $result = [];
        foreach ($data as $i => $item) {
            array_push($result, $item->getAll());
        }
        $this->set("Data", $result);
    }
    
    /**
     * Paging: 
     *
     * @return GetTemplatesPaging|null
     */
    public function getPaging()
    {
        return new GetTemplatesPaging($this->get("Paging"));
    }

    /**
     * Paging: 
     *
     * @param GetTemplatesPaging $paging
     */
    public function setPaging(GetTemplatesPaging $paging)
    {
        $this->set("Paging", $paging->getAll());
    }
    
}






