<?php
/**
 * Enter Competition Page Heading Customizer
 */
function smokeWings_enter_competition_heading($wp_customize) {

    $wp_customize->add_section('enter_competition_customizer', array(
        'title'    => __('🏆 Enter Competition Page Settings', 'smokeWings'),
        'priority' => 149,
    ));

    $wp_customize->add_setting('enter_competition_heading', array(
        'sanitize_callback' => 'esc_html',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'enter_competition_heading',
        array(
            'label'       => __('⭐ Enter Competition Page Heading ⭐', 'smokeWings'),
            'section'     => 'enter_competition_customizer',
            'type'        => 'hidden',
        )
    ));

}
add_action('customize_register', 'smokeWings_enter_competition_heading');
