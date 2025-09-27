<?php 

/**
 * About Customizer
 */

function smokeWings_about_customizer($customizer){
    //Settings
    $customizer->add_section('_about_section', array(
        'title' => __('About Settings', 'smokeWings'),
        'priority' => 50,
    ));

    $customizer->add_setting('about_title', array(
        'default' => __('Join us for the 2025
Smoke-N-Wings BBQ Competition!', 'smokeWings'),
    ));
    $customizer->add_control('about_title', array(
        'label' => __('About Title', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'text',
    ));

    
    //description

    $customizer->add_setting('about_description', array(
        'default' => __('Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket. 
The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.', 'smokeWings'),
    ));
    $customizer->add_control('about_description', array(
        'label' => __('About Description', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'textarea',

    ));

    //button text
    $customizer->add_setting('about_button_text', array(
        'default' => __('Enter the competition', 'smokeWings'),
    ));
    $customizer->add_control('about_button_text', array(
        'label' => __('About Button Text', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'text',
    ));
    //button url
    $customizer->add_setting('about_button_url', array(
        'default' => __('#', 'smokeWings'),
    ));
    $customizer->add_control('about_button_url', array(
        'label' => __('About Button URL', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'url',
    ));

    //Our time Title
    $customizer->add_setting('about_our_time_title', array(
        'default' => __('When', 'smokeWings'),
    ));
    $customizer->add_control('about_our_time_title', array(
        'label' => __('Time Tile', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'text',
    ));

    //experience year text
    $customizer->add_setting('about_our_time', array(
        'default' => __('June 28-29, 2025', 'smokeWings'),
    ));
    $customizer->add_control('about_our_time', array(
        'label' => __('Our Time', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'text',
    ));

        //Our Location Title
    $customizer->add_setting('about_our_location_title', array(
        'default' => __('Where', 'smokeWings'),
    ));
    $customizer->add_control('about_our_location_title', array(
        'label' => __('Location Tile', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'text',
    ));


    $customizer->add_setting('about_our_location', array(
        'default' => __('Blackfoot, Idaho
Blackfoot Airport (McCarly Field)', 'smokeWings'),
    ));
    $customizer->add_control('about_our_location', array(
        'label' => __('Our Location', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'text',
    ));

    //left image
    $customizer->add_setting('about_left_image', array(
        'default' => get_template_directory_uri() . '/assets/images/about.png',
    ));
    $customizer->add_control(WP_Customize_Image_Control::class, array(
        'label' => __('About Left Image', 'smokeWings'),
        'section' => '_about_section',
        'settings' => 'about_left_image',
    ));

}
add_action('customize_register', 'smokeWings_about_customizer');
