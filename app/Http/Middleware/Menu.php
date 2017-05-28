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

            // Lấy dữ liệu từ DB
            $db = \App\Menu::orderBy( 'sequence' )->where( 'group_name', $menu->name )->where( 'parent_id', 0 )->get();

            foreach ( $db as $v ) {

                // Nếu menu có menu con
                if ( $v->children() ) {

                    // Lấy dữ liệu menu con
                    $children = $v->children()->get();

                    // Tạo object menu chính
                    $mm       = $menu->add( $v->name, $v->link )->data( 'sequence', $v->sequence );
                    foreach ( $children as $sub_menu ) {
                        // Tạo object menu con
                        $mm->add( $sub_menu->name, $sub_menu->link )->data( 'sequence', $sub_menu->sequence );
                    }
                } else {

                    // Tạo object menu chính
                    $menu->add( $v->name, $v->link )->data( 'sequence', $v->name );
                }
            }
        } );
    }
}
