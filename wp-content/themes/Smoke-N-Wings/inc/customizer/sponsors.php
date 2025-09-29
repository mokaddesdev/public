<?php

function smokeWings_sponsor_customizer($wp_customize) {

    //Settings

    $wp_customize->add_section('sponsor_section', array(
        'title' => __('Sponsor Settings', 'smokeWings'),
        'priority' => 120,
    ));
    //  Title

    $wp_customize->add_setting('sponsor_section_title', array(
        'default' => __('our featured sponsors', 'smokeWings'),
    ));

       $wp_customize->add_control('sponsor_section_title', array(
        'label' => __('Sponsor Section Title', 'smokeWings'),
        'section' => 'sponsor_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'smokeWings_sponsor_customizer');