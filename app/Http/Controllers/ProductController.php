<?php

namespace App\Http\Controllers;

use App\Coupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Session;
use App\Customer;
use App\Order;
use App\Product;
use App\RegisterEmail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller {
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

        $products = Product::where( 'active', 1 )->paginate();

        return view( 'public.' . $this->template_name . '.product.index' )->with( [ 'products' => $products ] );

    }

    /**
     * Page search
     *
     * @param Request $request
     *
     * @return $this
     */
    public function search( Request $request ) {
        $keywords = $request->get( 'keywords' );
        if ( ! empty( $keywords ) ) {
            /** @var Product $products */
            $products = Product::where( 'title', 'like', '%' . $keywords . '%' )->get();
        } else {
            abort( '404' );
        }

        return view( 'public.' . $this->template_name . '.product.index' )->with( [ 'products' => $products ] );
    }

    /**
     * Page search
     *
     * @param Request $request
     *
     * @return $this
     */
    public function tags( Request $request ) {
        $tags = $request->get( 'tags' );
        if ( ! empty( $tags ) ) {
            /** @var Product $products */
            $products = Product::where( 'tags', 'like', '%' . $tags . '%' )->get();
        } else {
            abort( '404' );
        }

        return view( 'public.' . $this->template_name . '.product.index' )->with( [ 'products' => $products ] );
    }

    /**
     * Process add_coupon
     *
     * @param Request $request
     */
    public function add_coupon( Request $request ) {

        if ( ! empty( $request->coupon_code ) ) {
            $dt = Carbon::now();

            $coupon = Coupon::where( 'code', $request->coupon_code )
                            ->where( 'starts_at', '<=', $dt )
                            ->where( 'ends_at', '>=', $dt )
                            ->where( 'active', 1 )
                            ->first();

            if ( ! is_null( $coupon ) && $coupon->count() != 0 ) {
                Session::put( 'coupon_code', $request->coupon_code );
                Session::put( 'coupon_discount', $coupon->discount );
                flash( 'Thêm code thành công' )->success();
            } else {
                flash( 'Code không đúng hoặc đã hết hạn, vui lòng kiểm tra lại' )->error();
            }
        }

        return \redirect( preg_replace( '/^\//', '', $request->backlink ) );
    }

    /**
     * Clear coupon info
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove_coupon_code() {

        if ( Session::has( "coupon_code" ) || Session::forget( "coupon_discount" ) ) {

            Session::forget( "coupon_code" );
            Session::forget( "coupon_discount" );

            return response()->json( [
                'status' => 'success',
            ] );
        } else {
            return response()->json( [
                'message' => 'Không xóa được coupon',
                'status'  => 'error',
            ] );
        }

    }

    /**
     * Show the application dashboard.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {

        if ( get_id_or_slug( $id ) == 'id' ) {
            $product = Product::find( $id );
        } else {
            $product = Product::findBySlug( $id );
        }

        if ( is_null( $product ) ) {
            abort( '404' );
        }

        $product_relate = $product->product_relate( 6 );

        $id          = $product->id;
        $in_favorite = ( count( Cart::instance( 'wishlist' )->search( function ( $m, $n ) use ( $id ) {
            return $m->id == $id;
        } ) ) > 0 ? true : false );

        return view( 'public.' . $this->template_name . '.product.show' )->with(
            compact(
                'product',
                'product_relate',
                'in_favorite'
            )
        );
    }

    /**
     * Thêm sản phẩm vào giỏ hàng
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function add_cart( $id ) {

        if ( isset( $id ) ) {
            if ( get_id_or_slug( $id ) == 'id' ) {
                $product = Product::find( $id );
            } else {
                $product = Product::findBySlug( $id );
            }

            Cart::add( $product->id, $product->title, 1, ( $product->price_sale ? $product->price_sale : $product->price ), [ 'img_url' => ( $product->main_img ? $product->image->find( $product->main_img )->url : '' ) ] );

            return redirect( '/product/checkout' );
        }
    }

    /**
     * Cập nhật giỏ hàng
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function update_cart( Request $request ) {
        if ( $request->step == 'payment' ) {
            return \redirect( route( 'product.payment' ) );
        }
        $rq = $request->all();

        foreach ( $rq['ql'] as $key => $item ) {
            Cart::update( $key, $item );
        }

        return redirect( '/product/checkout' );
    }

    /**
     * Trang checkout
     *
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function checkout() {
        if ( Cart::count() == 0 ) {
            return redirect( '/' );
        }

        return view( 'public.' . $this->template_name . '.product.checkout' )->with( 'cart', Cart::content() );
    }

    /**
     * Hiển thị thanh toán
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View|mixed|void
     */
    public function payment() {
        if ( Cart::count() == 0 ) {
            return redirect( '/' );
        }

        //todo: Xử lý lưu cart
        return view( 'public.' . $this->template_name . '.product.payment' );
    }

    /**
     * Xử lý thanh toán
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function submit_payment( Request $request ) {
        if ( Cart::count() == 0 ) {
            return redirect( '/' );
        }
        $rq = $request->all();

        if ( Auth::check() ) {
            $rq['name']    = Auth::user()->username;
            $rq['email']   = Auth::user()->email;
            $rq['tel']     = Auth::user()->user_info->phone;
            $rq['address'] = Auth::user()->user_info->address;
            $rq['user_id'] = Auth::user()->id;
        } else {
            $rq['user_id'] = 0;
        }

        $customer            = Customer::create( $rq );
        $od                  = new Order;
        $od->payment_method  = $request->payment_method;
        $od->data_cache      = json_encode( Cart::content() );
        $od->coupon_discount = Session::get( "coupon_discount" );
        $od->coupon_code     = Session::get( "coupon_code" );
        $od->total_sum       = str_replace( ',', '', Cart::total() );
        $od->customer_id     = $customer->id;
        $od->save();
        // todo: sent email

        Session::put( 'code_order', $od->id );

        if ( $customer->email ) {
            $link_check_order              = route( 'product.check_order', encode_code_order( $od->id ) );
            $string_content                = '
<b>Mã đơn hàng của bạn:</b> ' . encode_code_order( $od->id ) . '<br>
Đơn hàng đang được chúng tôi xử lý và giao tới cho bạn trong thời gian sớm nhất. <hr><br> 
Bạn có thể kiểm tra trạng thái đơn hàng tại đường link bên dưới: <a href="' . $link_check_order . '">' . $link_check_order . '</a>

';
            $data_email['customer']        = $customer;
            $data_email['content_name']    = $customer->name;
            $data_email['content_email']   = $customer->email;
            $data_email['content_subject'] = 'Bạn đã đặt hàng thành công';
            $data_email['content_message'] = $string_content;

            $preview_email = env( 'PREVIEW_EMAIL', false );

            if ( $preview_email == true ) {
                return view( 'emails.product.success' )
                    ->with( 'data_email', $data_email )
                    ->with( 'order', $od );
            } else {
                \Mail::send( 'emails.product.success', [
                    'data_email' => $data_email,
                    'order'      => $od,
                ], function ( $message ) use ( $data_email ) {
                    $message->from( $data_email['content_email'] );
                    $message->to( 'vihoangson@gmail.com' );
                } );
                flash( 'Email đã được gửi' )->success();
                $this->remove_coupon_code();
            }
        }


        return redirect( "/product/finish" );
    }

    /**
     * Trang hoàn thành
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View|mixed|void
     */
    public function finish() {
        if ( Cart::count() == 0 ) {
            return redirect( '/' );
        }
        $code_order = Session::get( 'code_order' );
        Session::forget( 'code_order' );
        Cart::destroy();

        //todo: Xử lý lưu cart
        return view( 'public.' . $this->template_name . '.product.finish' )
            ->with( 'code_order', decode_code_order( $code_order ) );
    }

    /**
     * Xử lý xóa đơn hàng
     *
     * @param      $rowId
     * @param null $redirect
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function remove_item_in_cart( $rowId, $redirect = null ) {
        Cart::remove( $rowId );
        if ( $redirect == 'checkout' ) {
            return Redirect( '/product/checkout' );
        }

        return Redirect( '/' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        //
    }


    /**
     * Trang khuyến mãi hot
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function khuyenmaihot() {
        $products = Product::where( 'price_sale', '>', '0' )->paginate( 9 );

        return view( 'public.' . $this->template_name . '.product.khuyenmaihot', compact( 'products' ) );
    }

    /**
     * Hiển thị sản phẩm mới
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function deal_moi() {
        $products = Product::paginate( 9 );

        return view( 'public.' . $this->template_name . '.product.deal-moi', compact( 'products' ) );
    }

    public function check_order( Request $request, $order_code ) {
        $order_code = decode_code_order( $order_code );
        $order      = Order::find( (int) $order_code );

        $string_status = $order->string_status;

        return view( 'public.' . $this->template_name . '.product.check_order' )
            ->with( 'string_status', $string_status )
            ->with( 'order_code', $order_code );


    }

}
