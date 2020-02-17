<?php

namespace App\Models;

class Question extends BaseModel
{
    protected $table = 'questions';

    public function nosim(){
        return $this->belongsTo('App\Models\Nosim','noseId');
    }
}
