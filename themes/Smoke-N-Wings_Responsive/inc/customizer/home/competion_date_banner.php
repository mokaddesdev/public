<?php
/**
 * Competition Date Banner Customizer
 * 
 * @package smokewings
 */

function smokewings_competition_date_banner_customizer( $customizer ) {

    // Section
    $customizer->add_section(
        'competition_date_banner_section',
        array(
            'title'       => __( 'Competition Banner Settings', 'smokewings' ),
            'priority'    => 128,
            'capability'  => 'edit_theme_options',
        )
    );

    // Title
    $customizer->add_setting(
        'competition_type_title',
        array(
            'default'           => 'Kids-Q',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'competition_type_title',
        array(
            'label'   => __( 'Competition Type Title', 'smokewings' ),
            'section' => 'competition_date_banner_section',
            'type'    => 'text',
        )
    );

    // End Date
    $customizer->add_setting(
        'competition_end_date',
        array(
            'default'           => 'Saturday June 29th',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'competition_end_date',
        array(
            'label'   => __( 'Competition End Date', 'smokewings' ),
            'section' => 'competition_date_banner_section',
            'type'    => 'text',
        )
    );

    // Held Date
    $customizer->add_setting(
        'competition_held_date',
        array(
            'default'           => 'Friday June 28, 2024',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'competition_held_date',
        array(
            'label'   => __( 'Competition Held Date', 'smokewings' ),
            'section' => 'competition_date_banner_section',
            'type'    => 'text',
        )
    );

    // Subtitle
    $customizer->add_setting(
        'competition_sub_title',
        array(
            'default'           => 'Bingham County Mayors Scholarship Fundraiser',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'competition_sub_title',
        array(
            'label'   => __( 'Competition Subtitle', 'smokewings' ),
            'section' => 'competition_date_banner_section',
            'type'    => 'text',
        )
    );

    // Description
    $customizer->add_setting(
        'competition_description',
        array(
            'default'           => 'Friday June 28, 2024 from 5-7pm – Community invited to enjoy BBQ, Kids-Q, activities and an auction to benefit the high school seniors of Bingham County through the Bingham County Mayors Scholarship. Come and help support a wonderful cause.',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $customizer->add_control(
        'competition_description',
        array(
            'label'   => __( 'Competition Description', 'smokewings' ),
            'section' => 'competition_date_banner_section',
            'type'    => 'textarea',
        )
    );
}

add_action( 'customize_register', 'smokewings_competition_date_banner_customizer' );