<?php
/**
 * Enter Competition Page Heading Customizer
 * 
 * @package smokewings
 */

function smokewings_enter_competition_heading( $wp_customize ) {

    $wp_customize->add_section(
        'enter_competition_customizer',
        array(
            'title'       => __( '🏆 Enter Competition Page Settings', 'smokewings' ),
            'priority'    => 149,
            'capability'  => 'edit_theme_options',
        )
    );

    $wp_customize->add_setting(
        'enter_competition_heading',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
            'enter_competition_heading',
            array(
                'label'   => __( '⭐ Enter Competition Page Heading ⭐', 'smokewings' ),
                'section' => 'enter_competition_customizer',
                'type'    => 'hidden',
            )
    );

}

add_action( 'customize_register', 'smokewings_enter_competition_heading' );
