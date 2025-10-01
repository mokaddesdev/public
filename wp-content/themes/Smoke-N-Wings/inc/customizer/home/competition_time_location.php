<?php
/**
 * Competition Time & Location Customizer
 */
function smokeWings_set_time_location_customizer($customizer){

    // Section
    $customizer->add_section('set_time_location_section', array(
        'title' => __('Competition Time & Location', 'smokeWings'),
        'priority' => 126,
    ));

    // Time Title
    $customizer->add_setting('set_time_title', array(
        'default' => __('When:', 'smokeWings'),
    ));
    $customizer->add_control('set_time_title', array(
        'label' => __('Time Title', 'smokeWings'),
        'section' => 'set_time_location_section',
        'type' => 'text',
    ));

    // Competition Time
    $customizer->add_setting('competition_time', array(
        'default' => __('June 28-29, 2025', 'smokeWings'),
    ));
    $customizer->add_control('competition_time', array(
        'label' => __('Competition Time', 'smokeWings'),
        'section' => 'set_time_location_section',
        'type' => 'text',
    ));

    // Location Title
    $customizer->add_setting('competition_location_title', array(
        'default' => __('Where:', 'smokeWings'),
    ));
    $customizer->add_control('competition_location_title', array(
        'label' => __('Location Title', 'smokeWings'),
        'section' => 'set_time_location_section',
        'type' => 'text',
    ));

    // Competition Location
    $customizer->add_setting('competition_location', array(
        'default' => __("Blackfoot, Idaho\nBlackfoot Airport (McCarly Field)", 'smokeWings'),
    ));
    $customizer->add_control('competition_location', array(
        'label' => __('Competition Location', 'smokeWings'),
        'section' => 'set_time_location_section',
        'type' => 'textarea',
    ));

    // Competition Description
    $customizer->add_setting('competition_description', array(
        'default' => __('Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.', 'smokeWings'),
    ));
    $customizer->add_control('competition_description', array(
        'label' => __('Competition Description', 'smokeWings'),
        'section' => 'set_time_location_section',
        'type' => 'textarea',
    ));

}
add_action('customize_register', 'smokeWings_set_time_location_customizer');
