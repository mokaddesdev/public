<?php
/**
 * Sponsor Page Heading Customizer
 */
function smokeWings_sponsor_page($wp_customize) {

    // Sponsor Section
    $wp_customize->add_section('sponsor_page_customizer', array(
        'title'    => __('🤝 Sponsor Page Settings', 'smokeWings'),
        'priority' => 137,
    ));

    //  heading 
    $wp_customize->add_setting('sponsor_page_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'sponsor_page_heading',
        array(
            'label'       => __('⭐ Sponsor Page Heading ⭐', 'smokeWings'),
            'section'     => 'sponsor_page_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokeWings_sponsor_page');
