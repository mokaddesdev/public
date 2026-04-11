<?php
/**
 * Register FAQ's Custom Post Type.
 * 
 * @package smokewings
 */

if ( ! function_exists( "smokewings_faqs_cpt_register" ) ) {
    function smokewings_faqs_cpt_register()
    {
        $labels = array(
        'name'                  => __( 'FAQ section', 'smokewings' ),
        'singular_name'         => __( 'FAQ', 'smokewings' ),
        'add_new'               => __( 'Add New FAQ', 'smokewings' ),
        'add_new_item'          => __( 'Add New FAQ', 'smokewings' ),
        'edit_item'             => __( 'Edit FAQ', 'smokewings' ),
        'new_item'              => __( 'New FAQ', 'smokewings' ),
        'all_items'             => __( 'All FAQs', 'smokewings' ),
        'view_item'             => __( 'View FAQ', 'smokewings' ),
        'search_items'          => __( 'Search FAQs', 'smokewings' ),
        'not_found'             => __( 'No FAQs found', 'smokewings' ),
        'not_found_in_trash'    => __( 'No FAQs found in Trash', 'smokewings' ),
        'menu_name'             => __( 'FAQs', 'smokewings' ),
        );

        $args = array(
        'labels'                => $labels,
        'description'           => __( 'Custom post type for homepage FAQ', 'smokewings' ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'faqs' ),
        'capability_type'       => 'post',
        'has_archive'           => false,
        'hierarchical'          => false,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-info',
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        );

        register_post_type( 'faqs', $args );
        }

    add_action( 'init', 'smokewings_faqs_cpt_register' );
}

