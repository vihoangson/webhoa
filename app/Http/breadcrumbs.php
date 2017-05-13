<?php
Breadcrumbs::register( 'home', function ( $breadcrumbs ) {
    $breadcrumbs->push( 'Trang chủ', route( 'home' ) );
} );

Breadcrumbs::register( 'contact', function ( $breadcrumbs ) {
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( 'Liên hệ', '/contact' );
} );

Breadcrumbs::register( 'product', function ( $breadcrumbs ) {
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( 'Sản phẩm', '/product' );
} );
Breadcrumbs::register( 'checkout', function ( $breadcrumbs ) {
    $breadcrumbs->parent( 'product' );
    $breadcrumbs->push( 'Đặt hàng', '/checkout' );
} );
Breadcrumbs::register( 'product_detail', function ( $breadcrumbs, $page = null ) {
    $breadcrumbs->parent( 'product' );
    $breadcrumbs->push( $page, '/checkout' );
} );
Breadcrumbs::register( 'category', function ( $breadcrumbs, $page = null ) {
    $breadcrumbs->parent( 'product' );
    if ( $page ) {
        $breadcrumbs->push( $page, '/checkout' );
    }
} );

Breadcrumbs::register( 'post_detail', function ( $breadcrumbs, $page = null ) {
    $breadcrumbs->parent( 'home' );
    if ( $page ) {
        $breadcrumbs->push( $page, '/checkout' );
    }
} );
