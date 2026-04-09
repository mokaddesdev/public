<?php
// Register Custom Post Type: Competition Rules

function smokeWings_register_competition_rules_cpt() {

    $labels = array(
        'name'               => __( 'Competition Rules','smokeWings' ),
        'singular_name'      => __( 'Competition Rule', 'smokeWings' ),
        'menu_name'          => __( 'Competition Rules', 'smokeWings' ),
        'name_admin_bar'     => __( 'Competition Rule', 'smokeWings' ),
        'add_new'            => __( 'Add New', 'smokeWings' ),
        'add_new_item'       => __( 'Add New Rule', 'smokeWings' ),
        'new_item'           => __( 'New Rule', 'smokeWings' ),
        'edit_item'          => __( 'Edit Rule', 'smokeWings' ),
        'view_item'          => __( 'View Rule', 'smokeWings' ),
        'all_items'          => __( 'All Rules', 'smokeWings' ),
        'search_items'       => __( 'Search Rules', 'smokeWings' ),
        'not_found'          => __( 'No rules found.', 'smokeWings' ),
        'not_found_in_trash' => __( 'No rules found in Trash.', 'smokeWings' )
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
add_action( 'init', 'smokeWings_register_competition_rules_cpt' );
