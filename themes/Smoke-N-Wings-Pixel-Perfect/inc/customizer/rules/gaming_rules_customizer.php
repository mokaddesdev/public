<?php
/**
 * Gaming Rules Page Heading Customizer
 */
function smokeWings_gaming_rules_heading($wp_customize) {

    $wp_customize->add_section('gaming_rules_customizer', array(
        'title'    => __('🎮 Gaming Rules Page Settings', 'smokeWings'),
        'priority' => 131,
    ));

    $wp_customize->add_setting('gaming_rules_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'gaming_rules_heading',
        array(
            'label'       => __('⭐ Gaming Rules Page Heading ⭐', 'smokeWings'),
            'section'     => 'gaming_rules_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokeWings_gaming_rules_heading');
