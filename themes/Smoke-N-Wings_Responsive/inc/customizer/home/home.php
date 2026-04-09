<?php
/**
 * Homepage Customizer Heading
 */
function smokeWings_homepage_customizer_heading($wp_customize) {

    $wp_customize->add_section('homepage_customizer_section', array(
        'title'    => __('🏠 Homepage Customize Settings', 'smokeWings'),
        'priority' => 121,
    ));


    $wp_customize->add_setting('homepage_custom_heading', array(
        'sanitize_callback' => 'esc_html',
    ));


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'homepage_custom_heading',
        array(
            'label'       => __('⭐ Homepage Custom Heading ⭐', 'smokeWings'),
            'section'     => 'homepage_customizer_section',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokeWings_homepage_customizer_heading');
