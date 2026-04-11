<?php 

/**
 * Hero Customizer
 * 
 * @package smokewings
 */

function smokewings_hero_customizer( $customizer ) {

    // Section
    $customizer->add_section(
        'hero_section',
        array(
            'title'    => __( 'Hero Settings', 'smokewings' ),
            'priority' => 124,
        )
    );

    // Button text left
    $customizer->add_setting(
        'hero_button_text_left',
        array(
            'default'           => __( 'Enter competition', 'smokewings' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'hero_button_text_left',
        array(
            'label'   => __( 'Hero Button Text Left', 'smokewings' ),
            'section' => 'hero_section',
            'type'    => 'text',
        )
    );

    // Button text right
    $customizer->add_setting(
        'hero_button_text_right',
        array(
            'default'           => __( 'Check Out The Rules', 'smokewings' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'hero_button_text_right',
        array(
            'label'   => __( 'Hero Button Text Right', 'smokewings' ),
            'section' => 'hero_section',
            'type'    => 'text',
        )
    );

    // Hero image
    $customizer->add_setting(
        'hero_image',
        array(
            'default'           => THEME_DIR_URI . '/assets/images/meat.png',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'hero_image_control',
            array(
                'label'    => __( 'Hero Image', 'smokewings' ),
                'section'  => 'hero_section',
                'settings' => 'hero_image',
            )
        )
    );
}

add_action( 'customize_register', 'smokewings_hero_customizer' );