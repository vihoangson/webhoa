<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class MetaHeaderComposer {
    public function __construct() {

    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     *
     * @return void
     */
    public function compose( View $view ) {
        $view->with( 'title_default', get_setting('default_title','string') );
        $view->with( 'keyword_default', get_setting('default_keyword','string') );
        $view->with( 'description_default', get_setting('default_description','string') );
    }

}