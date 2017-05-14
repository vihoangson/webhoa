<?php

namespace App\Http\Controllers\common;

use App\Image;
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
        preg_match( '/\/([\w_-]+?)$/', $post_data['backlink'], $match );
        $product_id               = ( Product::findBySlug( $match[1] )->id );
        $post_data['star']        = (int) $post_data['starvote'] + 1;
        $post_data['note_review'] = $post_data['note-review'];
        $post_data['product_id']  = $product_id;
        Review::create( $post_data );

        return redirect( $post_data['backlink'] );
    }

    /**
     * @param Request $request
     */
    public function up_photo_ajax( Request $request ) {


        /**
         * Upload in editor
         */
        if ( isset( $request->image_editor ) ) {

            // todo: Bỏ list ext file ra ngoài config dùng chung
            // Lọc file
            if ( ! in_array( strtolower( $request->image_editor->getClientOriginalExtension() ), [
                'jpg',
                'png',
                'gif',
            ] )
            ) {

            }

            $extension       = $request->image_editor->getClientOriginalExtension();
            $destinationPath = 'uploads'; // upload path
            $fileName        = time() . "_" . rand( 11111, 99999 ) . '.' . $extension; // renameing image_editor
            $request->image_editor->move( $destinationPath, $fileName );
            header( 'Content-Type: application/json' );
            echo $destinationPath . '/' . $fileName;
        }
    }

    public function update_ajax( \Illuminate\Http\Request $requests ) {
        switch ( $requests->process ) {
            case 'change_main_img':
                $p           = Product::find( $requests->pid );
                $p->main_img = $requests->id;
                $p->save();
                break;
            case 'delete_img_product':
                $img = Image::find( $requests->id );
                $img->product()->detach();

                return response()->json( [
                    'status' => $img->delete(),
                    'id'     => $requests->id,
                ] );
                break;
            case 'sort_group':
                $db = json_decode( $requests->db );
                $i  = 0;
                foreach ( $db as $group ) {
                    echo $group->id;
                    $parent            = Group::find( $group->id );
                    $parent->parent_id = 0;
                    $parent->sequence  = $i;
                    $i ++;
                    $parent->save();
                    if ( isset( $group->children ) ) {
                        foreach ( $group->children as $group2 ) {
                            $child            = Group::find( $group2->id );
                            $child->parent_id = $parent->id;
                            $child->sequence  = $i;
                            $i ++;
                            $child->save();
                        }
                    }

                }

                return response()->json( [
                    'status' => true,
                    'id'     => $requests->db,
                ] );
                break;
            case 'sort_menu':
                $db = json_decode( $requests->db );
                $i  = 0;
                foreach ( $db as $menu ) {
                    echo $menu->id;
                    $parent            = menu::find( $menu->id );
                    $parent->parent_id = 0;
                    $parent->sequence  = $i;
                    $i ++;
                    $parent->save();
                    if ( isset( $menu->children ) ) {
                        foreach ( $menu->children as $menu2 ) {
                            $child            = Menu::find( $menu2->id );
                            $child->parent_id = $parent->id;
                            $child->sequence  = $i;
                            $i ++;
                            $child->save();
                        }
                    }

                }

                return response()->json( [
                    'status' => true,
                    'id'     => $requests->db,
                ] );
                break;
        }

    }

    public function payment_baokim(){
        $baokim = new \BaoKimPayment();
        /**
         * Hàm xây dựng url chuyển đến BaoKim.vn thực hiện thanh toán, trong đó có tham số mã hóa (còn gọi là public key)
         * @param $order_id				Mã đơn hàng
         * @param $business 			Email tài khoản người bán
         * @param $total_amount			Giá trị đơn hàng
         * @param $shipping_fee			Phí vận chuyển
         * @param $tax_fee				Thuế
         * @param $order_description	Mô tả đơn hàng
         * @param $url_success			Url trả về khi thanh toán thành công
         * @param $url_cancel			Url trả về khi hủy thanh toán
         * @param $url_detail			Url chi tiết đơn hàng
         * @return url cần tạo
         */
        $order_id          = '2231';
        $business          = 'vn_sos@yahoo.com';
        $total_amount      = '500000';
        $shipping_fee      = '0';
        $tax_fee           = '0';
        $order_description = '123123';
        $url_success       = 'http://xemngaymuangay.vn';
        $url_cancel        = 'http://xemngaymuangay.vn';
        $url_detail        = 'http://xemngaymuangay.vn';

        echo $baokim->createRequestUrl($order_id, $business, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail);
    }
}
