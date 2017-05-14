<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
use Auth;
use Illuminate\Support\Facades\Redirect;
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

    public function edit_setting( $id = 0, Request $request ) {
        $setting = Setting::find( $id );


        return view( 'admin.setting.add_setting' )
            ->with( 'setting', $setting );
    }

    public function process_edit_setting( Request $request ) {
        $id                     = $request->id;
        $setting                = Setting::find( $id );
        $setting->code          = 'general';
        $setting->setting_key   = $request->get( 'key' );
        $setting->setting_value = $request->get( 'value' );
        $setting->save();

        return redirect( route( 'admin.setting' ) );
    }

    public function process_add_setting( Request $request ) {

        if ( Setting::where( 'setting_key', $request->get( 'key' ) )->count() != 0 ) {
            flash( 'Key đã bị trùng' )->error();

            return Redirect::back();
        }
        $setting                = new Setting;
        $setting->code          = 'general';
        $setting->setting_key   = $request->get( 'key' );
        $setting->setting_value = $request->get( 'value' );
        $setting->save();

        return redirect( route( 'admin.setting' ) );
    }

    public function destroy( $id ) {
        Setting::find( $id )->delete();

        return Redirect::back();
    }
}
