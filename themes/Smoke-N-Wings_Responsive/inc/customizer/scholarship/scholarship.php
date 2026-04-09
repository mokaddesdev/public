<?php
/**
 * Scholarship Page Heading Customizer
 */
function smokeWings_scholarship_page_heading($wp_customize) {

 
    $wp_customize->add_section('scholarship_page_customizer', array(
        'title'    => __('🎓 Scholarship Page Settings', 'smokeWings'),
        'priority' => 145, 
    ));

  
    $wp_customize->add_setting('scholarship_page_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

 
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'scholarship_page_heading',
        array(
            'label'       => __('⭐ Scholarship Page Heading ⭐', 'smokeWings'),
            'section'     => 'scholarship_page_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokeWings_scholarship_page_heading');
