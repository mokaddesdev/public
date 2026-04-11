<?php
/**
 * Contact Form customize
 * 
 * @package  smokewings
 */
function smokewings_contact_form_customizer( $wp_customize ) {

    // Section
    $wp_customize->add_section(
        'contact_form_section',
        array(
            'title'       => __( 'Contact Form Settings', 'smokewings' ),
            'priority'    => 148,
            'capability'  => 'edit_theme_options',
        )
    );

    // Left Title
    $wp_customize->add_setting(
        'contact_form_title',
        array(
            'default'           => __( 'Contact Us', 'smokewings' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'contact_form_title',
        array(
            'label'   => __( 'Contact Form Left Title', 'smokewings' ),
            'section' => 'contact_form_section',
            'type'    => 'text',
        )
    );

    // Description
    $wp_customize->add_setting(
        'contact_form_description',
        array(
            'default'           => __( 'We will reply as soon as possible', 'smokewings' ),
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'contact_form_description',
        array(
            'label'   => __( 'Contact Form Description', 'smokewings' ),
            'section' => 'contact_form_section',
            'type'    => 'textarea',
        )
    );

    // Right Title
    $wp_customize->add_setting(
        'contact_form_right_title',
        array(
            'default'           => __( 'Leave Us <span class="text-[#F65600]">Message</span>', 'smokewings' ),
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'contact_form_right_title',
        array(
            'label'   => __( 'Contact Form Right Title', 'smokewings' ),
            'section' => 'contact_form_section',
            'type'    => 'textarea',
        )
    );
}

add_action( 'customize_register', 'smokewings_contact_form_customizer' );
