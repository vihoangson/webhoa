<?php

namespace App\Http\Controllers\admin;

use App\Menu;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->middleware( 'auth' );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $group_name = Menu::groupBy('group_name')->get();

        return view( 'admin.menu.index' )->with( compact( 'group_name' ) );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_menu(Request $request) {

        $menus = Menu::where("group_name",$request->menu)->where( 'parent_id', 0 )->orderBy( 'group_name', 'sequence' )->get();

        return view( 'admin.menu.list' )->with( compact( 'menus' ) );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'admin.menu.edit' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $menu          = $request->all();
        $c             = new Menu();
        $c->name       = $menu['name'];
        $c->link       = $menu['link'];
        $c->group_name = $menu['group_name'];

        if ( $c->save() ) {
            return redirect( '/admin/menu' );
        }
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
        $menu = Menu::find( $id );

        return view( 'admin.menu.edit' )->with( compact( 'menu' ) );
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
        $menu          = $request->all();
        $c             = Menu::find( $id );
        $c->name       = $menu['name'];
        $c->link       = $menu['link'];
        $c->group_name = $menu['group_name'];

        if ( $c->save() ) {
            return redirect( '/admin/menu' );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $menu = Menu::find( $id );
        $menu->delete();

        return Redirect::back();
    }

    public function sort() {
        $menus = Menu::where( 'parent_id', 0 )->orderBy( 'sequence' )->get();

        return view( 'admin.menu.sort', [
            'menus' => $menus,
        ] );

    }

}
