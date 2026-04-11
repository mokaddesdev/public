<?php
/**
 * Kids Older Division Customizer
 * 
 * @package smokewings
 */

function smokewings_kids_older_division_customizer( $wp_customize ) {

    // Section
    $wp_customize->add_section(
        'kids_older_division_section',
        array(
            'title'       => __( 'Kids Older Division Settings', 'smokewings' ),
            'priority'    => 142,
            'capability'  => 'edit_theme_options',
        )
    );

    // Title
    $wp_customize->add_setting(
        'kids_older_division_title',
        array(
            'default'           => 'The <span class="text-[#F65600]"> Older </span> Division',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'kids_older_division_title',
        array(
            'label'   => __( 'Kids Older Division Title', 'smokewings' ),
            'section' => 'kids_older_division_section',
            'type'    => 'textarea',
        )
    );

    // Description
    $wp_customize->add_setting(
        'kids_older_division_description',
        array(
            'default'           => 'The older kids will get to compete in a kid-only environment, and are allowed to challenge their peers much like they do in any other sport or activity that hosts competitions and tournaments. Parents can encourage their children from outside the cooking area, but cannot help or do any of the cooking. Each entry shall be cooked by one child only. The child must do the preparation, cooking, and presentation. This means that the child should be able to put his/her own protein on the grill, turn his/her own protein on the grill, remove the protein from the grill, and do all garnishing (if garnish is being used). Must be able to temp and flip their own food. Are allowed to bring written or pictorial notes with them for guidance but must be able to read and follow it themselves. It helps if the children make these note sheets themselves.',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'kids_older_division_description',
        array(
            'label'   => __( 'Kids Older Division Description', 'smokewings' ),
            'section' => 'kids_older_division_section',
            'type'    => 'textarea',
        )
    );

    // Button Text
    $wp_customize->add_setting(
        'kids_older_division_button_text',
        array(
            'default'           => 'enter the competition',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'kids_older_division_button_text',
        array(
            'label'   => __( 'Kids Older Division Button Text', 'smokewings' ),
            'section' => 'kids_older_division_section',
            'type'    => 'text',
        )
    );

    // Image
    $wp_customize->add_setting(
        'kids_older_division_image',
        array(
            'default'           => THEME_DIR_URI . '/assets/images/olderdivision.png',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'kids_older_division_image_control',
            array(
                'label'    => __( 'Kids Older Division Image', 'smokewings' ),
                'section'  => 'kids_older_division_section',
                'settings' => 'kids_older_division_image',
            )
        )
    );
}

add_action( 'customize_register', 'smokewings_kids_older_division_customizer' );