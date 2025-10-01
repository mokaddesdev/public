<?php
/**
 * Enter Competition customize
 */

function smokeWings_enter_competition_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('enter_competition_section', array(
        'title'    => __('Enter Competition Form Settings', 'smokeWings'),
        'priority' => 150,
    ));

    // Title
    $wp_customize->add_setting('enter_competition_title', array(
        'default' => 'Enter <span class="text-[#F65600]">Competition</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('enter_competition_title', array(
        'label'   => __('Enter Competition Title', 'smokeWings'),
        'section' => 'enter_competition_section',
        'type'    => 'textarea',
    ));

    // Description
    $wp_customize->add_setting('enter_competition_description', array(
        'default' => 'We are excited to welcome your team to the 2024 SMOKE-N-WINGS BBQ CONTEST. Put your skills to the test for your chance to win cash prizes and be crowned the SMOKE-N-WINGS Grand Champion and the Idaho State Champion.
        <br>
        <br>
        This KCBS sanctioned competition will be held June 28-29, 2024. Winning will make your team eligible for the American Royal and the Jack Daniels World Championship.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('enter_competition_description', array(
        'label'   => __('Enter Competition Description', 'smokeWings'),
        'section' => 'enter_competition_section',
        'type'    => 'textarea',
    ));

    // Form Title
    $wp_customize->add_setting('enter_competition_form_title', array(
        'default' => 'Complete the <span class="text-[#F65600]">Entry Form</span> Below',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('enter_competition_form_title', array(
        'label'   => __('Enter Competition Form Title', 'smokeWings'),
        'section' => 'enter_competition_section',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'smokeWings_enter_competition_customizer');
