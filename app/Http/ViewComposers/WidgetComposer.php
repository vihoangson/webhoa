<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\View\View;

class WidgetComposer
{
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
        $this->widget_recent_posts($view);
    }

    private function widget_recent_posts(View $view) {
        $posts = Post::all();
        $view->with('widget_recent_posts',$posts);
    }


}