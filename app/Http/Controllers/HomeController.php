<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Menu;
use App\Product;
use Illuminate\Http\Request;
use Cache;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
        //$this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $minutes = 10;

        if ( \App::environment( 'production' ) ) {
            $products         = Cache::remember( 'users', $minutes, function () {
                return Product::where( 'active', 1 )->paginate();
            } );
            $feature_products = Cache::remember( 'users', $minutes, function () {
                return Product::where( 'active', 1 )->limit( 3 )->paginate();
            } );
        } else {
            $products         = Product::where( 'active', 1 )->get();
            $feature_products = Product::where( 'active', 1 )->get();
        }

        return view( 'public.' . $this->template_name . '.product.homepage' )->with(
            compact(
                'products',
                'feature_products'
            )
        );
    }

    /**
     * Show the  application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        $product = Product::find( $id );

        return view( 'public.' . $this->template_name . '.product.show' )->with( [ 'product' => $product ] );
    }

    public function contact() {
        return view( 'public.' . $this->template_name . '.contact' );
    }

    public function process_contact( Request $request ) {
        if ( $request->email ) {
            echo "Send email !";
            echo '<a href="/">Click here to go homepage</a>';

            return;
            $data['user'] = 123;
            \Mail::send( 'emails.welcome', $data, function ( $message ) {
                $message->from( 'ngotrichi@gmail.com', 'Laravel' );
                $message->to( 'vihoangson@gmail.com' );
            } );
        }
    }
}
