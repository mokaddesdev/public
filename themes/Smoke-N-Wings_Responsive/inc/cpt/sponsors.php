<?php 
/**
 * Register Sponsors Post Type
 * 
 * @package smokewings
 */

if( ! function_exists( "smokewings_sponsor_cpt_register" ) ) {
    function smokewings_sponsor_cpt_register() {
        
        $labels = array(
            'name'                  => __( 'Sponsors', 'smokewings' ),
            'singular_name'         => __( 'Sponsor', 'smokewings' ),
            'add_new'               => __( 'Add New Sponsor', 'smokewings' ),
            'add_new_item'          => __( 'Add New Sponsor', 'smokewings' ),
            'edit_item'             => __( 'Edit Sponsor', 'smokewings' ),
            'new_item'              => __( 'New Sponsor', 'smokewings' ),
            'all_items'             => __( 'All Sponsors', 'smokewings' ),
            'view_item'             => __( 'View Sponsor', 'smokewings' ),
            'search_items'          => __( 'Search Sponsors', 'smokewings' ),
            'not_found'             => __( 'No Sponsors found', 'smokewings' ),
            'not_found_in_trash'    => __( 'No Sponsors found in Trash', 'smokewings' ),
            'menu_name'             => __( 'Sponsors', 'smokewings' )
        );

        $args = array(
            'labels'        => $labels,
            'public'        => true,
            'show_in_rest'  => true,
            'has_archive'   => false,
            'menu_icon'     => 'dashicons-megaphone',
            'supports'      => array( 'title', 'editor' ),
        );

    register_post_type( 'sponsor', $args );
}
add_action( 'init', 'smokewings_sponsor_cpt_register' );
}

