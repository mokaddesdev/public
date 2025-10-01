<?php
function smokeWings_kids_section_heading_only($customizer) {

   // Section
    $customizer->add_section('kids_page_customizer', array(
        'title'    => __('⭐ Kids Page Start ⭐', 'smokeWings'),
        'priority' => 139,
    ));

    // শুধু heading দেখানোর জন্য setting
    $customizer->add_setting('kids_page_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

    // Custom heading control
    $customizer->add_control(new WP_Customize_Control(
        $customizer,
        'kids_page_heading',
        array(
            'label'       => __('⭐ Kids Page Start ⭐', 'smokeWings'),
            'section'     => 'kids_page_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokeWings_kids_section_heading_only');
