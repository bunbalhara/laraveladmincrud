<?php

namespace App\Models;

class Nosim extends BaseModel
{
    protected $table = 'nosims';

    public function article(){
        return $this->hasMany('App\Models\Article','nose_id');
    }

    public function question(){
        return $this->hasMany('App\Models\Question','noseId');
    }


    public function subcategory(){
        return $this->belongsTo('App\Models\Subcategory','nose_sub_category_id');
    }

    public function  noseGroup(){
        return $this->belongsTo('App\Models\NosimGroup','nose_group_id');
    }
}
