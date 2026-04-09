<?php

/**
 * Register FAQ's custom post type.
 */

function smokeWings_faqs_register()
{
      $labels = array(
        'name'                  => __('FAQ section', 'smokeWings'),
        'singular_name'         => __('FAQ', 'smokeWings'),
        'add_new'               => __('Add New FAQ', 'smokeWings'),
        'add_new_item'          => __('Add New FAQ', 'smokeWings'),
        'edit_item'             => __('Edit FAQ', 'smokeWings'),
        'new_item'              => __('New FAQ', 'smokeWings'),
        'all_items'             => __('All FAQs', 'smokeWings'),
        'view_item'             => __('View FAQ', 'smokeWings'),
        'search_items'          => __('Search FAQs', 'smokeWings'),
        'not_found'             => __('No FAQs found', 'smokeWings'),
        'not_found_in_trash'    => __('No FAQs found in Trash', 'smokeWings'),
        'menu_name'             => __('FAQs', 'smokeWings')
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('Custom post type for homepage FAQ', 'smokeWings'),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'faqs'),
        'capability_type'       => 'post',
        'has_archive'           => false,
        'hierarchical'          => false,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-info',
         'show_in_rest'       => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        )
    );
    register_post_type('faqs', $args);
}
add_action('init', 'smokeWings_faqs_register');
