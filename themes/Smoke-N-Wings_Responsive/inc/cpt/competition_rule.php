<?php
/**
 *
 * Register Custom Post Type: Competition Rules
 * 
 * @package smokewings
 */

if ( ! function_exists( "smokewings_register_competition_rules_cpt" ) ) {
function smokewings_register_competition_rules_cpt() {

    $labels = array(
        'name'               => __( 'Competition Rules','smokewings' ),
        'singular_name'      => __( 'Competition Rule', 'smokewings' ),
        'menu_name'          => __( 'Competition Rules', 'smokewings' ),
        'name_admin_bar'     => __( 'Competition Rule', 'smokewings' ),
        'add_new'            => __( 'Add New', 'smokewings' ),
        'add_new_item'       => __( 'Add New Rule', 'smokewings' ),
        'new_item'           => __( 'New Rule', 'smokewings' ),
        'edit_item'          => __( 'Edit Rule', 'smokewings' ),
        'view_item'          => __( 'View Rule', 'smokewings' ),
        'all_items'          => __( 'All Rules', 'smokewings' ),
        'search_items'       => __( 'Search Rules', 'smokewings' ),
        'not_found'          => __( 'No rules found.', 'smokewings' ),
        'not_found_in_trash' => __( 'No rules found in Trash.', 'smokewings' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'competition-rules' ),
        'menu_icon'          => 'dashicons-clipboard',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'competition_rules', $args );
}

add_action( 'init', 'smokewings_register_competition_rules_cpt' );
}
