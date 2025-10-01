<?php 

/**
 * Competion Date Banner Customizer
 */

function smokeWings_competion_date_banner_customizer($customizer){
    //Settings
    $customizer->add_section('competion_date_banner_section', array(
        'title' => __('Competion Banner Settings', 'smokeWings'),
        'priority' => 128,
    ));

    $customizer->add_setting('competition_type_title', array(
        'default' => __('Kids-Q', 'smokeWings'),
    ));
    $customizer->add_control('competition_type_title', array(
        'label' => __('Competition Type Title', 'smokeWings'),
        'section' => 'competion_date_banner_section',
        'type' => 'text',
    ));


     $customizer->add_setting('competition_end_date', array(
        'default' => __('Saturday June 29th', 'smokeWings'),
    ));
    $customizer->add_control('competition_end_date', array(
        'label' => __('Competition End Date', 'smokeWings'),
        'section' => 'competion_date_banner_section',
        'type' => 'text',
    ));

     $customizer->add_setting('competition_held_date', array(
        'default' => __('Friday June 28, 2024', 'smokeWings'),
    ));
    $customizer->add_control('competition_held_date', array(
        'label' => __('Competition Held Date', 'smokeWings'),
        'section' => 'competion_date_banner_section',
        'type' => 'text',
    ));


     $customizer->add_setting('competition_sub_title', array(
        'default' => __('Bingham County Mayors Scholarship Fundraiser', 'smokeWings'),
    ));
    $customizer->add_control('competition_sub_title', array(
        'label' => __('Competition Held Sub Title', 'smokeWings'),
        'section' => 'competion_date_banner_section',
        'type' => 'text',
    ));
    
    //description

    $customizer->add_setting('competition_held_description', array(
        'default' => __('Friday June 28, 2024 from 5-7pm – Community invited to enjoy BBQ, Kids-Q, activities and an auction to benefit the high school seniors of Bingham County through the Bingham County Mayors Scholarship. Come and help support a wonderful cause.', 'smokeWings'),
    ));
    $customizer->add_control('competition_held_description', array(
        'label' => __('Competition Held Description', 'smokeWings'),
        'section' => 'competion_date_banner_section',
        'type' => 'textarea',

    ));

}
add_action('customize_register', 'smokeWings_competion_date_banner_customizer');
