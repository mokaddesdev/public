<?php 
/**
 * Register Sponsors Post Type
 */

function smokeWings_sponsor_cpt() {
    $labels = array(
        'name'                  => __('Sponsors', 'smokeWings'),
        'singular_name'         => __('Sponsor', 'smokeWings'),
        'add_new'               => __('Add New Sponsor', 'smokeWings'),
        'add_new_item'          => __('Add New Sponsor', 'smokeWings'),
        'edit_item'             => __('Edit Sponsor', 'smokeWings'),
        'new_item'              => __('New Sponsor', 'smokeWings'),
        'all_items'             => __('All Sponsors', 'smokeWings'),
        'view_item'             => __('View Sponsor', 'smokeWings'),
        'search_items'          => __('Search Sponsors', 'smokeWings'),
        'not_found'             => __('No Sponsors found', 'smokeWings'),
        'not_found_in_trash'    => __('No Sponsors found in Trash', 'smokeWings'),
        'menu_name'             => __('Sponsors', 'smokeWings')
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'show_in_rest'  => true,
        'has_archive'   => false,
        'menu_icon'     => 'dashicons-megaphone',
        'supports'      => array('title', 'editor'),
    );

    register_post_type('sponsor', $args);
}
add_action('init', 'smokeWings_sponsor_cpt');
