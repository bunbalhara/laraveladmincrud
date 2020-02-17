<?php

namespace App\Models;

class NosimGroup extends BaseModel
{
    protected $table = 'nosim_groups';

    public function subcategory(){
        return $this->belongsTo('App\Models\Subcategory','subcat_id');
    }

    public function  nosim(){
        return $this->hasMany('App\Models\Nosim','nose_group_id');
    }
}
