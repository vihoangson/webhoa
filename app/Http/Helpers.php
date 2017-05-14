<?php
if ( ! function_exists( 'get_id_or_slug' ) ) {
    function get_id_or_slug( $param ) {
        if ( (int) $param > 0 ) {
            return 'id';
        } else {
            return 'slug';
        }
    }
}

function generate_discount( $percent, $price, $option ) {
    $price = (int) str_replace( ",", "", $price );
    if ( $option == 'GET_PRICE' ) {
        return number_format( round( ( ( 100 - $percent ) * (int) $price ) / 100 ) );
    } else {
        return number_format( round( ( $percent * (int) $price ) / 100 ) );
    }
}

function get_setting_page($key){
    return \App\Setting::where('setting_key',$key)->first()->setting_value;
}

