<?php

function chavez_register_projects_cpt() {

    $labels = [
        'name'          => 'Projects',
        'singular_name' => 'Project',
        'add_new_item'  => 'Add New Project',
        'edit_item'     => 'Edit Project',
    ];

    register_post_type('project', [
        'labels'       => $labels,
        'public'       => true,
        'menu_icon'    => 'dashicons-portfolio',
        'has_archive'  => true,
        'rewrite'      => [
            'slug' => 'projects'
        ],
        'supports'     => [
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        ],
        'show_in_rest' => true,
    ]);
}

add_action('init', 'chavez_register_projects_cpt');


function chavez_project_taxonomies() {

    register_taxonomy(
        'project_category',
        'project',
        [
            'label'        => 'Categories',
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite'      => [
                'slug' => 'project-category'
            ]
        ]
    );

    register_taxonomy(
        'project_tag',
        'project',
        [
            'label'        => 'Tags',
            'hierarchical' => false,
            'show_in_rest' => true,
            'rewrite'      => [
                'slug' => 'project-tag'
            ]
        ]
    );

}

add_action('init', 'chavez_project_taxonomies');