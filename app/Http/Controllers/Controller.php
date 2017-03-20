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
        $menu_main = [
            'Trang chủ' => '/',
            'Hoa tươi' => [
                'Cưới hỏi' => '/category/3-cuoi-hoi',
                'Sinh nhật' => '/category/3-sinh-nhat',
                'Khai trương hội nghị' => '"/category/3-khai-truong-hoi-nghi',
                'Chúc mừng' => '/category/3-chuc-mung',
                'Chia buồn' => '/category/3-chia-buon',
            ],
            'Lan hồ điệp' => [
                'Từ 1 đến 4 cành' => '/category/3-cuoi-hoi',
                'Từ 5 đến 10 cành' => '/category/3-sinh-nhat',
                'Trên 10 cành' => '/category/3-khai-truong-hoi-nghi',
            ],
            'Chăm sóc hoa' => '/',
            'Liên hệ' => '/',
        ];

        $menu_left = [
            'Bó hoa' => '2',
            'giỏ hoa' => '3',
            'bình hoa' => '4',
            'hộp hoa' => '5',
            'loại khác' => '6',
        ];

        View::share('menu_main', $menu_main);
        View::share('menu_left', $menu_left);
        View::share('data_category', Category::all());
        View::share('template_path', "/assets/tempates/");
    }
}
