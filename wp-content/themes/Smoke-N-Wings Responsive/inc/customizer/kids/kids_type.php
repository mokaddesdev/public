<?php

/**
 * Kids Type Section Heading Customizer
 */
function smokeWings_kids_type_section_heading_customizer($wp_customize) {

    //Settings

    $wp_customize->add_section('kids_type_section_heading_section', array(
        'title' => __('Kids Type Section Heading  Settings', 'smokeWings'),
        'priority' => 140,
    ));


    // Title
    $wp_customize->add_setting('kids_type_section_heading_title', array(
        'default'           => 'KIDS-<span class="text-[#F65600]">Q</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('kids_type_section_heading_title', array(
        'label'   => __('Kids Type Section Heading Title', 'smokeWings'),
        'section' => 'kids_type_section_heading_section',
        'type'    => 'text',
    ));

    // Description
    $wp_customize->add_setting('kids_type_section_heading_description', array(
        'default'           => 'The Kid’s Q will be divided into two divisions',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('kids_type_section_heading_description', array(
        'label'   => __('Kids Type Section Heading Description', 'smokeWings'),
        'section' => 'kids_type_section_heading_section',
        'type'    => 'textarea',
    ));

}
add_action('customize_register', 'smokeWings_kids_type_section_heading_customizer');