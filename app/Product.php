<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Exception;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'price_sale', 'content', 'date_begin_sale', 'date_end_sale', 'active', 'summary', 'main_img'];

    public function setActiveAttribute($active)
    {
        if ($active == null) {
            $this->attributes['active'] = 0;
        } else {
            $this->attributes['active'] = $active;
        }
    }

    public function setDateBeginSaleAttribute($date)
    {
        if (!preg_match('/\s/', $date)) {
            $date = Carbon::createFromFormat('m/d/Y', $date);
        }
        $this->attributes['date_begin_sale'] = $date;
    }

    public function setDateEndSaleAttribute($date)
    {
        if (!preg_match('/\s/', $date)) {
            $date = Carbon::createFromFormat('m/d/Y', $date);
        }
        $this->attributes['date_end_sale'] = $date;
    }

    public function category()
    {
        return $this->belongsToMany('App\Category')
            ->withTimestamps();
    }

    public function image()
    {
        return $this->belongsToMany('App\Image')
            ->withTimestamps();
    }
}
