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
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Collections\RowCollection;
use Maatwebsite\Excel\Facades\Excel;
use Mockery\Exception;
use Route;


class ImportFileController extends Controller {

    private $name_sheet_product = 'product';
    private $name_sheet_category = 'category';

    public function import_file() {

        return view( 'admin.product.import' );

    }

    public function process_import_file( Request $request ) {

        $file = $request->file( "file" );
        if($file==null){
            flash('Không có file')->error();
            return Redirect::back();
        }

        $exten     = ( $file->getClientOriginalExtension() );
        $file_name = "file_" . time() . "." . $exten;
        $rs        = $file->move( storage_path( 'import_file' ), $file_name );
        if ( ! $rs ) {
            return false;
        }

        /** @var RowCollection $m */
        $data_file = Excel::load( $rs->getRealPath() )->get();

        /** @var RowCollection $sheet */
        foreach ( $data_file as $sheet ) {
            switch ( $sheet->getTitle() ) {
                case $this->name_sheet_product:
                    $this->_import_product( $sheet );
                    break;
                case $this->name_sheet_category:
                    $this->_import_category( $sheet );
                    break;
            }
        }
        flash('Success')->success();
        return redirect( route( 'admin.import' ) );
    }

    private function _import_product( $sheet ) {
        foreach ( $sheet as $n ) {
            if ( $n['slug'] == '' ) {
                continue;
            }
            $this->check_data_import( $n );

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
                } else {
                    flash( "Nội dung ô content cả slug " . $product->slug . ' không đúng base64 vui lòng xem hướng dẫn bến dưới' );
                }
            }
            $product->save();

            if ( ! empty( $n['category'] ) ) {
                $array_category    = explode( ',', $n['category'] );
                $array_id_category = [];
                foreach ( $array_category as $value ) {
                    $value = trim( $value );
                    if ( (int) $value == 0 ) {
                        if ( Category::findBySlug( $value ) != null ) {
                            $array_id_category[] = Category::findBySlug( $value )->id;
                        } else {
                            flash( 'Không có nhóm sản phẩm <b>' . $value . '</b> tại dòng slug: <b>'.$product->slug.'</b>' );
                        }
                    } else {
                        $array_id_category[] = $value;
                    }
                }
                if($array_id_category){
                    $product->category()->sync( $array_id_category );
                }
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

    public function process_export_file( Request $request ) {
        $products = Product::all();
        foreach ( $products as $product ) {
            $data[] = [
                'slug'            => $product->slug,
                'name'            => $product->title,
                'main_img'        => $product->obj_main_img->url,
                'price'           => $product->price,
                'price_sale'      => $product->price_sale,
                'date_begin_sale' => $product->date_begin_sale,
                'date_end_sale'   => $product->date_end_sale,
                'brand'           => $product->brand,
                'content'         => $product->content_encode,
                'category'        => $product->categories_as_string,
                'active'          => ( $product->active == 0 ) ? 0 : $product->active,
                'promotion'       => ( $product->promotion == 0 ) ? 0 : $product->promotion,
                'homepage'        => ( $product->homepage == 0 ) ? 0 : $product->homepage,
            ];
        }

        Excel::create( 'Filename' . time(), function ( $excel ) use ( $data ) {
            $excel->sheet( $this->name_sheet_product, function ( $sheet ) use ( $data ) {
                $sheet->fromArray( $data, null, 'A1', true );
            } );
            $excel->sheet( $this->name_sheet_category, function ( $sheet ) use ( $data ) {
                //$sheet->fromArray( $data, null, 'A1', true );
            } );
        } )
            //->export('xls');
             ->download( 'xls' );
    }

    private function check_data_import( $n = [] ) {
        if ( $n == [] ) {
            flash( "Nội dung không đúng" );

            return false;
        }

        if ( trim( $n['slug'] ) == '' ) {
            flash( "Slug không được bỏ trống" );
        }
    }
}
