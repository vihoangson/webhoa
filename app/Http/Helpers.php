<?php

/**
 * @param $code_order
 *
 * @return mixed
 */
function encode_code_order($code_order){
    return $code_order;
    return str_replace( '=', '', base64_encode( "_" . $code_order ) );
}

/**
 * @param $order_code
 */
function decode_code_order($order_code){
    return $order_code;
    $i = 0;
    while ( true ) {
        $string = base64_decode( $order_code );
        if ( preg_match( '/^_(\d+?)$/', $string, $match ) ) {
            break;
        }
        $order_code = $order_code . "=";
        $i ++;
        if ( $i > 5 ) {
            Log::error( "Không tìm thấy order code" );
            abort( 404, 'Không tìm thấy order code' );
            break;
        }
    }
    return $match[1];
}

/**
 *
 * @param string $hash
 *
 * @return bool
 */
if ( ! function_exists( 'is_base64' ) ) {
    function is_base64( $hash ) {
        if ( base64_encode( base64_decode( $hash ) ) === $hash ) {
            return true;
        }

        return false;
    }
}

if ( ! function_exists( 'get_id_or_slug' ) ) {
    function get_id_or_slug( $param ) {
        if ( (int) $param > 0 ) {
            return 'id';
        } else {
            return 'slug';
        }
    }
}

function generate_discount( $percent, $price, $option = 'GET_DISCOUNT' ) {
    $price = (int) str_replace( ",", "", $price );
    if ( $option == 'GET_PRICE' ) {
        return number_format( round( ( ( 100 - $percent ) * (int) $price ) / 100 ) );
    } else {
        return number_format( round( ( $percent * (int) $price ) / 100 ) );
    }
}

function get_setting_page( $key ) {
    return \App\Setting::where( 'setting_key', $key )->first()->setting_value;
}


/**
 *
 *        Phiên bản: 0.1
 *        Tên lớp: BaoKimPayment
 *        Chức năng: Tích hợp thanh toán qua baokim.vn cho các merchant site có đăng ký API
 *                        - Xây dựng URL chuyển thông tin tới baokim.vn để xử lý việc thanh toán cho merchant site.
 *                        - Xác thực tính chính xác của thông tin đơn hàng được gửi về từ baokim.vn.
 *
 */
class BaoKimPayment {
    // URL checkout của baokim.vn
    private $baokim_url = 'https://www.baokim.vn/payment/customize_payment/order';

    // Mã merchante site
    private $merchant_id = '28302';    // Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site

    // Mật khẩu bảo mật
    private $secure_pass = '8c07a6f342a2fb83'; // Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site

    /**
     * Hàm xây dựng url chuyển đến BaoKim.vn thực hiện thanh toán, trong đó có tham số mã hóa (còn gọi là public key)
     *
     * @param $order_id                Mã đơn hàng
     * @param $business                Email tài khoản người bán
     * @param $total_amount            Giá trị đơn hàng
     * @param $shipping_fee            Phí vận chuyển
     * @param $tax_fee                 Thuế
     * @param $order_description       Mô tả đơn hàng
     * @param $url_success             Url trả về khi thanh toán thành công
     * @param $url_cancel              Url trả về khi hủy thanh toán
     * @param $url_detail              Url chi tiết đơn hàng
     *
     * @return url cần tạo
     */
    public function createRequestUrl( $order_id, $business, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail ) {
        // Mảng các tham số chuyển tới baokim.vn
        $params = array(
            'merchant_id'       => strval( $this->merchant_id ),
            'order_id'          => strval( $order_id ),
            'business'          => strval( $business ),
            'total_amount'      => strval( $total_amount ),
            'shipping_fee'      => strval( $shipping_fee ),
            'tax_fee'           => strval( $tax_fee ),
            'order_description' => strval( $order_description ),
            'url_success'       => strtolower( $url_success ),
            'url_cancel'        => strtolower( $url_cancel ),
            'url_detail'        => strtolower( $url_detail ),
        );
        ksort( $params );

        $str_combined       = $this->secure_pass . implode( '', $params );
        $params['checksum'] = strtoupper( md5( $str_combined ) );

        //Kiểm tra  biến $redirect_url xem có '?' không, nếu không có thì bổ sung vào
        $redirect_url = $this->baokim_url;
        if ( strpos( $redirect_url, '?' ) === false ) {
            $redirect_url .= '?';
        } else if ( substr( $redirect_url, strlen( $redirect_url ) - 1, 1 ) != '?' && strpos( $redirect_url, '&' ) === false ) {
            // Nếu biến $redirect_url có '?' nhưng không kết thúc bằng '?' và có chứa dấu '&' thì bổ sung vào cuối
            $redirect_url .= '&';
        }

        // Tạo đoạn url chứa tham số
        $url_params = '';
        foreach ( $params as $key => $value ) {
            if ( $url_params == '' ) {
                $url_params .= $key . '=' . urlencode( $value );
            } else {
                $url_params .= '&' . $key . '=' . urlencode( $value );
            }
        }

        return $redirect_url . $url_params;
    }

    /**
     * Hàm thực hiện xác minh tính chính xác thông tin trả về từ BaoKim.vn
     *
     * @param $_GET chứa tham số trả về trên url
     *
     * @return true nếu thông tin là chính xác, false nếu thông tin không chính xác
     */
    public function verifyResponseUrl( $data_get = array() ) {
        $checksum = $data_get['checksum'];
        unset( $data_get['checksum'] );

        ksort( $data_get );
        $str_combined = $this->secure_pass . implode( '', $data_get );

        // Mã hóa các tham số
        $verify_checksum = strtoupper( md5( $str_combined ) );

        // Xác thực mã của chủ web với mã trả về từ baokim.vn
        if ( $verify_checksum === $checksum ) {
            return true;
        }

        return false;
    }
}

?>