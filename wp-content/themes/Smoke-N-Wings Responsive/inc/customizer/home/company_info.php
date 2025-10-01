<?php 

/**
 * Top Header Customizer
 */

function smokeWings_customize_header($wp_customize)
{

    // Company Information Settings
    $wp_customize->add_section('company_information', array(
        'title' => __('Company Information Settings', 'smokeWings'),
        'priority' => 122,
    ));

  
        // Company Email
    $wp_customize->add_setting('company_email', array(
        'default' => __('smokenwingsbbq@gmail.com', 'smokeWings'),
    ));
    $wp_customize->add_control('company_email', array(
        'label' => __('Company Email', 'smokeWings'),
        'section' => 'company_information',
        'type' => 'email',
    ));
    
    $wp_customize->add_setting('service_time', array(
        'default' => __('Mon - Fri 09:00 - 18:00', 'smokeWings'),
    ));
    $wp_customize->add_control('service_time', array(
        'label' => __('Company Name', 'smokeWings'),
        'section' => 'company_information',
        'type' => 'text',
    ));

    // Company Phone
    $wp_customize->add_setting('company_phone', array(
        'default' => __('Call (800) 123 45 67', 'smokeWings'),
    ));
    $wp_customize->add_control('company_phone', array(
        'label' => __('Company Phone', 'smokeWings'),
        'section' => 'company_information',
        'type' => 'text',
    ));



}
add_action('customize_register', 'smokeWings_customize_header');