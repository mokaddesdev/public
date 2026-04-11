<?php 
/**
 * Header Customizer Options
 * 
 * @package smokewings
 */
function smokewings_header_customizer( $wp_customize ) {

    // Section
    $wp_customize->add_section(
        'header_section',
        array(
            'title'       => __( 'Header Settings', 'smokewings' ),
            'priority'    => 123,
            'capability'  => 'edit_theme_options',
        )
    );

    // Header Logo
    $wp_customize->add_setting(
        'header_logo',
        array(
            'default'           => THEME_DIR_URI . '/assets/images/logo.png',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'header_logo',
            array(
                'label'    => __( 'Header Logo', 'smokewings' ),
                'section'  => 'header_section',
                'settings' => 'header_logo',
                'height'   => 105,
                'width'    => 210,
            )
        )
    );

    // Header Button Text
    $wp_customize->add_setting(
        'header_button_text',
        array(
            'default'           => __( 'Enter Competition', 'smokewings' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'header_button_text',
        array(
            'label'   => __( 'Header Button Text', 'smokewings' ),
            'section' => 'header_section',
            'type'    => 'text',
        )
    );
}

add_action( 'customize_register', 'smokewings_header_customizer' );