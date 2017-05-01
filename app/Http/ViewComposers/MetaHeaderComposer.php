<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class MetaHeaderComposer
{
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
        $view->with('title_default','Xem Ngay Mua Ngay');
        $view->with('keyword_default','Xem Ngay Mua Ngay');
        $view->with('description_default','Xem Ngay Mua Ngay');
    }

}