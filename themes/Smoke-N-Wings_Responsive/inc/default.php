<?php 
/**
 * Summary of smokewings_setup_theme default
 * 
 * @return void
 * 
 * @package smokewings
 */

if ( ! function_exists( "smokewings_setup_theme" ) ) {
function smokewings_setup_theme()
{

    // Enable post thumbnails for posts and pages
    add_theme_support( 'post-thumbnails', array( 'post','kids','cook_site') );

    
    // Enable dynamic title tag support
    add_theme_support('title-tag'); 


    register_nav_menus(array(
        'smokewings_header_menu' => __('Smoke Wings Header Menu', 'smokewings'),
        'smokewings_mobile_menu' => __('Smoke Wings Mobile Menu', 'smokewings'),
        
        // Footer Menu
        'smokewings_footer_menu1' => __('Smoke-N-Wings Footer Menu1', 'smokewings'),
        'smokewings_footer_menu2' => __('Smoke-N-Wings Footer Menu2', 'smokewings'),
    ));
}
add_action('after_setup_theme', 'smokewings_setup_theme');
}

if ( ! function_exists( "smokewings_add_time_meta_box" ) ) {
    function smokewings_add_time_meta_box() {
    add_meta_box(
        'time_meta_box',                       
        'Set Times',                          
        'smokewings_time_meta_box_callback',      
        'post',                            
        'side'                             
    );
}

add_action('add_meta_boxes', 'smokewings_add_time_meta_box');
}
if ( ! function_exists( "smokewings_time_meta_box_callback" ) ) {
    function smokewings_time_meta_box_callback($post) {

    $set_time = get_post_meta($post->ID, '_set_time', true);

    echo '<input type="text" name="set_time_field" value="' . esc_attr($set_time) . '" style="width:100%;" />';
}
}
if ( ! function_exists( "smokewings_save_time_meta_box" ) ) {
    function smokewings_save_time_meta_box($post_id) {
    if ( array_key_exists('set_time_field', $_POST) ) {
        update_post_meta(
            $post_id,
            '_set_time',
            sanitize_text_field($_POST['set_time_field'])
        );
    }
}
add_action('save_post', 'smokewings_save_time_meta_box');
}
