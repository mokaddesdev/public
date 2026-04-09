<?php 
/**
 * Footer Customize
 */

function smokeWings_footer_customize_register($wp_customize)
{

    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer Settings', 'smokeWings'),
        'priority' => 130,
    ));


     // Footer Description
    $wp_customize->add_setting('footer_title', array(
        'default' => __('Smoke-N-Wings <span class="text-[#F65600]"> BBQ </span> Competition', 'smokeWings'),
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('footer_title', array(
        'label' => __('Footer Title', 'smokeWings'),
        'section' => 'footer_section',
        'type' => 'textarea',
    ));

    // Footer Button Text
    $wp_customize->add_setting('footer_button_title', array(
        'default' => __('Enter Competition', 'smokeWings'),
    ));
    $wp_customize->add_control('footer_button_title', array(
        'label' => __('Footer Button Title', 'smokeWings'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

}

add_action('customize_register', 'smokeWings_footer_customize_register');