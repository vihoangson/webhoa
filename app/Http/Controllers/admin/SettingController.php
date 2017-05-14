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
        $code     = '';
        $settings = '';

        return view( 'admin.setting.add_setting' )
            ->with( 'code', $code )
            ->with( 'settings', $settings );
    }

    public function process_add_setting( Request $request ) {
        $setting                = new Setting;
        $setting->code          = 'general';
        $setting->setting_key   = 1;
        $setting->setting_value = $request->get( 'content' );
        $setting->save();
        die;

        return redirect( 'admin.setting.add_setting' );
    }

}
