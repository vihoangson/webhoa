<?php
if ( !function_exists( 'get_id_or_slug' ) ) {
    function get_id_or_slug( $param ) {
        if ( (int) $param > 0 ) {
            return 'id';
        } else {
            return 'slug';
        }
    }
}
