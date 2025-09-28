<?php 
/**
 * Register Gallery Post Type
 */

function smokeWings_gallery_cpt() {
    $labels = array(
        'name'                  => __('Galleries', 'smokeWings'),
        'singular_name'         => __('Gallery', 'smokeWings'),
        'add_new'               => __('Add New Gallery', 'smokeWings'),
        'add_new_item'          => __('Add New Gallery', 'smokeWings'),
        'edit_item'             => __('Edit Gallery', 'smokeWings'),
        'new_item'              => __('New Gallery', 'smokeWings'),
        'all_items'             => __('All Galleries', 'smokeWings'),
        'view_item'             => __('View Gallery', 'smokeWings'),
        'search_items'          => __('Search Galleries', 'smokeWings'),
        'not_found'             => __('No Galleries found', 'smokeWings'),
        'not_found_in_trash'    => __('No Galleries found in Trash', 'smokeWings'),
        'menu_name'             => __('Galleries', 'smokeWings')
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'show_in_rest'  => true,
        'has_archive'   => false,
        'menu_icon'     => 'dashicons-format-gallery',
        'supports'      => array('title', 'editor'),
    );

    register_post_type('blog_gallery', $args);
}
add_action('init', 'smokeWings_gallery_cpt');
