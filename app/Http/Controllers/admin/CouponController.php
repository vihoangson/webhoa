<?php

namespace App\Http\Controllers\admin;

use App\Coupon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CouponController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $coupons = Coupon::paginate();

        return view( 'admin.coupon.coupon_index' )
            ->with( 'coupons', $coupons );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'admin.coupon.edit' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $data = $request->all();
        if(Coupon::where('code',$data['code'])->get()->count()!=0){
            flash("Code đã tồn tại trong hệ thống vui lòng chọn code khác")->error();
            return Redirect::back();
        }
        Coupon::create( $request->all() );
        flash("Đã save")->success();
        return Redirect::route('admin.coupon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $coupon = Coupon::find($id );
        return view( 'admin.coupon.edit' )
            ->with('coupon',$coupon)
            ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        Coupon::updateOrCreate(['id'=>$id],$request->all());
        flash("Đã save")->success();
        return Redirect::route('admin.coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        //
    }
}
