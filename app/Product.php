<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Exception;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Product extends Model {

    protected $fillable = [
        'title',
        'price',
        'price_sale',
        'content',
        'date_begin_sale',
        'date_end_sale',
        'active',
        'summary',
        'main_img',
        'slug',
    ];
    use Sluggable, SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    /**
     * Get all relate item
     *
     * @return array
     */
    public function product_relate( $limit = null ) {
        $this->attributes['price'];
        $categories     = ( $this->category()->get() );
        $relate_product = [];
        $i              = 0;
        foreach ( $categories as $cat ) {
            $product = $cat->product()->get();
            foreach ( $product as $item ) {
                if ( $i >= $limit ) {
                    continue;
                } else {
                    $relate_product[] = $item;
                    $i ++;
                }

            }
        }
        return $relate_product;
    }


    /**
     * Add custom attributes to Eloquent models
     *
     * price_formated
     * @return string
     */
    public function getPriceFormatedAttribute() {
        if ( $this->attributes['price'] == 0 ) {
            return '';
        }

        return number_format( $this->attributes['price'] ) . "đ";
    }

    /**
     * Add custom attributes to Eloquent models
     *
     * price_sale_formated
     * @return string
     */
    public function getPriceSaleFormatedAttribute() {
        if ( $this->attributes['price_sale'] == 0 ) {
            return '';
        }

        return number_format( $this->attributes['price_sale'] ) . "đ";
    }


    /**
     * Add custom attributes to Eloquent models
     *
     * price_sale_formated
     * @return string
     */
    public function getDateBeginSaleFormatedAttribute() {
        if ( $this->attributes['date_begin_sale'] && $this->attributes['date_begin_sale'] != '0000-00-00 00:00:00' ) {
            $carbon_date = Carbon::createFromFormat( 'Y-m-d H:i:s', $this->attributes['date_begin_sale'] );

            return $carbon_date->format( 'm/d/Y' );
        }

        return '';
    }

    /**
     * Add custom attributes to Eloquent models
     *
     * price_sale_formated
     * @return string
     */
    public function getDateEndSaleFormatedAttribute() {
        if ( $this->attributes['date_end_sale'] && $this->attributes['date_end_sale'] != '0000-00-00 00:00:00' ) {
            $carbon_date = Carbon::createFromFormat( 'Y-m-d H:i:s', $this->attributes['date_end_sale'] );

            return $carbon_date->format( 'm/d/Y' );
        }

        return '';
    }

    /**
     * Add custom attributes to Eloquent models
     *
     * price_sale_formated
     * @return string
     */
    public function getDateEndSaleFormatedCountdownAttribute() {
        if ( $this->attributes['date_end_sale'] && $this->attributes['date_end_sale'] != '0000-00-00 00:00:00' ) {
            $dt          = Carbon::now();
            $carbon_date = Carbon::createFromFormat( 'Y-m-d H:i:s', $this->attributes['date_end_sale'] );

            // Nếu đã qua thời hạn thì return null
            if ( $dt->diffInDays( $carbon_date, false ) < 0 ) {
                return null;
            }

            return $carbon_date->format( 'Y/m/d' );
        }

        return null;
    }

    public function getPriceSaleAttribute( $price_sale ) {
        return $price_sale;
    }

    public function getPriceAttribute( $price ) {
        return $price;
    }

    public function getPriceSaveAttribute() {
        if($this->attributes['price'] < $this->attributes['price_sale']){
            return null;
        }

        $save = $this->attributes['price'] - $this->attributes['price_sale'];
        return (round(($save/$this->attributes['price'])*100)).'%';
    }

    public function getPlaceSaleAttribute() {
        return 'HCM';
    }

    public function setActiveAttribute( $active ) {
        if ( $active == null ) {
            $this->attributes['active'] = 0;
        } else {
            $this->attributes['active'] = $active;
        }
    }

    public function setDateBeginSaleAttribute( $date ) {
        if ( $date ) {
            if ( ! preg_match( '/\s/', $date ) ) {
                $date = Carbon::createFromFormat( 'm/d/Y', $date );
            }
            $this->attributes['date_begin_sale'] = $date;
        }
    }

    public function setDateEndSaleAttribute( $date ) {
        if ( $date ) {
            if ( ! preg_match( '/\s/', $date ) ) {
                $date = Carbon::createFromFormat( 'm/d/Y', $date );
            }
            $this->attributes['date_end_sale'] = $date;
        }
    }

    public function category() {
        return $this->belongsToMany( 'App\Category' )
                    ->withTimestamps();
    }

    public function image() {
        return $this->belongsToMany( 'App\Image' )
                    ->withTimestamps();
    }
    public function reviews() {
        return $this->hasMany( 'App\Review' );
    }

    public function getTotalStarReviewAttribute(  ) {
        $sum = 0;
        foreach ($this->reviews as $review){
            $sum += $review->star;
        }

        return round(($sum / (count($this->reviews)*5))/0.2);

    }
}
