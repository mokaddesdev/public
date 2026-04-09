<?php
/**
 * best_bbq_gallery_heading customize
 */

function smokeWings_best_bbq_gallery_heading_customizer($wp_customize) {

    //Settings

    $wp_customize->add_section('best_bbq_gallery_heading', array(
        'title' => __('Best BBQ Gallery Settings', 'smokeWings'),
        'priority' => 127,
    ));
    //  Title

    $wp_customize->add_setting('best_bbq_gallery_heading_title', array(
        'default' => __('Smokin’ Highlights: The <span class="text-[#F65600]"> best bbq </span> in action', 'smokeWings'),
        'sanitize_callback' => 'wp_kses_post',
    ));

       $wp_customize->add_control('best_bbq_gallery_heading_title', array(
        'label' => __('Best BBQ Show Title', 'smokeWings'),
        'section' => 'best_bbq_gallery_heading',
        'type' => 'textarea',
    ));
   
}
add_action('customize_register', 'smokeWings_best_bbq_gallery_heading_customizer');