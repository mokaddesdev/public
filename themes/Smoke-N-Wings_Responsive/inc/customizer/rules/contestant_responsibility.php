<?php
/**
 * Contestant Responsibility Customizer
 * 
 * @package smokewings
 */
function smokewings_contestant_responsibility_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('contestant_responsibility_section', array(
        'title'    => __('Contestant Responsibility Settings', 'smokewings'),
        'priority' => 136,
        'capability'  => 'edit_theme_options',
    ));

    // Title
    $wp_customize->add_setting('contestant_responsibility_title', array(
       'default' => 'contestant\'s <span class="text-[#F65600]"> responsibility </span>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('contestant_responsibility_title', array(
        'label'   => __('Contestant Responsibility Title', 'smokewings'),
        'section' => 'contestant_responsibility_section',
        'type'    => 'textarea',
    ));

    // Description
    $wp_customize->add_setting('contestant_responsibility_description', array(
        'default'           => 'Neither the City of Blackfoot, McCarley Field nor the event organizers will be responsible for any injury, loss or damage that may occur to the contestants or the contestant’s property from any cause whatsoever. It is the contestant’s responsibility to protect equipment and space sothat no injury will result to the public, visitors, guests or persons or property.Cancellation and Refunds – A team may cancel up to 1 month (May 28 th ) prior to the event with full refund of site fee. Cancellations after May 28 th fill forfeit fees paid.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('contestant_responsibility_description', array(
        'label'   => __('Contestant Responsibility Description', 'smokewings'),
        'section' => 'contestant_responsibility_section',
        'type'    => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('contestant_responsibility_image', array(
        'default'           => THEME_DIR_URI . '/assets/images/rule4.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'contestant_responsibility_image_control',
        array(
            'label'    => __('Contestant Responsibility Image', 'smokewings'),
            'section'  => 'contestant_responsibility_section',
            'settings' => 'contestant_responsibility_image',
        )
    ));
}
add_action('customize_register', 'smokewings_contestant_responsibility_customizer');
