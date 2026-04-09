<?php 

/**
 * Hero Customizer
 */

function smokeWings_hero_customizer($customizer){
    //Settings
    $customizer->add_section('hero_section', array(
        'title' => __('Hero Settings', 'smokeWings'),
        'priority' => 124,
    ));

    //button text left
    $customizer->add_setting('hero_button_text_left', array(
        'default' => __('Enter competition', 'smokeWings'),
    ));
    $customizer->add_control('hero_button_text_left', array(
        'label' => __('Hero Button Text Left', 'smokeWings'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

      //button text right
    $customizer->add_setting('hero_button_text_right', array(
        'default' => __('Check Out The Rules', 'smokeWings'),
    ));
    $customizer->add_control('hero_button_text_right', array(
        'label' => __('Hero Button Text Right', 'smokeWings'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    // hero image
$customizer->add_setting('hero_image', array(
    'default' => get_template_directory_uri() . '/assets/images/hero.png',
));

$customizer->add_control(new WP_Customize_Image_Control(
    $customizer,
    'hero_image_control',
    array(
        'label'    => __('Hero Image', 'smokeWings'),
        'section'  => 'hero_section',
        'settings' => 'hero_image',
    )
));

}
add_action('customize_register', 'smokeWings_hero_customizer');
