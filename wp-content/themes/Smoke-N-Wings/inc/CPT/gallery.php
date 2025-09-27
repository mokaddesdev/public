<?php 
/**
 * register gallery post
 */

function smokeWings_gallery_cpt() {
    $labels = array(
        'name' => 'Galleries',
        'singular_name' => 'Gallery',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-gallery',
    );
    register_post_type( 'blo_gallery', $args );
}
add_action( 'init', 'smokeWings_gallery_cpt' );


function smokeWings_hide_add_new_gallery() {
    global $submenu, $post_type;

    if ( 'blo_gallery' !== $post_type ) return;

    $posts = get_posts(array(
        'post_type' => 'blo_gallery',
        'post_status' => 'any',
        'posts_per_page' => 1,
        'fields' => 'ids',
    ));

    if ( !empty($posts) && isset($submenu['edit.php?post_type=blo_gallery']) ) {
        foreach ( $submenu['edit.php?post_type=blo_gallery'] as $key => $item ) {
            if ( $item[0] == 'Add New' ) {
                unset( $submenu['edit.php?post_type=blo_gallery'][$key] );
            }
        }
    }
}
add_action( 'admin_menu', 'smokeWings_hide_add_new_gallery', 999 );

