<?php

namespace App\Http\Controllers;

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

    public function update_cart( Request $request ) {
        $rq = $request->all();
        foreach ( $rq['ql'] as $key => $item ) {
            Cart::update( $key, $item );
        }

        return redirect( '/product/checkout' );
    }

    public function checkout() {
        if ( Cart::count() == 0 ) {
            return redirect( '/' );
        }

        return view( 'public.' . $this->template_name . '.product.checkout' )->with( 'cart', Cart::content() );
    }

    public function payment() {
        if ( Cart::count() == 0 ) {
            return redirect( '/' );
        }

        //todo: Xử lý lưu cart
        return view( 'public.' . $this->template_name . '.product.payment' );
    }

    public function submit_payment( Request $request ) {
        if ( Cart::count() == 0 ) {
            return redirect( '/' );
        }
        $rq       = $request->all();
        $customer = Customer::create( $rq );

        $od              = new Order;
        $od->data_cache  = json_encode( Cart::content() );
        $od->total_sum   = str_replace( ',', '', Cart::total() );
        $od->customer_id = $customer->id;
        $od->save();

        return redirect( "/product/finish" );
    }

    public function finish() {
        if ( Cart::count() == 0 ) {
            return redirect( '/' );
        }
        Cart::destroy();

        //todo: Xử lý lưu cart
        return view( 'public.' . $this->template_name . '.product.finish' );
    }

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

    public function register_email( Request $request ) {

        if ( filter_var( $request->email, FILTER_VALIDATE_EMAIL ) ) {
            RegisterEmail::create( [ 'email' => $request->email ] );
        } else {
            Session::flash( 'modal_message_error', 'Kiểm tra không dúng email' );
        }

        return redirect( '/' );
    }

    public function khuyenmaihot() {
        $products = Product::where( [ 'promotion' => 1 ] )->get();

        return view( 'public.' . $this->template_name . '.product.khuyenmaihot', compact( 'products' ) );
    }

    public function deal_moi() {
        $products = Product::limit(9)->get();

        return view( 'public.' . $this->template_name . '.product.deal-moi', compact( 'products' ) );
    }

}
