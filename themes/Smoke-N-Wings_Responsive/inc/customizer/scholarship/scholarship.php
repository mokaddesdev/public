<?php
/**
 * Scholarship Page Heading Customizer
 * 
 * @package smokewings
 */
function smokewings_scholarship_page_heading($wp_customize) {

 
    $wp_customize->add_section('scholarship_page_customizer', array(
        'title'    => __('🎓 Scholarship Page Settings', 'smokewings'),
        'priority' => 145, 
        'capability'  => 'edit_theme_options',
    ));

  
    $wp_customize->add_setting('scholarship_page_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

 
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'scholarship_page_heading',
        array(
            'label'       => __('⭐ Scholarship Page Heading ⭐', 'smokewings'),
            'section'     => 'scholarship_page_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokewings_scholarship_page_heading');
