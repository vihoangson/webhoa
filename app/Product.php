<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Exception;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'price_sale', 'content', 'date_begin_sale', 'date_end_sale', 'active', 'summary', 'main_img'];


    /**
     * Add custom attributes to Eloquent models
     *
     * price_formated
     * @return string
     */
    public function getPriceFormatedAttribute(){
        if($this->attributes['price']==0){
            return '';
        }
        return number_format($this->attributes['price'])."đ";
    }

    /**
     * Add custom attributes to Eloquent models
     *
     * price_sale_formated
     * @return string
     */
    public function getPriceSaleFormatedAttribute(){
        if($this->attributes['price_sale']==0){
            return '';
        }
        return number_format($this->attributes['price_sale'])."đ";
    }


    /**
     * Add custom attributes to Eloquent models
     *
     * price_sale_formated
     * @return string
     */
    public function getDateBeginSaleFormatedAttribute(){
        if($this->attributes['date_begin_sale'] && $this->attributes['date_begin_sale']!= '0000-00-00 00:00:00'){
            $carbon_date = Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['date_begin_sale']);
            return $carbon_date->format('m/d/Y');
        }
        return '';
    }

    /**
     * Add custom attributes to Eloquent models
     *
     * price_sale_formated
     * @return string
     */
    public function getDateEndSaleFormatedAttribute(){
        if($this->attributes['date_end_sale'] && $this->attributes['date_end_sale']!= '0000-00-00 00:00:00'){
            $carbon_date = Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['date_end_sale']);
            return $carbon_date->format('m/d/Y');
        }
        return '';
    }

    /**
     * Add custom attributes to Eloquent models
     *
     * price_sale_formated
     * @return string
     */
    public function getDateEndSaleFormatedCountdownAttribute(){
        if($this->attributes['date_end_sale'] && $this->attributes['date_end_sale']!= '0000-00-00 00:00:00'){
            $carbon_date = Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['date_end_sale']);
            return $carbon_date->format('Y/m/d');
        }
        return '';
    }

    public function getPriceSaleAttribute($price_sale){
        return $price_sale;
    }

    public function getPriceAttribute($price){
        return $price;
    }

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
