<?php 
/**
 * Register Best BBQ Custpom Post Type
 * 
 * @package  smokewings
 */

if( ! function_exists( "smokewings_best_bbq_cpt_register" ) ) {
function smokewings_best_bbq_cpt_register() {
    $labels = array(
        'name'                  => __( 'Best BBQ', 'smokewings' ),
        'singular_name'         => __( 'BBQ', 'smokewings' ),
        'add_new'               => __( 'Add New BBQ', 'smokewings' ),
        'add_new_item'          => __( 'Add New BBQ', 'smokewings' ),
        'edit_item'             => __( 'Edit BBQ', 'smokewings' ),
        'new_item'              => __( 'New BBQ', 'smokewings' ),
        'all_items'             => __( 'All BBQs', 'smokewings' ),
        'view_item'             => __( 'View BBQ', 'smokewings' ),
        'search_items'          => __( 'Search BBQs', 'smokewings' ),
        'not_found'             => __( 'No BBQs found', 'smokewings' ),
        'not_found_in_trash'    => __( 'No BBQs found in Trash', 'smokewings' ),
        'menu_name'             => __( 'Best BBQ', 'smokewings' )
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'show_in_rest'  => true,  
        'has_archive'   => true,  
        'menu_icon'     => 'dashicons-format-gallery',
        'supports'      => array( 'title','editor' ),
        'rewrite'       => array( 'slug' => 'best-bbq' ),
    );

    register_post_type( 'best_bbq', $args );
}

add_action( 'init', 'smokewings_best_bbq_cpt_register' );
}