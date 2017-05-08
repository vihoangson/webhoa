<?php

namespace App\Http\Controllers\admin;

use App\Group;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GroupController extends Controller {
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

        $groups = Group::where( 'parent_id', 0 )->orderBy( 'sequence' )->get();

        return view( 'admin.group.index' )->with( compact( 'groups' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'admin.group.edit' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $group = $request->all();
        if ( Group::create( $group ) ) {
            return redirect( '/admin/group' );
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
        $group = Group::find( $id );

        return view( 'admin.group.edit' )->with( compact( 'group' ) );
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
        $group   = $request->all();
        $c       = Group::find( $id );
        $c->name = $group['name'];
        if ( $c->save() ) {
            return redirect( '/admin/group' );
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
        $group = Group::find( $id );
        $group->post()->detach();
        $group->delete();

        return redirect( '/admin/group' );
    }

    public function sort() {
        $groups = Group::where( 'parent_id', 0 )->orderBy( 'sequence' )->get();

        return view( 'admin.group.sort', [
            'groups' => $groups,
        ] );

    }

}
