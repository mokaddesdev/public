<?php
/**
 * Top Header Customizer
 * 
 * @package smokewings
 */

function smokewings_customize_header( $wp_customize ) {

    // Section
    $wp_customize->add_section(
        'company_information',
        array(
            'title'       => __( 'Company Information Settings', 'smokewings' ),
            'priority'    => 122,
            'capability'  => 'edit_theme_options',
        )
    );

    // Company Email
    $wp_customize->add_setting(
        'company_email',
        array(
            'default'           => 'smokenwingsbbq@gmail.com',
            'sanitize_callback' => 'sanitize_email',
        )
    );

    $wp_customize->add_control(
        'company_email',
        array(
            'label'   => __( 'Company Email', 'smokewings' ),
            'section' => 'company_information',
            'type'    => 'email',
        )
    );

    // Service Time
    $wp_customize->add_setting(
        'service_time',
        array(
            'default'           => 'Mon - Fri 09:00 - 18:00',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'service_time',
        array(
            'label'   => __( 'Service Time', 'smokewings' ),
            'section' => 'company_information',
            'type'    => 'text',
        )
    );

    // Company Phone
    $wp_customize->add_setting(
        'company_phone',
        array(
            'default'           => 'Call (800) 123 45 67',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'company_phone',
        array(
            'label'   => __( 'Company Phone', 'smokewings' ),
            'section' => 'company_information',
            'type'    => 'text',
        )
    );
}

add_action( 'customize_register', 'smokewings_customize_header' );