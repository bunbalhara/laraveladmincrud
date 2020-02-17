<?php

namespace App\Models;

class Subcategory extends BaseModel
{
    protected $table = 'subcategories';

    public function blogpost(){
        return $this->hasMany('App\Models\BlogPost','sub_category_id');
    }

    public function nosimgroup(){
        return $this->hasMany('App\Models\NosimGroup','subcat_id');
    }

    public function nosim(){
        return $this->hasMany('App\Models\Nosim','nose_sub_category_id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
