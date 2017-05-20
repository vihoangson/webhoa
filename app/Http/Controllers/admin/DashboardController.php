<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\CategoryAllocation;
use App\Image;
use App\Option;
use App\Post;
use App\Product;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
        //$this->middleware('auth');
    }

    public function index() {
        return view( 'admin.dashboard.index' );
    }

    public function logout() {
        Auth::logout();

        return redirect( '/admin/' );
    }

    public function setting() {
        $directory              = resource_path() . '/views/public';
        $templates_name_options = \File::directories( $directory );
        foreach ( $templates_name_options as &$file ) {
            preg_match( '/(\\\|\/)([a-z-]+)$/', $file, $match );
            $file = $match[2];
        }
        unset( $file );
        $tempalte_name = Option::firstOrNew( [ 'name' => 'template_name' ] )->value;

        return view( 'admin.dashboard.setting' )->with( compact( 'tempalte_name', 'templates_name_options' ) );
    }

    public function save_setting( Request $request ) {
        $template_name     = $request->template_name;
        $obj_option        = Option::firstOrNew( [ 'name' => 'template_name' ] );
        $obj_option->value = $template_name;
        if ( $obj_option->save() ) {
            return redirect( '/admin/setting' );
        }
    }
}
