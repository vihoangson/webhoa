<?php

namespace App\Http\Controllers;

use App\Category;
use App\Option;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use View;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController {
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $template_name = 'hoa';

    public function __construct() {

        // Set template name
        $m = Option::firstOrNew( [ 'name' => 'template_name' ] );
        if ( $m ) {
            $this->template_name = $m->value;
        }

        //<editor-fold desc="banner ">
        $db_banner_top = [
            [
                'url'      => '/',
                'link_img' => '/assets/themes/flower-shoppe/images/slider-imgs/slide1-img.jpg',
                'active'   => false,
            ],
            [
                'url'      => '/',
                'link_img' => '/assets/themes/flower-shoppe/images/slider-imgs/slide2-img.jpg',
                'active'   => true,
            ],
        ];

        $db_banner_ad = [
            [
                'url'      => '/',
                'link_img' => '/assets/themes/flower-shoppe/images/banners/3col-banner1.jpg',
                'active'   => false,
            ],
            [
                'url'      => '/',
                'link_img' => '/assets/themes/flower-shoppe/images/banners/3col-banner2.jpg',
                'active'   => false,
            ],
            [
                'url'      => '/',
                'link_img' => '/assets/themes/flower-shoppe/images/banners/3col-banner3.jpg',
                'active'   => false,
            ],
        ];

        $db_banner_bottom = [
            [
                'url'      => '/',
                'link_img' => '/assets/themes/flower-shoppe/images/banners/1col-banner1.jpg',
                'active'   => false,
            ],
        ];

        View::share( 'db_banner_top', $db_banner_top );
        View::share( 'db_banner_ad', $db_banner_ad );
        View::share( 'db_banner_bottom', $db_banner_bottom );

        //</editor-fold>

        $data_menu_main = [
            'Trang chủ'    => '/',
            'Hoa tươi'     => [
                'Cưới hỏi'             => '/category/2-cuoi-hoi',
                'Sinh nhật'            => '/category/3-sinh-nhat',
                'Khai trương hội nghị' => '/category/4-khai-truong-hoi-nghi',
                'Chúc mừng'            => '/category/5-chuc-mung',
                'Chia buồn'            => '/category/6-chia-buon',
            ],
            'Lan hồ điệp'  => [
                'Từ 1 đến 4 cành'  => '/category/13-tu-1-den-4-canh',
                'Từ 5 đến 10 cành' => '/category/14-tu-5-den-10-canh',
                'Trên 10 cành'     => '/category/15-tren-10-canh',
            ],
            'Chăm sóc hoa' => '/post/177-cham-soc-hoa',
            'Liên hệ'      => '/contact',
        ];

        // Set menu for admin
        if ( ! Auth::guard()->guest() ) {
            $data_menu_main['Admin CP'] = '/admin';
        }

        $data_menu_left = [
            'Bó hoa'    => '/category/8',
            'giỏ hoa'   => '/category/9',
            'bình hoa'  => '/category/10',
            'hộp hoa'   => '/category/11',
            'loại khác' => '/category/12',
        ];

        View::share( 'menu_main', $data_menu_main );
        View::share( 'menu_left', $data_menu_left );

        // Set data for category product
        View::share( 'data_category', Category::all() );

        // Set template_admin_path for view
        View::share( 'template_admin_path', "/assets/tempate_admin/" );

        // Set template_name for view
        View::share( 'template_name', $this->template_name );
    }
}
