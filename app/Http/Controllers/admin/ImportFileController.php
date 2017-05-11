<?php

namespace App\Http\Controllers\admin;

use App\Image;
use App\Product;
use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
use Auth;
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

        $m = \Excel::load( $rs->getRealPath() )->get();
        foreach ( $m as $n ) {
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
            $product->save();

            // Kiểm tra có main img không
            if ( isset( $product->main_img ) && $product->main_img > 0 && $image = $product->image()->find( $product->main_img ) ) {
                // Kiểm tra có hình không
                if ( ! is_array( $n['main_img'] ) ) {
                    // Import 1 hình
                    $image->url = $n['main_img'];
                    $image->save();
                } else {
                    // Import nhiều hình 1 lúc
                    $image->url = $n['main_img'][0];
                    $image->save();
                }
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
}
