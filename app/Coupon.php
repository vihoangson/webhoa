<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model {

    protected $table = 'coupon';
    protected $fillable = [
        "active",
        "code",
        "discount",
        "starts_at",
        "ends_at",
    ];

    public function setStartsAtAttribute($date){
        if ( $date ) {
            if ( ! preg_match( '/\s/', $date ) ) {
                $date = Carbon::createFromFormat( 'd/m/Y', $date );
            }
            $date->hour(0);
            $date->minute(0);
            $date->second(0);
            $this->attributes['starts_at'] = $date;
        }
        //$this->attributes['starts_at'] = '2017-05-19 22:01:52';
    }

    public function setEndsAtAttribute($date){
        if ( $date ) {
            if ( ! preg_match( '/\s/', $date ) ) {
                $date = Carbon::createFromFormat( 'd/m/Y', $date );
            }
            $date->hour(0);
            $date->minute(0);
            $date->second(0);
            $this->attributes['ends_at'] = $date;
        }
    }

    public function getStartsAtFormatedAttribute(){
        if ( $this->attributes['starts_at'] && $this->attributes['starts_at'] != '0000-00-00 00:00:00' ) {
            $dt          = Carbon::now();
            $carbon_date = Carbon::createFromFormat( 'Y-m-d H:i:s', $this->attributes['starts_at'] );
            // Nếu đã qua thời hạn thì return null
            if ( $dt->diffInDays( $carbon_date, false ) < 0 ) {
                //return '<span style="color:red">'.$carbon_date->format( 'd/m/Y' ).'</span>';
            }
            return $carbon_date->format( 'd/m/Y' );
        }

        return null;
    }

    public function getEndsAtFormatedAttribute(){
        if ( $this->attributes['ends_at'] && $this->attributes['ends_at'] != '0000-00-00 00:00:00' ) {
            $dt          = Carbon::now();
            $carbon_date = Carbon::createFromFormat( 'Y-m-d H:i:s', $this->attributes['ends_at'] );

            // Nếu đã qua thời hạn thì return null
            if ( $dt->diffInDays( $carbon_date, false ) < 0 ) {
                //return '<span style="color:red">'.$carbon_date->format( 'd/m/Y' ).'</span>';
            }

            return $carbon_date->format( 'd/m/Y' );
        }

        return null;
    }

}
