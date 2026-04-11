<?php
/**
 * Gaming Rules Page Heading Customizer
 * 
 * @package smokewings
 */
function smokewings_gaming_rules_heading($wp_customize) {

    $wp_customize->add_section('gaming_rules_customizer', array(
        'title'    => __('🎮 Gaming Rules Page Settings', 'smokewings'),
        'priority' => 131,
        'capability'  => 'edit_theme_options',
    ));

    $wp_customize->add_setting('gaming_rules_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'gaming_rules_heading',
        array(
            'label'       => __('⭐ Gaming Rules Page Heading ⭐', 'smokewings'),
            'section'     => 'gaming_rules_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokewings_gaming_rules_heading');
