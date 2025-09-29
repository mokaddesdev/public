<?php
/**
 * SBest BBQ Action customize
 */

function smokeWings_best_bbq_customizer($wp_customize) {

    //Settings

    $wp_customize->add_section('best_bbq_show_section', array(
        'title' => __('Best BBQ Show Settings', 'smokeWings'),
        'priority' => 70,
    ));
    //  Title

    $wp_customize->add_setting('best_bbq_show_section_title', array(
        'default' => __('Smokin’ Highlights: The best bbq in action', 'smokeWings'),
    ));

       $wp_customize->add_control('best_bbq_show_section_title', array(
        'label' => __('Best BBQ Show Title', 'smokeWings'),
        'section' => 'best_bbq_show_section',
        'type' => 'textarea',
    ));
   
}
add_action('customize_register', 'smokeWings_best_bbq_customizer');