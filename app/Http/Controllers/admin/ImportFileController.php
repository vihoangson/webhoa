<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Image;
use App\Product;
use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
use Auth;
use Maatwebsite\Excel\Collections\RowCollection;
use Route;


class ImportFileController extends Controller {


    public function import_file() {

        return view( 'admin.product.import' );

    }

    public function process_import_file( Request $request ) {

        $file = $request->file( "file" );

        $exten     = ( $file->getClientOriginalExtension() );
        $file_name = "file_" . time() . "." . $exten;
        $rs        = $file->move( storage_path( 'import_file' ), $file_name );
        if ( ! $rs ) {
            return false;
        }

        /** @var RowCollection $m */
        $data_file = \Excel::load( $rs->getRealPath() )->get();

        /** @var RowCollection $sheet */
        foreach ( $data_file as $sheet ) {
            switch ( $sheet->getTitle() ) {
                case "product":
                    $this->_import_product( $sheet );
                    break;
                case "category":
                    $this->_import_category( $sheet );
                    break;
            }
        }

        return redirect( route( 'admin.import' ) );
    }

    private function _import_product( $sheet ) {
        foreach ( $sheet as $n ) {
            if ( $n['slug'] == '' ) {
                continue;
            }

            if ( ! ( $product = Product::findBySlug( $n['slug'] ) ) ) {
                $product       = new Product();
                $product->slug = $n['slug'];
            }
            $product->date_begin_sale = $n['date_begin_sale'];
            $product->date_end_sale   = $n['date_end_sale'];
            $product->price           = $n['price'];
            $product->price_sale      = $n['price_sale'];
            $product->title           = $n['name'];
            $product->active          = $n['active'];
            $product->brand           = $n['brand'];
            $product->homepage        = $n['homepage'];
            $product->promotion       = $n['promotion'];

            if ( trim( $n['content'] ) != "" ) {
                if ( is_base64( $n['content'] ) ) {
                    $product->content = base64_decode( $n['content'] );
                }else{
                    $product->content = $n['content'];
                }
            }
            $product->save();

            if ( ! empty( $n['category'] ) ) {
                $array_category    = explode( ',', $n['category'] );
                $array_id_category = [];
                foreach ( $array_category as $value ) {
                    $value = trim( $value );
                    if ( (int) $value == 0 ) {
                        $array_id_category[] = Category::findBySlug( $value )->id;
                    } else {
                        $array_id_category[] = $value;
                    }
                }

                $product->category()->sync( $array_id_category );
            }

            $n['main_img'] = preg_replace( '/(\\\)/', "/", $n['main_img'] );
            $n['main_img'] = preg_replace( '/^(\/)/', "", $n['main_img'] );
            // Kiểm tra có main img không
            if ( isset( $product->main_img ) && $product->main_img > 0 && $image = $product->obj_main_img ) {
                // Kiểm tra có hình không

                // Import 1 hình
                $image->url = $n['main_img'];
                $image->save();
            } else {
                $image      = new Image();
                $image->url = $n['main_img'];
                $image->save();
                $product->image()->attach( $image );
                $product->main_img = $image->id;
                $product->save();
            }
        }
    }

    private function _import_category( $sheet ) {
        foreach ( $sheet as $n ) {
            if ( $n['slug'] == '' ) {
                continue;
            }

            if ( ! ( $category = Category::findBySlug( $n['slug'] ) ) ) {
                $category       = new Category();
                $category->slug = $n['slug'];
            }
            $category->name = $n['name'];
            $category->save();
        }
    }
}
