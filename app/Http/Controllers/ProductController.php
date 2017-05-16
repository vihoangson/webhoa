<?php

namespace App\Http\Controllers;

use App\Coupon;
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
     * Process add_coupon
     *
     * @param Request $request
     */
    public function add_coupon( Request $request ) {

        if ( ! empty( $request->coupon_code ) ) {
            $coupon = Coupon::where( 'code', $request->coupon_code )->first();
            if ( $coupon->count() != 0 ) {
                Session::put( 'coupon_code', $request->coupon_code );
                Session::put( 'coupon_discount', $coupon->discount );
                flash( 'Thêm code thành công' )->success();
            } else {
                flash( 'Code không đúng, vui lòng kiểm tra lại' )->error();
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
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {

        if ( get_id_or_slug( $id ) == 'id' ) {
            $product = Product::find( $id );
        } else {
            $product = Product::findBySlug( $id );
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
        $rq                  = $request->all();
        $customer            = Customer::create( $rq );
        $od                  = new Order;
        $od->payment_method  = $request->payment_method;
        $od->data_cache      = json_encode( Cart::content() );
        $od->coupon_discount = Session::get( "coupon_discount" );
        $od->coupon_code     = Session::get( "coupon_code" );
        $od->total_sum       = str_replace( ',', '', Cart::total() );
        $od->customer_id     = $customer->id;
        $od->save();
        $this->remove_coupon_code();
        // todo: sent email

        if ( $customer->email ) {

            $string_content = $customer->name . "<br>" .
                              $customer->email . "<br>" .
                              $customer->tel . "<br>" .
                              $customer->address . "<br>" .
                              $customer->city . "<br>" .
                              $customer->updated_at . "<br>" .
                              $customer->created_at . "<br>" .
                              $customer->id . "<br>";

            $data_email['content_name']    = $customer->name;
            $data_email['content_email']   = $customer->email;
            $data_email['content_subject'] = 'Đơn hàng đặt thành công';
            $data_email['content_message'] = $string_content;

            \Mail::send( 'emails.product.success', $data_email, function ( $message )  use ($data_email) {
                $message->from( $data_email['content_email'] );
                $message->to( 'vihoangson@gmail.com' );
            } );

            flash( 'Email đã được gửi' )->success();

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
        Cart::destroy();

        //todo: Xử lý lưu cart
        return view( 'public.' . $this->template_name . '.product.finish' );
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

}
