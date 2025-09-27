<?php 

/**
 * Summary of laundryclean_setup_theme default
 * @return void
 */
function laundryclean_setup_theme()
{

    // Enable post thumbnails for posts and pages
    add_theme_support( 'post-thumbnails', array( 'post','page','slider','testimonials','services','team_members') );

    
    // Enable dynamic title tag support
    add_theme_support('title-tag'); 


    register_nav_menus(array(
        'smokeWings_header_menu' => __('Smoke Wings Header Menu', 'smokeWings'),
        'smokeWings_mobile_menu' => __('Smoke Wings Mobile Menu', 'smokeWings'),
        
        // Footer Menu
        'laundry_footer1_ourservice' => __('Laundry Footer Our Services', 'laundryclean'),
        'laundry_footer2_quick_links' => __('Laundry Footer  Quick Links', 'laundryclean'),
        'laundry_footer3_commercial_service' => __('Laundry Footer Commercial Service', 'laundryclean')
    ));
}
add_action('after_setup_theme', 'laundryclean_setup_theme');



function laundryclean_add_edit_form_multipart_encoding() {

    echo ' enctype="multipart/form-data"';

}
add_action('post_edit_form_tag', 'laundryclean_add_edit_form_multipart_encoding');






