<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'product_id', 'data_cache', 'total_sum'];

    public function getDataCacheFormatedAttribute()
    {
        $m = json_decode($this->attributes['data_cache'] ,true);
        return $m;
    }

    public function customer()
    {
        return $this->hasOne('App\Customer','id','customer_id');
    }

    public function getButtonChangeStatusAttribute(){
        switch ($this->attributes['status']){
            case 0:
                return "Sẵn sàng giao hàng";
                break;
            default:
                return "Hủy";
                break;
        }
    }


}
