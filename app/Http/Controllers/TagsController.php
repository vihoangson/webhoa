<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TagsController extends Controller {
    public function index() {
        $tags = \App\Tags::all();

        echo view( 'homepage' );

    }
}
