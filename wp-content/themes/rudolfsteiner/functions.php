<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');

    register_nav_menus([
        'top-menu' => __('Top Menu Location'),
        'footer' => __('Footer Menu Location'),
        'klass' => __('Page Menu Location'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script ( 'loader', get_template_directory_uri() . '/assets/js/loader.js' );
});

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');