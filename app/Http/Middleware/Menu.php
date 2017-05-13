<?php

namespace App\Http\Middleware;

use App\Post;
use Closure;

class Menu {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle( $request, Closure $next ) {

        $menu_names = [ 'MainMenu', 'Menu_Admin', 'LeftMenu' ];
        foreach ( $menu_names as $menu_name ) {
            $this->make_menu( $menu_name );
        }

        return $next( $request );
    }

    private function make_menu( $menu_name ) {
        \Menu::make( $menu_name, function ( $menu ) {
            $db = \App\Menu::where( 'group_name', $menu->name )->where( 'parent_id', 0 )->get();
            foreach ( $db as $v ) {
                if ( $v->children() ) {
                    $children = $v->children()->get();
                    $mm       = $menu->add( $v->name, $v->link );
                    foreach ( $children as $sub_menu ) {
                        $mm->add( $sub_menu->name, $sub_menu->link );
                    }
                } else {
                    $menu->add( $v->name, $v->link );
                }
            }
        } );
    }
}
