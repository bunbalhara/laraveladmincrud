<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    public function slugFun($name, $id=0)
    {
        $i = 0;
        $slug = Str::slug($name, '-');
        if($this->where('slug', $slug)->where('id', '!=', $id)->first())
        {
            do {
                $i++;
            } while ($this->where('id', '!=', $id)->where('slug', $slug.'-'.$i)->first());
        }
        if($i!=0)
        {
            $slug = $slug.'-'.$i;
        }
        return $slug;
    }
}
