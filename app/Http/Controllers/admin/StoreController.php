<?php
namespace App\Http\Controllers\admin;

use App\Store;
use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Route;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $stores = Store::get();

        switch ( $request->show ) {
            case "all":
                break;
            case "close":
                $stores = $stores->where( 'active', 0 );
                break;
            default:
                $stores = $stores->where( 'active', 1 );
                break;
        }

        return view( 'admin.store.index' )
            ->with( 'stores', $stores );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'admin.store.edit' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $data = $request->all();

        Store::create( $data );
        flash( "Đã save" )->success();

        return Redirect::route( 'admin.store.index' );
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find( $id );

        return view( 'admin.store.edit' )
            ->with( 'store', $store );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $data = $request->all();
        if ( ! isset( $request->active ) ) {
            $data['active'] = 0;
        }
        Store::updateOrCreate( [ 'id' => $id ], $data );
        flash( "Đã save" )->success();

        return Redirect::route( 'admin.store.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();
        return Redirect::back();
    }
}
