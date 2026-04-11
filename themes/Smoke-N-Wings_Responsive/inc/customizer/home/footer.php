<?php
/**
 * Footer Customize
 * 
 * @package smokewings
 */

function smokewings_footer_customize_register( $wp_customize ) {

    // Section
    $wp_customize->add_section(
        'footer_section',
        array(
            'title'       => __( 'Footer Settings', 'smokewings' ),
            'priority'    => 130,
            'capability'  => 'edit_theme_options',
        )
    );

    // Footer Title
    $wp_customize->add_setting(
        'footer_title',
        array(
            'default'           => 'Smoke-N-Wings <span class="text-[#F65600]">BBQ</span> Competition',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'footer_title',
        array(
            'label'   => __( 'Footer Title', 'smokewings' ),
            'section' => 'footer_section',
            'type'    => 'textarea',
        )
    );

    // Footer Button Text
    $wp_customize->add_setting(
        'footer_button_title',
        array(
            'default'           => 'Enter Competition',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'footer_button_title',
        array(
            'label'   => __( 'Footer Button Title', 'smokewings' ),
            'section' => 'footer_section',
            'type'    => 'text',
        )
    );
}

add_action( 'customize_register', 'smokewings_footer_customize_register' );