<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Form;

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
                $string = Form::open(['route' => 'admin.order.change_status', 'method' => 'post']);
                $string .= Form::hidden('id',$this->attributes['id']);
                $string .= Form::hidden('status',1);
                $string .= Form::submit('Sẵn sàng giao hàng',['class'=>'btn btn-default']);
                $string .= Form::close();
                return $string;
                break;
            case 1:
                $string = Form::open(['route' => 'admin.order.change_status', 'method' => 'post']);
                $string .= Form::hidden('id',$this->attributes['id']);
                $string .= Form::hidden('status',2);
                $string .= Form::submit('Hoàn tất giao hàng',['class'=>'btn btn-default']);
                $string .= Form::close();
                return $string;
                break;
            case 2:
                return '    Giao hàng thành công    ';
                break;
            default:
                return "Hủy";
                break;
        }
    }


}
