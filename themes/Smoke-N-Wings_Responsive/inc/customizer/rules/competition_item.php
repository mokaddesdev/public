<?php
/**
 * Competition Item Customizer
 * 
 * @package smokewings
 */
function smokewings_competition_item_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('competition_item_section', array(
        'title'    => __('Competition Item Settings', 'smokewings'),
        'priority' => 135,
        'capability'  => 'edit_theme_options',
    ));

    // Title
    $wp_customize->add_setting('competition_item_title', array(
       'default' => '<span class="text-[#F65600]"> The items </span> they are looking for are',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_item_title', array(
        'label'   => __('Competition Item Title', 'smokewings'),
        'section' => 'competition_item_section',
        'type'    => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('competition_item_image', array(
        'default'           => THEME_DIR_URI . '/assets/images/rule3.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'competition_item_image_control',
        array(
            'label'    => __('Competition Item Image', 'smokewings'),
            'section'  => 'competition_item_section',
            'settings' => 'competition_item_image',
        )
    ));
}
add_action('customize_register', 'smokewings_competition_item_customizer');
