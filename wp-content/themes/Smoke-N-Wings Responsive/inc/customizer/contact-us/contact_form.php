<?php
/**
 * Contact Form customize
 */

function smokeWings_contact_form_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('contact_form_section', array(
        'title'    => __('Contact Form Settings', 'smokeWings'),
        'priority' => 148,
    ));

    // Title
    $wp_customize->add_setting('contact_form_title', array(
        'default' => 'Contact Us',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('contact_form_title', array(
        'label'   => __('Contact Form Left Title','smokeWings'),
        'section' => 'contact_form_section',
        'type'    => 'text',
    ));

    // Description
    $wp_customize->add_setting('contact_form_description', array(
        'default' => 'We will reply as soon as possible',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('contact_form_description', array(
        'label'   => __('Contact Form Description', 'smokeWings'),
        'section' => 'contact_form_section',
        'type'    => 'textarea',
    ));

    // Form Title
    $wp_customize->add_setting('contact_form_right_title', array(
        'default' => 'Leave Us <span class="text-[#F65600]">Message</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('contact_form_right_title', array(
        'label'   => __('Contact Form Right Title', 'smokeWings'),
        'section' => 'contact_form_section',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'smokeWings_contact_form_customizer');
