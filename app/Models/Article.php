<?php

namespace App\Models;

class Article extends BaseModel
{
    protected $table = 'articles';

    public function nosim(){
        return $this->belongsTo("App\Models\Nosim","nose_id");
    }
}
