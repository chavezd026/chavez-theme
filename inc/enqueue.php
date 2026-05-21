<?php

function chavez_enqueue_assets() {

    wp_enqueue_style(
        'chavez-tailwind',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        filemtime(get_template_directory() . '/assets/css/output.css')
    );

    wp_enqueue_script(
        'chavez-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'chavez_enqueue_assets');