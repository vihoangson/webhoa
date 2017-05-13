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

        if ( $request->isMethod( 'post' ) ) {
            $request                = $request->all();
            $code                   = $request['code'];
            $request['setting_key'] = $request['code'] . '_' . $request['setting_key'];
            Setting::create( $request );

            return redirect()->route( 'admin.common.setting', [ 'code' => $code ] );
        } else {
            return redirect()->route( 'admin.common.setting', [ 'code' => $code ] );
        }

    }

    public function delete_setting( $id, Request $request ) {

        if ( $request->isMethod( 'post' ) ) {

            return redirect()->route( 'common.admin.dashboard' );
        }
        if ( Auth::user()->id == 1 ) {
            Setting::where( 'id', $id )->delete();
            set_flash_message( 'Deleted', 'success' );

            return redirect( $_SERVER['HTTP_REFERER'] );
        } else {
            set_flash_message( 'Bạn không có quyền này', 'danger' );

            return redirect()->route( 'common.admin.dashboard.error' );
        }
    }

    public function save( Request $request ) {

        $request = $request->all();
        $code    = $request['code'];

        if ( $request ) {
            foreach ( $request as $k => $item ) {

                $data = Setting::where( 'code', $code )
                               ->where( 'setting_key', $k )
                               ->update( [ 'setting_value' => $item ] );
            }

        }

        return redirect()->route( 'admin.common.setting', [ 'code' => $code ] );
    }
}
