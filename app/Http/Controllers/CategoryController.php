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
        return redirect('/');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        if ( get_id_or_slug( $id ) == 'id' ) {
            $category = Category::find( $id );
        } else {
            $category = Category::findBySlug( $id );
        }
        
        if(!$category){
            return view( 'public.' . $this->template_name . '.layouts.404' );
        }
        $products = $category->product;

        return view( 'public.' . $this->template_name . '.category.list' )->with( compact( 'category', 'products' ) );
    }

}
