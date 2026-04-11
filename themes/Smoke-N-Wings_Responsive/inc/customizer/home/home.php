<?php
/**
 * Homepage Customizer Heading
 * 
 * @package smokewings
 */

function smokewings_homepage_customizer_heading( $wp_customize ) {

    // Section
    $wp_customize->add_section(
        'homepage_customizer_section',
        array(
            'title'       => __( 'Homepage Customize Settings', 'smokewings' ),
            'priority'    => 121,
            'capability'  => 'edit_theme_options',
        )
    );

    // Setting
    $wp_customize->add_setting(
        'homepage_custom_heading',
        array(
            'default'           => 'Homepage Heading',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Control
    $wp_customize->add_control(
        'homepage_custom_heading',
        array(
            'label'   => __( 'Homepage Custom Heading', 'smokewings' ),
            'section' => 'homepage_customizer_section',
            'type'    => 'hidden',
        )
    );
}

add_action( 'customize_register', 'smokewings_homepage_customizer_heading' );