<?php
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', '/contact');
});

Breadcrumbs::register('product', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Product', '/product');
});
Breadcrumbs::register('checkout', function($breadcrumbs)
{
    $breadcrumbs->parent('product');
    $breadcrumbs->push('Checkout', '/checkout');
});
Breadcrumbs::register('product_detail', function($breadcrumbs,$page=null)
{
    $breadcrumbs->parent('product');
    $breadcrumbs->push($page, '/checkout');
});
Breadcrumbs::register('category', function($breadcrumbs,$page=null)
{
    $breadcrumbs->parent('product');
    if($page){
        $breadcrumbs->push($page, '/checkout');
    }
});

Breadcrumbs::register('post_detail', function($breadcrumbs,$page=null)
{
    $breadcrumbs->parent('home');
    if($page){
        $breadcrumbs->push($page, '/checkout');
    }
});
