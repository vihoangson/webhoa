<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product()
    {
        //return $this->morphToMany('App\Product','category_allocations');
        return $this->belongsToMany('App\Product')
            ->withTimestamps();
    }
}
