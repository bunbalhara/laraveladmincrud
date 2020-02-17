<?php

namespace App\Models;

class BlogPost extends BaseModel
{
    protected $table = 'blogposts';
    public function subcategory(){
        return $this->belongsTo("App\Models\Subcategory","sub_category_id");
    }

}
