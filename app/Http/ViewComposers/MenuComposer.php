<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $this->set_menu_main($view);
        $this->set_menu_left($view);
    }

    private function set_menu_main(View $view) {
        $data_menu_main = $this->get_data_menu( 'MainMenu' );

        // Set menu for admin
        if ( ! \Auth::guard()->guest() ) {
            $data_menu_main['Admin CP'] = '/admin';
        }

        $view->with( 'menu_main', $data_menu_main );
    }

    private function set_menu_left(View $view) {
        // Menu cột bên trái
        $data_menu_left = $this->get_data_menu( 'LeftMenu' );

        $view->with( 'menu_left', $data_menu_left );
    }

    /**
     * @param $group_name
     *
     * @return array
     */
    private function get_data_menu( $group_name ) {

        if(\Menu::get( $group_name ) == null){
            return [];
        }

        $menus = \Menu::get( $group_name )->roots();

        $data_menu = [];
        foreach ( $menus as $menu ) {
            if ( $menu->hasChildren() ) {
                foreach ( $menu->children() as $sub_menu ) {
                    $data_menu[ $menu->title ][ $sub_menu->title ] = $sub_menu->url();
                }
            } else {
                $data_menu[ $menu->title ] = $menu->url();
            }
        }

        return $data_menu;
    }
}