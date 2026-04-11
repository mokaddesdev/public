<?php
/**
 * About Customizer
 * 
 * @package smokewings
 */
function smokewings_about_customizer( $customizer ) {

    // Section
    $customizer->add_section(
        'about_section',
        array(
            'title'       => __( 'About Settings', 'smokewings' ),
            'priority'    => 125,
            'capability'  => 'edit_theme_options',
        )
    );

    // Title
    $customizer->add_setting(
        'about_title',
        array(
            'default'           => 'Join us for the <span class="text-[#F65600]">2025 Smoke-N-Wings</span> BBQ Competition!',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $customizer->add_control(
        'about_title',
        array(
            'label'   => __( 'About Title', 'smokewings' ),
            'section' => 'about_section',
            'type'    => 'textarea',
        )
    );

    // Description
    $customizer->add_setting(
        'about_description',
        array(
            'default'           => 'Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket. The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $customizer->add_control(
        'about_description',
        array(
            'label'   => __( 'About Description', 'smokewings' ),
            'section' => 'about_section',
            'type'    => 'textarea',
        )
    );

    // Button Text
    $customizer->add_setting(
        'about_button_text',
        array(
            'default'           => __( 'Enter the competition', 'smokewings' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'about_button_text',
        array(
            'label'   => __( 'About Button Text', 'smokewings' ),
            'section' => 'about_section',
            'type'    => 'text',
        )
    );

    // Image
    $customizer->add_setting(
        'about_left_image',
        array(
            'default'           => THEME_DIR_URI . '/assets/images/aboutimg.png',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $customizer->add_control( new WP_Customize_Image_Control(
            $customizer,
            'about_left_control',
            array(
                'label'    => __( 'About Left Image', 'smokewings' ),
                'section'  => 'about_section',
                'settings' => 'about_left_image',
            )
        )
    );
}

add_action( 'customize_register', 'smokewings_about_customizer' );