<?php

function chavez_enqueue_assets() {

    wp_enqueue_style(
        'chavez-tailwind',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        filemtime(get_template_directory() . '/assets/css/output.css')
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
        [],
        null
    );

    wp_enqueue_script(
        'chavez-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );

    wp_enqueue_script(
        'canvas-cursor',
        get_template_directory_uri() . '/assets/js/canvas-cursor.js',
        [],
        filemtime(get_template_directory() . '/assets/js/canvas-cursor.js'),
        true
    );

    wp_enqueue_script(
        'magnetic-button',
        get_template_directory_uri() . '/assets/js/magnetic-button.js',
        [],
        filemtime(get_template_directory() . '/assets/js/magnetic-button.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'chavez_enqueue_assets');