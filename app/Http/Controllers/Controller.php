<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Middleware\Menu;
use App\Option;
use App\Product;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use View;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController {
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $template_name = 'hotdeal';

    public function __construct() {

        $this->run();

    }

    private function run() {
        $this->get_template_name_from_database();

        $this->set_banners();

        $menu = $this->prepare_menu();

        $this->set_variable_general();

        $this->set_best_seller();
    }

    private function prepare_menu() {
        $menu = [];

        return $menu;
    }


    // create $page_title in all view
    protected function setPageTitle( $title ) {

        view()->share( 'page_title', $title );

    }

    private function set_banner_bottom() {
        $db_banner_bottom = [
            [
                'url'      => '/',
                'link_img' => '/assets/themes/flower-shoppe/images/banners/1col-banner1.jpg',
                'active'   => false,
            ],
        ];
        View::share( 'db_banner_bottom', $db_banner_bottom );
    }

    private function set_banner_ad() {
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
        View::share( 'db_banner_ad', $db_banner_ad );
    }

    private function set_banner_top() {
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
        View::share( 'db_banner_top', $db_banner_top );
    }

    private function get_template_name_from_database() {
        // Set template name
        $m = Option::firstOrNew( [ 'name' => 'template_name' ] );
        if ( $m->value ) {
            $this->template_name = $m->value;
        }
    }

    private function set_banners() {
        $this->set_banner_top();
        $this->set_banner_ad();
        $this->set_banner_bottom();
    }

    private function set_variable_general() {
        // Set data for category product
        View::share( 'data_category', Category::all() );

        // Set template_admin_path for view
        View::share( 'template_admin_path', "/assets/tempate_admin/" );

        // Set template_name for view
        View::share( 'template_name', $this->template_name );
    }

    /**
     * @param $group_name
     *
     * @return array
     */
    private function get_data_menu( $group_name ) {

        if ( \Menu::get( $group_name ) == null ) {
            return [];
        }

        $menus = \Menu::get( $group_name )->roots();

        $data_menu = [];
        foreach ( $menus as $menu ) {
            if ( $menu->hasChildren() ) {
                foreach ( $menu->children() as $sub_menu ) {
                    $data_menu[ $menu->title ][ $sub_menu->title ] = $sub_menu->url();
                }
            } else {
                $data_menu[ $menu->title ] = $menu->url();
            }
        }

        return $data_menu;
    }

    private function set_best_seller() {
        // todo: làm điều kiện riêng
        $products = Product::limit( 2 )->get();
        View::share( 'product_best_seller', $products );
    }


}
