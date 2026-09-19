<?php
/**
 * TorqTrace theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

function torqtrace_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'torqtrace'),
    ));
}
add_action('after_setup_theme', 'torqtrace_setup');

function torqtrace_enqueue_assets() {
    wp_enqueue_style(
        'torqtrace-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'torqtrace_enqueue_assets');