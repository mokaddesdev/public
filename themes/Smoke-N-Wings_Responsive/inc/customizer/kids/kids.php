<?php
/**
 * Kids customizer
 * 
 * @package smokewings
 */

function smokewings_kids_section_heading_only( $customizer ) {

    // Section
    $customizer->add_section(
        'kids_page_customizer',
        array(
            'title'       => __( 'Kids Page Start', 'smokewings' ),
            'priority'    => 139,
            'capability'  => 'edit_theme_options',
        )
    );

    // Setting
    $customizer->add_setting(
        'kids_page_heading',
        array(
            'default'           => 'Kids Page',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Control
    $customizer->add_control(
        new WP_Customize_Control(
            $customizer,
            'kids_page_heading',
            array(
                'label'   => __( 'Kids Page Heading', 'smokewings' ),
                'section' => 'kids_page_customizer',
                'type'    => 'hidden',
            )
        )
    );
}

add_action( 'customize_register', 'smokewings_kids_section_heading_only' );