<?php

/**
 * Kids Older Competition Monitoring Customizer
 */
function smokeWings_kids_older_competition_monitoring_customizer($wp_customize) {

    //Settings

    $wp_customize->add_section('kids_older_competition_monitoring_section', array(
        'title' => __('Kids Older Competition Monitoring Settings', 'smokeWings'),
        'priority' => 143,
    ));


    // Title
    $wp_customize->add_setting('kids_older_competition_monitoring_title', array(
        'default'           => 'The older competitor <span class="text-[#F65600]"> mentoring </span> session',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('kids_older_competition_monitoring_title', array(
        'label'   => __('Kids Older Competition Monitoring Title', 'smokeWings'),
        'section' => 'kids_older_competition_monitoring_section',
        'type'    => 'textarea',
    ));

    // Description
    $wp_customize->add_setting('kids_older_competition_monitoring_description', array(
        'default'           => 'Competitors should trim any of their meats, as needed, and volunteers will be available to help as necessary.Older division cooks will have the opportunity to have a mentoring session with a competition BBQ team at the event prior to their contest.Charcoal grills will be provided for each contestant and a volunteer will be on hand to light the charcoal and provide other assistance as needed.Prior to the contest an information packet will be sent to all the contestants outlining the rules and describing the protein being used. This information will be sent to all contestants at the same time allowing an equal amount of time for contestants to plan and prepare for their cook. Entry fee is $25 for each child.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('kids_older_competition_monitoring_description', array(
        'label'   => __('Kids Older Competition Monitoring Description', 'smokeWings'),
        'section' => 'kids_older_competition_monitoring_section',
        'type'    => 'textarea',
    ));

    // Button Text
    $wp_customize->add_setting('kids_older_competition_monitoring_button_text', array(
        'default'           => 'enter the competition',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('kids_older_competition_monitoring_button_text', array(
        'label'   => __('Kids Older Competition Monitoring Button Text', 'smokeWings'),
        'section' => 'kids_older_competition_monitoring_section',
        'type'    => 'text',
    ));


    // Image
    $wp_customize->add_setting('kids_older_competition_monitoring_image', array(
        'default' => get_template_directory_uri() . '/assets/images/oldercompetiotionmonitoring.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'kids_older_competition_monitoring_image_control',
        array(
            'label'    => __('Kids Older Competition Monitoring Image', 'smokeWings'),
            'section'  => 'kids_older_competition_monitoring_section',
            'settings' => 'kids_older_competition_monitoring_image',
        )
    ));
}
add_action('customize_register', 'smokeWings_kids_older_competition_monitoring_customizer');