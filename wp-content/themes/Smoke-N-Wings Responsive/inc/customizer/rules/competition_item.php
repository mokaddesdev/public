<?php
/**
 * Competition Item Customizer
 */
function smokeWings_competition_item_customizer($wp_customize) {

    // Section
    $wp_customize->add_section('competition_item_section', array(
        'title'    => __('Competition Item Settings', 'smokeWings'),
        'priority' => 135,
    ));

    // Title
    $wp_customize->add_setting('competition_item_title', array(
       'default' => '<span class="text-[#F65600]"> The items </span> they are looking for are',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('competition_item_title', array(
        'label'   => __('Competition Item Title', 'smokeWings'),
        'section' => 'competition_item_section',
        'type'    => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('competition_item_image', array(
        'default'           => get_template_directory_uri() . '/assets/images/rule3.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'competition_item_image_control',
        array(
            'label'    => __('Competition Item Image', 'smokeWings'),
            'section'  => 'competition_item_section',
            'settings' => 'competition_item_image',
        )
    ));
}
add_action('customize_register', 'smokeWings_competition_item_customizer');
