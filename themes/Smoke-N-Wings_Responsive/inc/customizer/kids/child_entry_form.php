<?php 
/**
 * Child Entry Form Customizer
 * 
 * @package smokewings
 */

function smokewings_child_entry_form_customizer( $customizer ) {

    // Section
    $customizer->add_section(
        'child_entry_form_section',
        array(
            'title'       => __( 'Child Entry Form Settings', 'smokewings' ),
            'priority'    => 144,
            'capability'  => 'edit_theme_options',
        )
    );

    // Title
    $customizer->add_setting(
        'child_entry_form_title',
        array(
            'default'           => 'Welcome to Form Builder',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'child_entry_form_title',
        array(
            'label'   => __( 'Child Entry Form Title', 'smokewings' ),
            'section' => 'child_entry_form_section',
            'type'    => 'text',
        )
    );

    // Description
    $customizer->add_setting(
        'child_entry_form_description',
        array(
            'default'           => 'Each child needs a separate entry.',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $customizer->add_control(
        'child_entry_form_description',
        array(
            'label'   => __( 'Child Entry Form Description', 'smokewings' ),
            'section' => 'child_entry_form_section',
            'type'    => 'textarea',
        )
    );

    // Right Title
    $customizer->add_setting(
        'child_entry_form_right_title',
        array(
            'default'           => 'This will be a fun and rewarding event. Space is limited so sign up now. To enter, fill out the form.',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $customizer->add_control(
        'child_entry_form_right_title',
        array(
            'label'   => __( 'Child Entry Form Right Title', 'smokewings' ),
            'section' => 'child_entry_form_section',
            'type'    => 'textarea',
        )
    );

    // Right Description
    $customizer->add_setting(
        'child_entry_form_right_description',
        array(
            'default'           => 'Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $customizer->add_control(
        'child_entry_form_right_description',
        array(
            'label'   => __( 'Child Entry Form Right Description', 'smokewings' ),
            'section' => 'child_entry_form_section',
            'type'    => 'textarea',
        )
    );

    // Button Text
    $customizer->add_setting(
        'child_entry_form_right_button_text',
        array(
            'default'           => 'Enter the competition',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $customizer->add_control(
        'child_entry_form_right_button_text',
        array(
            'label'   => __( 'Child Entry Form Right Button Text', 'smokewings' ),
            'section' => 'child_entry_form_section',
            'type'    => 'text',
        )
    );

    // Image
    $customizer->add_setting(
        'child_entry_form_image',
        array(
            'default'           => THEME_DIR_URI . '/assets/images/formbg.png',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'child_entry_form_image_control',
            array(
                'label'    => __( 'Child Entry Form Background Image', 'smokewings' ),
                'section'  => 'child_entry_form_section',
                'settings' => 'child_entry_form_image',
            )
        )
    );
}

add_action( 'customize_register', 'smokewings_child_entry_form_customizer' );