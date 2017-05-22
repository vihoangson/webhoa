<?php

namespace App\Http\ViewComposers;

use App\Post;
use App\Product;
use App\Tag;
use Illuminate\View\View;

class WidgetComposer {
    /**
     * Create a new profile composer.
     *
     * @param  UserRepository $users
     *
     * @return void
     */
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
        $this->widget_recent_posts( $view );
        $this->widget_tags( $view );
        $this->widget_promotion_product( $view );

    }

    private function widget_recent_posts( View $view ) {
        $posts = Post::limit( 3 )->get();
        $view->with( 'widget_recent_posts', $posts );
    }

    private function widget_tags( View $view ) {
        $tags = Tag::limit( 3 )->get();
        $view->with( 'widget_tags', $tags );
    }

    private function widget_promotion_product( View $view ) {
        $promotion_product = Product::where( 'promotion', 1 )->limit(3)->get();
        $view->with( 'widget_promotion_product', $promotion_product );
    }
}