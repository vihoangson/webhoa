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
            $products         = Product::where( 'active', 1 )->where( 'homepage', 1 )->get();
            $feature_products = Product::where( 'active', 1 )->where( 'homepage', 1 )->where( 'promotion', 1 )->get();
        }
        if ( count( $products ) == 0 ) {
            abort( 404 );
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

    /**
     * Check capcha
     *
     * @param Request $request
     *
     * @return bool
     */
    private function process_capcha( $request ) {
        $api_url    = 'https://www.google.com/recaptcha/api/siteverify';
        $site_key   = '6LeMRyEUAAAAAFijB-ZfJndPEXaEA-FHkRCZr2y4';
        $secret_key = '6LeMRyEUAAAAAFb9SAZUmE7M2_3rTRs7K8BPUY_l';


        $post_data     = $request->all();
        $site_key_post = $post_data['g-recaptcha-response'];

        //lấy IP của khach
        if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
            $remoteip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
            $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $remoteip = $_SERVER['REMOTE_ADDR'];
        }

        //tạo link kết nối
        $api_url = $api_url . '?secret=' . $secret_key . '&response=' . $site_key_post . '&remoteip=' . $remoteip;
        //lấy kết quả trả về từ google
        $response     = file_get_contents( $api_url );
        $obj_response = json_decode( $response );
        if ( $obj_response->success == true ) {
            return true;
        }

        return false;
    }

    public function process_contact( Request $request ) {

        $check_capcha = $this->process_capcha( $request );
        if ( $check_capcha == false ) {
            flash( 'Form không hợp lệ' )->error();
            return \Redirect::back();
        }

        if ( $request->email ) {
            $data['content_name']    = $request->name;
            $data['content_email']   = $request->email;
            $data['content_subject'] = $request->subject;
            $data['content_message'] = $request->message;

            \Mail::send( 'emails.contact', $data, function ( $message ) {
                $message->from( 'ngotrichi@gmail.com', 'Laravel' );
                $message->to( 'vihoangson@gmail.com' );
            } );

            flash( 'Email đã được gửi' )->success();

            return \Redirect::back();
        }
    }

    public function unsubscribe(Request $request){

    }
}
