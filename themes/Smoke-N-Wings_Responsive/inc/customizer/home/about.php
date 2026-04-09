<?php 

/**
 * About Customizer
 */

function smokeWings_about_customizer($customizer){
    //Settings
    $customizer->add_section('_about_section', array(
        'title' => __('About Settings', 'smokeWings'),
        'priority' => 125,
    ));

    $customizer->add_setting('about_title', array(
        'default' => __('Join us for the <span class="text-[#F65600]"> 2025 Smoke-N-Wings </span> BBQ Competition!'),
        'sanitize_callback' => 'wp_kses_post',
    ));
    $customizer->add_control('about_title', array(
        'label' => __('About Title', 'smokeWings'),
        'section' => '_about_section',
        'type' => 'textarea',
    ));

    
    //description

    $customizer->add_setting('about_description', array(
        'default' => __('Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket.
        The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.', 'smokeWings'),
        'sanitize_callback' => 'wp_kses_post',
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

     // about_left_image image
$customizer->add_setting('about_left_image', array(
    'default' => get_template_directory_uri() . '/assets/images/about.png',
));

$customizer->add_control(new WP_Customize_Image_Control(
    $customizer,
    'about_left_control',
    array(
        'label'    => __('About Left Image', 'smokeWings'),
        'section'  => '_about_section',
        'settings' => 'about_left_image',
    )
));


}
add_action('customize_register', 'smokeWings_about_customizer');
