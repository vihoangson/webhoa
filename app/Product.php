<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'content'];

    public function category()
    {
        return $this->belongsToMany('App\Category')
            ->withTimestamps();
        //return $this->morphToMany('App\Category','category_allocations');
    }
}
