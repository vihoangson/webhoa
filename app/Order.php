<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'product_id', 'data_cache'];

    public function getDataCacheAttribute($data_cache)
    {
        //dd(json_decode($data_cache,true)    );
        return array_values(json_decode($data_cache,true))[0    ];
        //dd($data_cache."123" );
        //$this->attributes['data_cache'] = 123;
        $this->attributes['data_cache'] = $data_cache;

    }

    public function customer()
    {
        return $this->hasOne('App\Customer','id');
    }


}
