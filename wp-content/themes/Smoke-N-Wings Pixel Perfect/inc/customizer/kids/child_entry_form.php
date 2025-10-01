<?php 

/**
 * Child Entry Form  Customizer
 */

function smokeWings_child_entry_form_customizer($customizer){
    //Settings
    $customizer->add_section('child_entry_form_section', array(
        'title' => __('Child Entry Form Settings', 'smokeWings'),
        'priority' => 144,
    ));

    $customizer->add_setting('child_entry_form_title', array(
        'default' => __('Welcome to Form Builder', 'smokeWings'),
    ));
    $customizer->add_control('child_entry_form_title', array(
        'label' => __('Child Entry Form Title', 'smokeWings'),
        'section' => 'child_entry_form_section',
        'type' => 'text',
    ));

    
    //Child Entry Form Description

    $customizer->add_setting('child_entry_form_description', array(
        'default' => __('Each child needs a separate entry.', 'smokeWings'),
    ));
    $customizer->add_control('child_entry_form_description', array(
        'label' => __('Child Entry Form Description', 'smokeWings'),
        'section' => 'child_entry_form_section',
        'type' => 'textarea',

    ));

    //child_entry_form_right_title
    $customizer->add_setting('child_entry_form_right_title', array(
        'default' => __('This will be a fun and rewarding event. Space is limited so sign up now. To enter, fill out the form.', 'smokeWings'),
    ));
    $customizer->add_control('child_entry_form_right_title', array(
        'label' => __('Child Entry Form Right Title', 'smokeWings'),
        'section' => 'child_entry_form_section',
        'type' => 'textarea',
    ));

      //child_entry_form_right_description'
    $customizer->add_setting('child_entry_form_right_description', array(
        'default' => __('Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.', 'smokeWings'),
    ));
    $customizer->add_control('child_entry_form_right_description', array(
        'label' => __('Child Entry Form Right Description', 'smokeWings'),
        'section' => 'child_entry_form_section',
        'type' => 'textarea',
    ));

         //child_entry_form_right_button_text
    $customizer->add_setting('child_entry_form_right_button_text', array(
        'default' => __('Enter the competition', 'smokeWings'),
    ));
    $customizer->add_control('child_entry_form_right_button_text', array(
        'label' => __('Child Entry Form Right Button Text', 'smokeWings'),
        'section' => 'child_entry_form_section',
        'type' => 'text',
    ));

     // Child Entry Form background image
$customizer->add_setting('child_entry_form_image', array(
    'default' => get_template_directory_uri() . '/assets/images/formbg.png',
));

$customizer->add_control(new WP_Customize_Image_Control(
    $customizer,
    'child_entry_form_image_control',
    array(
        'label'    => __('Child Entry Form Background Image', 'smokeWings'),
        'section'  => 'child_entry_form_section',
        'settings' => 'child_entry_form_image',
    )
));


}
add_action('customize_register', 'smokeWings_child_entry_form_customizer');
