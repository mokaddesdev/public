<?php
/**
 * Best BBQ Gallery Customizer
 *
 * @package smokewings
 */
function smokewings_best_bbq_gallery_heading_customizer( $wp_customize ) {

    // Section
    $wp_customize->add_section(
        'best_bbq_gallery_section',
        array(
            'title'       => __( 'Best BBQ Gallery Settings', 'smokewings' ),
            'priority'    => 127,
            'capability'  => 'edit_theme_options',
        )
    );

    // Title
    $wp_customize->add_setting(
        'best_bbq_gallery_heading_title',
        array(
            'default'           => 'Smokin’ Highlights: The <span class="text-[#F65600]">best bbq</span> in action',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'best_bbq_gallery_heading_title',
        array(
            'label'   => __( 'Best BBQ Show Title', 'smokewings' ),
            'section' => 'best_bbq_gallery_section',
            'type'    => 'textarea',
        )
    );
}

add_action( 'customize_register', 'smokewings_best_bbq_gallery_heading_customizer' );