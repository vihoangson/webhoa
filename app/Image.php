<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['title', 'url'];

    public function product()
    {
        return $this->belongsToMany('App\Product')
            ->withTimestamps();
    }
}
