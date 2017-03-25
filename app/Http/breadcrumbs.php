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
Breadcrumbs::register('contact2', function($breadcrumbs)
{
    $breadcrumbs->parent('contact');
    $breadcrumbs->push('Contact2', '/contact2');
});