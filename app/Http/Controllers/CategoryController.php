<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return redirect( '/' );
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request, $id ) {
        $params = [
            'show_category' => [ 'id' => $id ],
        ];

        return $this->process_show_cat( $request, $params );
    }

    public function khuyenmaihot( Request $request ) {
        $params = [
            'show_khuyenmai' => true,
        ];

        return $this->process_show_cat( $request, $params );
    }

    /**
     * @param Request $request
     * @param         $params
     *
     * @return $this
     */
    private function process_show_cat( Request $request, $params ) {

        if ( isset( $params['show_category'] ) ) {
            $id = $params['show_category']['id'];
            if ( get_id_or_slug( $id ) == 'id' ) {
                $category = Category::find( $id );
            } else {
                $category = Category::findBySlug( $id );
            }
            if ( ! $category ) {
                return view( 'public.' . $this->template_name . '.layouts.404' );
            }
            $products_obj = $category->product();
        }


        if ( isset( $params['show_khuyenmai'] ) ) {
            $category             = new Category();
            $category->name       = 'Khuyến mãi hot';
            $category->keyword    = get_setting( 'default_keyword' );
            $category->descripton = get_setting( 'default_descripton' );
            $products_obj         = Product::where( 'active', 1 );

        }

        switch ( $request->get( 'sort' ) ) {

            case 'by-price':
                $type_sort = 'giá tăng dần';
                $products_obj->orderBy( 'price' );
                break;
            case 'by-price-desc':
                $type_sort = 'giá giảm dần';
                $products_obj->orderBy( 'price', 'desc' );
                break;
            default:
                $type_sort = 'tên';
                $products_obj->orderBy( 'title' );
                break;
        }

        switch ( $request->get( 'show' ) ) {

            case 'th-horizontal':
                $type_show = 'th-horizontal';
                break;
            default:
                $type_show = 'th-list';
                break;
        }

        $products = $products_obj->get();

        return view( 'public.' . $this->template_name . '.category.list' )->with( compact( 'category', 'products', 'type_sort', 'type_show' ) );
    }

}
