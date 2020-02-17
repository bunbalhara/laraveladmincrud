<?php

namespace App\Models;

class Category extends BaseModel
{
    protected $table = 'categories';

    public function subcategory(){
        return $this->hasMany('App\Models\Subcategory','category_id');
    }
}
