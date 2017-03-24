<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function setTagAttribute($tag)
    {
        $this->attributes['tag'] = $tag . "_end";
    }
    //
}
