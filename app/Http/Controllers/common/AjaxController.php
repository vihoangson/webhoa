<?php

namespace App\Http\Controllers\common;

use Session;
use App\Customer;
use App\Order;
use App\Product;
use App\RegisterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use \Cart;

class AjaxController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    public function add_wishlist( Request $request ) {
        $id         = $request->id;
        $count_cart = ( count( Cart::instance( 'wishlist' )->search( function ( $m, $n ) use ( $id ) {
            return $m->id == $id;
        } ) ) );
        if ( $count_cart == 0 ) {
            Cart::instance( 'wishlist' )->add( $request->id, $request->title, 1, 0 );

            return response()->json( [
                'status' => 'success',
            ] );
        } else {
            return response()->json( [
                'message' => 'Đã có trong danh mục yêu thích',
                'status'  => 'error',
            ] );
        }
    }

    public function process_review( Request $request ) {
        $post_data = $request->all();
        echo $post_data['name'];
        echo $post_data['email'];
        echo $post_data['review'];
        echo "<hr>";
        echo $post_data['starvote']+1;
        return redirect($post_data['backlink']);

    }


}
