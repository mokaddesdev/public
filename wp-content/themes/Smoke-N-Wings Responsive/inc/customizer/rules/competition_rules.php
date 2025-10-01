<?php
/**
 * Competition Rules Customizer
 */
function smokeWings_competition_rules_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('competition_rules_section', array(
        'title'    => __('Competition Rules Settings', 'smokeWings'),
        'priority' => 132,
    ));

    // Title
    $wp_customize->add_setting('competition_rules_title', array(
       'default' => 'SMOKE-N-WINGS <span class="text-[#F65600]"> 2024 </span> RULES ',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_rules_title', array(
        'label'   => __('Competition Rules Title', 'smokeWings'),
        'section' => 'competition_rules_section',
        'type'    => 'textarea',
    ));

    // Description
    $wp_customize->add_setting('competition_rules_description', array(
        'default'           => 'As a KCBS sanctioned Master Series Contest, all KCBS rules will be followed. The event and the judging will be overseen by the KCBS Contest Representatives assigned to the event. Their decisions and interpretations are final.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_rules_description', array(
        'label'   => __('Competition Rules Description', 'smokeWings'),
        'section' => 'competition_rules_section',
        'type'    => 'textarea',
    ));

     // Rules Card Description
    $wp_customize->add_setting('rules_card_description', array(
       'default' => 'As a Master Series Contest, teams will cook four meats: 
       The Four KCBS Meat Categories are:',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('rules_card_description', array(
        'label'   => __('Rules Card Description description', 'smokeWings'),
        'section' => 'competition_rules_section',
        'type'    => 'textarea',
    ));

}
add_action('customize_register', 'smokeWings_competition_rules_customizer');
