<?php
/**
 * Competition Awareness Customizer
 */
function smokeWings_competition_awareness_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('competition_awareness_section', array(
        'title'    => __('Competition Awareness Settings', 'smokeWings'),
        'priority' => 134,
    ));

    // Title
    $wp_customize->add_setting('competition_awareness_title', array(
       'default' => 'The <span class="text-[#F65600]"> competition </span> awareness ',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_awareness_title', array(
        'label'   => __('Competition Awareness Title', 'smokeWings'),
        'section' => 'competition_awareness_section',
        'type'    => 'textarea',
    ));

    // first Description
    $wp_customize->add_setting('competition_awareness_first_description', array(
        'default'           => 'Fire lanes and emergency access shall be maintained at all times.Ashes and grease must be disposed of in provided containers located close to the cook sites. Team site will be left with no garbage, ashes, debris or liquid/grease spills. If site is not left in a Clean manner the city will clean the site and bill the team for the labor involved.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_awareness_first_description', array(
        'label'   => __('Competition Awareness First Description', 'smokeWings'),
        'section' => 'competition_awareness_section',
        'type'    => 'textarea',
    ));

    // Second Description
    $wp_customize->add_setting('competition_awareness_second_description', array(
        'default'           => 'All teams equipment, vehicles, trailers, cookers, awnings etc. must stay within teams assigned cook area. A parking area will be available nearby for vehicles that don’t fit within cook site.Water will be available as well as gray water disposal area. Electricity will not be provided. Please plan accordingly Each cook site will have a brief health department inspection along with their meat inspection.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_awareness_second_description', array(
        'label'   => __('Competition Awareness Second Description', 'smokeWings'),
        'section' => 'competition_awareness_section',
        'type'    => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('competition_awareness_image', array(
        'default'           => get_template_directory_uri() . '/assets/images/rule2.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'competition_awareness_image_control',
        array(
            'label'    => __('Competition Awareness Image', 'smokeWings'),
            'section'  => 'competition_awareness_section',
            'settings' => 'competition_awareness_image',
        )
    ));
}
add_action('customize_register', 'smokeWings_competition_awareness_customizer');
