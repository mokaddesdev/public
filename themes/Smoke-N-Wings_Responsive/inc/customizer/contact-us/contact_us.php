<?php
/**
 * Contact Us Page Heading Customizer
 *
 * @package smokewings
 */

function smokewings_contact_page_heading( $wp_customize ) {

    $wp_customize->add_section(
        'contact_page_customizer',
        array(
            'title'       => __( '📞 Contact Us Page Settings', 'smokewings' ),
            'priority'    => 147,
            'capability'  => 'edit_theme_options',
        )
    );

    $wp_customize->add_setting(
        'contact_page_heading',
        array(
            'default'           => __( 'Contact Us', 'smokewings' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'contact_page_heading',
        array(
            'label'   => __( 'Contact Page Heading', 'smokewings' ),
            'section' => 'contact_page_customizer',
            'type'    => 'hidden',
        )
    );
}

add_action( 'customize_register', 'smokewings_contact_page_heading' );
