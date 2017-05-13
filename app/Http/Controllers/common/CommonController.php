<?php

namespace App\Http\Controllers\common;

use App\Review;
use Session;
use App\Customer;
use App\Order;
use App\Product;
use App\RegisterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use \Cart;
use Excel;

class CommonController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Đăng ký thông tin email (nhận mail định kỳ)
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function register_email( Request $request ) {

        if ( filter_var( $request->email, FILTER_VALIDATE_EMAIL ) ) {
            RegisterEmail::create( [ 'email' => $request->email ] );
        } else {
            Session::flash( 'modal_message_error', 'Kiểm tra không dúng email' );
        }

        return redirect( '/' );
    }

}
