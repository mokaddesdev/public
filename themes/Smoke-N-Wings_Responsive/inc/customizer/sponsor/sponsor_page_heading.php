<?php
/**
 * Sponsor_page_heading customize
 * 
 * @package smokewings
 */

function smokewings_sponsor_page_heading_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('sponsor_page_heading_section', array(
        'title'    => __('Sponsor Page Heading Settings', 'smokewings'),
        'priority' => 138,
        'capability'  => 'edit_theme_options',
    ));

    // Title
    $wp_customize->add_setting('sponsor_page_heading_title', array(
        'default'           => 'our featured <span class="text-[#F65600]">sponsors</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('sponsor_page_heading_title', array(
        'label'   => __('Featured Sponsor Title', 'smokewings'),
        'section' => 'sponsor_page_heading_section',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'smokewings_sponsor_page_heading_customizer');
