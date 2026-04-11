<?php
/**
 * FAQs Heading Customizer
 * 
 * @package smokewings
 */

function smokewings_faqs_heading_customizer( $customizer ) {

    // Section
    $customizer->add_section(
        'faqs_heading_section',
        array(
            'title'       => __( 'FAQs Settings', 'smokewings' ),
            'priority'    => 129,
            'capability'  => 'edit_theme_options',
        )
    );

    // Title
    $customizer->add_setting(
        'faqs_heading_title',
        array(
            'default'           => 'Frequently <span class="text-[#F65600]">Asked</span> Questions',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $customizer->add_control(
        'faqs_heading_title',
        array(
            'label'   => __( 'FAQs Title', 'smokewings' ),
            'section' => 'faqs_heading_section',
            'type'    => 'textarea',
        )
    );

    // Image
    $customizer->add_setting(
        'faqs_heading_image',
        array(
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'faqs_heading_image_control',
            array(
                'label'    => __( 'FAQs Image', 'smokewings' ),
                'section'  => 'faqs_heading_section',
                'settings' => 'faqs_heading_image',
            )
        )
    );
}

add_action( 'customize_register', 'smokewings_faqs_heading_customizer' );