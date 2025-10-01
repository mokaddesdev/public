<?php 

/**
 * Header Customizer Options
 */
function smokeWings_header_customizer($wp_customize) {

     $wp_customize->add_section('header_section', array(
        'title' => __('Header Settings', 'smokeWings'),
        'priority' => 123,
    ));

    // Header Logo
    $wp_customize->add_setting('header_logo', array(
        'default' => get_template_directory_uri() . '/assets/images/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label' => __('Header Logo', 'smokeWings'),
        'section' => 'header_section',
        'settings' => 'header_logo',
        'height' => 105,
        'width' => 210,
    )));


    // Header Button Text
    $wp_customize->add_setting('header_button_text', array(
        'default' => __('Enter Competition', 'smokeWings'),
    ));
    $wp_customize->add_control('header_button_text', array(
        'label' => __('Header Button Text', 'smokeWings'),
        'section' => 'header_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'smokeWings_header_customizer');
