<?php
/**
 * Featured Sponsor Scholarship customize
 */

function smokeWings_featured_sponsor_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('featured_sponsor_scholarship_section', array(
        'title'    => __('Featured Sponsor Scholarship Settings', 'smokeWings'),
        'priority' => 146,
    ));

    // Title
    $wp_customize->add_setting('featured_sponsor_title', array(
        'default'           => 'BINGHAM MAYORS <span class="text-[#F65600]">SCHOLORSHIP</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('featured_sponsor_title', array(
        'label'   => __('Featured Sponsor Title', 'smokeWings'),
        'section' => 'featured_sponsor_scholarship_section',
        'type'    => 'textarea',
    ));

    // Description
    $wp_customize->add_setting('featured_sponsor_description', array(
        'default'           => 'The Bingham County Mayors Scholarship committee is pleased to announce a scholarship for graduating high school seniors residing or attending any school in Bingham County who plan on continuing their education at any accredited college/university, including technical and vocational programs. The Bingham County Mayors Scholarship will be awarded under the direction of the Bingham County Mayors Scholarship Selection Committee.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('featured_sponsor_description', array(
        'label'   => __('Featured Sponsor Description', 'smokeWings'),
        'section' => 'featured_sponsor_scholarship_section',
        'type'    => 'textarea',
    ));

    // Button Text
    $wp_customize->add_setting('featured_sponsor_button_text', array(
        'default'           => 'enter the competition',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('featured_sponsor_button_text', array(
        'label'   => __('Featured Sponsor Button Text', 'smokeWings'),
        'section' => 'featured_sponsor_scholarship_section',
        'type'    => 'text',
    ));

    // Banner Text
    $wp_customize->add_setting('featured_sponsor_banner_text', array(
        'default'           => 'In 2023, 46 scholarships were awarded to Bingham County high school seniors. A total of <span class="text-[#F65600]">$23,000 was awarded.</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('featured_sponsor_banner_text', array(
        'label'   => __('Featured Sponsor Banner Text', 'smokeWings'),
        'section' => 'featured_sponsor_scholarship_section',
        'type'    => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('featured_sponsor_image', array(
        'default' => get_template_directory_uri() . '/assets/images/scholar.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'featured_sponsor_image_control',
        array(
            'label'    => __('Featured Sponsor Image', 'smokeWings'),
            'section'  => 'featured_sponsor_scholarship_section',
            'settings' => 'featured_sponsor_image',
        )
    ));
}
add_action('customize_register', 'smokeWings_featured_sponsor_customizer');
