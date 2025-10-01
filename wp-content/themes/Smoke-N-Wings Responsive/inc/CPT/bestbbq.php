<?php 
/**
 * Register Best BBQ Post Type
 */

function smokeWings_best_bbq_cpt() {
    $labels = array(
        'name'                  => __('Best BBQ', 'smokeWings'),
        'singular_name'         => __('BBQ', 'smokeWings'),
        'add_new'               => __('Add New BBQ', 'smokeWings'),
        'add_new_item'          => __('Add New BBQ', 'smokeWings'),
        'edit_item'             => __('Edit BBQ', 'smokeWings'),
        'new_item'              => __('New BBQ', 'smokeWings'),
        'all_items'             => __('All BBQs', 'smokeWings'),
        'view_item'             => __('View BBQ', 'smokeWings'),
        'search_items'          => __('Search BBQs', 'smokeWings'),
        'not_found'             => __('No BBQs found', 'smokeWings'),
        'not_found_in_trash'    => __('No BBQs found in Trash', 'smokeWings'),
        'menu_name'             => __('Best BBQ', 'smokeWings')
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'show_in_rest'  => true,  
        'has_archive'   => true,  
        'menu_icon'     => 'dashicons-format-gallery',
        'supports'      => array('title','editor','custom-fields'),
        'rewrite'       => array('slug' => 'best-bbq')
    );

    register_post_type('best_bbq', $args);
}
add_action('init', 'smokeWings_best_bbq_cpt');