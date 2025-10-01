<?php 
/**
 * FAQs heading
 */


function smokeWings_faqs_heading_customizer($customizer){
    //Settings
    $customizer->add_section('faqs_heading', array(
        'title' => __('FAQs Settings', 'smokeWings'),
        'priority' => 129,
    ));

    $customizer->add_setting('faqs_heading_title', array(
        'default' => __('Frequently <span class="text-[#F65600]"> Asked </span> Questions', 'smokeWings'),
        'sanitize_callback' => 'wp_kses_post',
    ));
    $customizer->add_control('faqs_heading_title', array(
        'label' => __("FAQ's Title", 'smokeWings'),
        'section' => 'faqs_heading',
        'type' => 'textarea',
    ));


     // faqs  image
$customizer->add_setting('faqs_heading_image', array(
    'default' => get_template_directory_uri() . '/assets/images/faqs.png',
));

$customizer->add_control(new WP_Customize_Image_Control(
    $customizer,
    'faqs_heading_image_control',
    array(
        'label'    => __('Faqs Image', 'smokeWings'),
        'section'  => 'faqs_heading',
        'settings' => 'faqs_heading_image',
    )
    ));


}
add_action('customize_register','smokeWings_faqs_heading_customizer');