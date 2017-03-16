<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'price_sale', 'content','date_begin_sale','date_end_sale','active','summary'];

    public function setDateBeginSaleAttribute($date){

        $date_after_format = Carbon::createFromFormat('m/d/Y', $date)->toDateTimeString();
        $this->attributes['date_begin_sale'] = $date_after_format;
    }

    public function setDateEndSaleAttribute($date){
        $date_after_format = Carbon::createFromFormat('m/d/Y', $date)->toDateTimeString();
        $this->attributes['date_end_sale'] = $date_after_format;
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
