<?php
/**
 * Sponsor Page Heading Customizer
 * 
 * @package smokewings
 */
function smokewings_sponsor_page($wp_customize) {

    // Sponsor Section
    $wp_customize->add_section('sponsor_page_customizer', array(
        'title'    => __('🤝 Sponsor Page Settings', 'smokewings'),
        'priority' => 137,
        'capability'  => 'edit_theme_options',
    ));

    //  heading 
    $wp_customize->add_setting('sponsor_page_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'sponsor_page_heading',
        array(
            'label'       => __('⭐ Sponsor Page Heading ⭐', 'smokewings'),
            'section'     => 'sponsor_page_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokewings_sponsor_page');
