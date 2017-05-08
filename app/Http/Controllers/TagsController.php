<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TagsController extends Controller {
    public function index() {
        $tags = \App\Tags::all();
        //dd($tags);

//        $tag = new \App\Tags;
//        $tag->tag = "son";
//        $tag->save();

        echo view( 'homepage' );

    }
}
