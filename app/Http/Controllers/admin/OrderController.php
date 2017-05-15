<?php

namespace App\Http\Controllers\admin;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $status = 0 ) {

        if ( $status == - 1 ) {
            $orders = Order::orderBy( 'id', 'desc' )->paginate();
        } else {
            $orders = Order::orderBy( 'id', 'desc' )->where( 'status', $status )->paginate();
        }

        $count_menu_array = (Order::select(\DB::raw('count(*) as count, status'))->groupBy('status')->get()->toArray());
        foreach($count_menu_array as $row){
            $count_menu[$row['status']] = $row['count'];
        }

        return view( 'admin.order.index' )
            ->with( 'orders', $orders )
            ->with( 'status', $status )
            ->with( 'count_menu', $count_menu )
            ;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change_status( Request $request ) {

        $order         = Order::find( $request->id );
        $order->status = $request->status;
        $order->save();

        flash( "done" )->success();

        return \Redirect::back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        //
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
        //
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
        //
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
