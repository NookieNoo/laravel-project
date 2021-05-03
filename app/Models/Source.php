<?php

namespace App\Models;

class Source extends BaseModel
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->hidden = array_merge(parent::getHidden(), ['actual_date', 'description']);
    }
}
