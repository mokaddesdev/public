<?php
/**
 * Competition Held On Customizer
 */
function smokeWings_competition_held_on_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('competition_held_on_section', array(
        'title'    => __('Competition Held On Settings', 'smokeWings'),
        'priority' => 133,
    ));

    // Title
    $wp_customize->add_setting('competition_held_on_title', array(
       'default' => 'The <span class="text-[#F65600]"> competition </span> held on ',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_held_on_title', array(
        'label'   => __('Competition Held On Title', 'smokeWings'),
        'section' => 'competition_held_on_section',
        'type'    => 'textarea',
    ));

    // first Description
    $wp_customize->add_setting('competition_held_on_first_description', array(
        'default'           => 'The competition will be held on the tarmac at the Blackfoot Municipal Airport (McCarley Field).During the competition the area will continue to be an active airport.No guns, fireworks and all fire/flame must be contained within the cooking apparatus.Pets MUST be on a leash or contained at the teams cook site. There is a dog park just outside the airport gate.Vehicles must follow established traffic flow through the airport property.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_held_on_first_description', array(
        'label'   => __('Competition Held On First Description', 'smokeWings'),
        'section' => 'competition_held_on_section',
        'type'    => 'textarea',
    ));

    // Second Description
    $wp_customize->add_setting('competition_held_on_second_description', array(
        'default'           => 'Each team site must have a fire extinguisher and if a stick burner is used some sort of ground protection must be used under the fire box. This may include sheet metal or cement board for example.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_held_on_second_description', array(
        'label'   => __('Competition Held On Second Description', 'smokeWings'),
        'section' => 'competition_held_on_section',
        'type'    => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('competition_held_on_image', array(
        'default'           => get_template_directory_uri() . '/assets/images/rule1.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'competition_held_on_image_control',
        array(
            'label'    => __('Competition Held On Image', 'smokeWings'),
            'section'  => 'competition_held_on_section',
            'settings' => 'competition_held_on_image',
        )
    ));
}
add_action('customize_register', 'smokeWings_competition_held_on_customizer');
