<?php

function chavez_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('menus');

    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
        'social'  => 'Social Menu',
    ]);
}

add_action('after_setup_theme', 'chavez_theme_setup');