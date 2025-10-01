<?php
/**
 * Contact Us Page Heading Customizer
 */
function smokeWings_contact_page_heading($wp_customize) {


    $wp_customize->add_section('contact_page_customizer', array(
        'title'    => __('📞 Contact Us Page Settings', 'smokeWings'),
        'priority' => 147,
    ));

    $wp_customize->add_setting('contact_page_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'contact_page_heading',
        array(
            'label'       => __('⭐ Contact Us Page Heading ⭐', 'smokeWings'),
            'section'     => 'contact_page_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokeWings_contact_page_heading');
