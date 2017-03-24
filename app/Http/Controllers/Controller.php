<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $banner_top = [
            [
                'url' => '/',
                'link_img' => '/assets/flower-shoppe/images/slider-imgs/slide1-img.jpg',
                'active' => false,
            ],
            [
                'url' => '/',
                'link_img' => '/assets/flower-shoppe/images/slider-imgs/slide2-img.jpg',
                'active' => true,
            ],
        ];
        View::share('banner_top', $banner_top);

        $data_menu_main = [
            'Trang chủ' => '/',
            'Hoa tươi' => [
                'Cưới hỏi' => '/category/2-cuoi-hoi',
                'Sinh nhật' => '/category/3-sinh-nhat',
                'Khai trương hội nghị' => '/category/4-khai-truong-hoi-nghi',
                'Chúc mừng' => '/category/5-chuc-mung',
                'Chia buồn' => '/category/6-chia-buon',
            ],
            'Lan hồ điệp' => [
                'Từ 1 đến 4 cành' => '/category/13-tu-1-den-4-canh',
                'Từ 5 đến 10 cành' => '/category/14-tu-5-den-10-canh',
                'Trên 10 cành' => '/category/15-tren-10-canh',
            ],
            'Chăm sóc hoa' => '/post/172-cham-soc-hoa',
            'Liên hệ' => '/contact',
        ];

        $data_menu_left = [
            'Bó hoa' => '8',
            'giỏ hoa' => '9',
            'bình hoa' => '10',
            'hộp hoa' => '11',
            'loại khác' => '12',
        ];

        View::share('menu_main', $data_menu_main);
        View::share('menu_left', $data_menu_left);

        View::share('data_category', Category::all());
        View::share('template_path', "/assets/tempates/");
    }
}
