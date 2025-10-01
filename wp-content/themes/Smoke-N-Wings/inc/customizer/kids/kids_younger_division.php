<?php

/**
 * Kids Younger Division Customizer
 */
function smokeWings_kids_younger_division_customizer($wp_customize) {
    //Settings

    $wp_customize->add_section('kids_younger_division_section', array(
        'title' => __('Kids Younger Division Settings', 'smokeWings'),
        'priority' => 141,
    ));


    // Title
    $wp_customize->add_setting('kids_younger_division_title', array(
        'default'           => 'The <span class="text-[#F65600]"> Younger </span> Division',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('kids_younger_division_title', array(
        'label'   => __('Kids Younger Division Title', 'smokeWings'),
        'section' => 'kids_younger_division_section',
        'type'    => 'textarea',
    ));

    // Description
    $wp_customize->add_setting('kids_younger_division_description', array(
        'default'           => 'The younger kids will prepare, cook, and box their entries with the help of a parent.Parents should let the kids do as much as they are capable of, given age and abilities.The emphasis in this age group is bonding with their family/friends, learning how to cook and growing their skills with familiar mentors. The focus should be to encourage kids to have fun while learning.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('kids_younger_division_description', array(
        'label'   => __('Kids Younger Division Description', 'smokeWings'),
        'section' => 'kids_younger_division_section',
        'type'    => 'textarea',
    ));

    // Button Text
    $wp_customize->add_setting('kids_younger_division_button_text', array(
        'default'           => 'enter the competition',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('kids_younger_division_button_text', array(
        'label'   => __('Kids Younger Division Button Text', 'smokeWings'),
        'section' => 'kids_younger_division_section',
        'type'    => 'text',
    ));


    // Image
    $wp_customize->add_setting('kids_younger_division_image', array(
        'default' => get_template_directory_uri() . '/assets/images/youngerdivision.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'kids_younger_division_image_control',
        array(
            'label'    => __('Kids Younger Division Image', 'smokeWings'),
            'section'  => 'kids_younger_division_section',
            'settings' => 'kids_younger_division_image',
        )
    ));
}
add_action('customize_register', 'smokeWings_kids_younger_division_customizer');