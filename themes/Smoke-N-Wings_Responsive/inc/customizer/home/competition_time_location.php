<?php
/**
 * Competition Time & Location Customizer
 * 
 * @package smokewings
 */

function smokewings_set_time_location_customizer( $customizer ) {

    // Section
    $customizer->add_section(
        'set_time_location_section',
        array(
            'title'       => __( 'Competition Time & Location', 'smokewings' ),
            'priority'    => 126,
            'capability'  => 'edit_theme_options',
        )
    );

    // Time Title
    $customizer->add_setting(
        'set_time_title',
        array(
            'default'           => 'When:',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'set_time_title',
        array(
            'label'   => __( 'Time Title', 'smokewings' ),
            'section' => 'set_time_location_section',
            'type'    => 'text',
        )
    );

    // Competition Time
    $customizer->add_setting(
        'competition_time',
        array(
            'default'           => 'June 28-29, 2025',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'competition_time',
        array(
            'label'   => __( 'Competition Time', 'smokewings' ),
            'section' => 'set_time_location_section',
            'type'    => 'text',
        )
    );

    // Location Title
    $customizer->add_setting(
        'competition_location_title',
        array(
            'default'           => 'Where:',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'competition_location_title',
        array(
            'label'   => __( 'Location Title', 'smokewings' ),
            'section' => 'set_time_location_section',
            'type'    => 'text',
        )
    );

    // Location
    $customizer->add_setting(
        'competition_location',
        array(
            'default'           => "Blackfoot, Idaho\nBlackfoot Airport (McCarly Field)",
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $customizer->add_control(
        'competition_location',
        array(
            'label'   => __( 'Competition Location', 'smokewings' ),
            'section' => 'set_time_location_section',
            'type'    => 'textarea',
        )
    );

    // Description
    $customizer->add_setting(
        'competition_time_location_description',
        array(
            'default'           => 'Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $customizer->add_control(
        'competition_time_location_description',
        array(
            'label'   => __( 'Competition Description', 'smokewings' ),
            'section' => 'set_time_location_section',
            'type'    => 'textarea',
        )
    );
}

add_action( 'customize_register', 'smokewings_set_time_location_customizer' );