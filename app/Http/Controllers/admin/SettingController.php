<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
use Auth;
use Route;


class SettingController extends Controller {

    public function index( $code = '' ) {

        $this->setPageTitle( 'Setting' );
        if ( ! $code ) {
            $code = 'general';
        }

        $settings = Setting::where( [ 'code' => $code ] )->get();

        return view( 'admin.setting.index' )
            ->with( 'code', $code )
            ->with( 'settings', $settings );
    }

    public function add_setting( Request $request ) {
        $code = '';
        $settings = '';

        return view( 'admin.setting.add_setting' )
            ->with( 'code', $code )
            ->with( 'settings', $settings );
    }

    public function process_add_setting( Request $request ) {
        dd($request->all());

        return redirect('admin.setting.add_setting');
    }

}
