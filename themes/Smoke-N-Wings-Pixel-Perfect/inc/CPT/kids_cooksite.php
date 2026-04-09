<?php
/**
 * Register Multiple CPTs with full features + Pricing Meta Field
 */

function smokeWings_register_cpts() {

    $cpt_register = array(
        'kids' => array(
            'singular' => 'Kid',
            'plural'   => 'Kids',
            'icon'     => 'dashicons-food'
        ),
        'cook_site' => array(
            'singular' => 'Cook Site',
            'plural'   => 'Cook Sites',
            'icon'     => 'dashicons-admin-multisite'
        )
    );

    foreach ($cpt_register as $slug => $args) {

        $labels = array(
            'name'                  => __($args['plural'], 'smokeWings'),
            'singular_name'         => __($args['singular'], 'smokeWings'),
            'add_new'               => __('Add New '.$args['singular'], 'smokeWings'),
            'add_new_item'          => __('Add New '.$args['singular'], 'smokeWings'),
            'edit_item'             => __('Edit '.$args['singular'], 'smokeWings'),
            'new_item'              => __('New '.$args['singular'], 'smokeWings'),
            'all_items'             => __('All '.$args['plural'], 'smokeWings'),
            'view_item'             => __('View '.$args['singular'], 'smokeWings'),
            'search_items'          => __('Search '.$args['plural'], 'smokeWings'),
            'not_found'             => __('No '.$args['plural'].' found', 'smokeWings'),
            'not_found_in_trash'    => __('No '.$args['plural'].' found in Trash', 'smokeWings'),
        );

        register_post_type( $slug, array(
            'labels'        => $labels,
            'public'        => true,
            'show_in_rest'  => true,
            'menu_icon'     => $args['icon'],
            'supports'      => array(
                'title',
                'editor',
                'thumbnail',
            ),
        ));
    }
}
add_action('init', 'smokeWings_register_cpts');


function smokeWings_add_meta_boxes() {
    $cpts = array('kids','cook_site'); 
    foreach($cpts as $cpt){
        add_meta_box(
            $cpt.'_details_meta_box',
            'Details',
            'smokeWings_meta_box_callback',
            $cpt,
            'side' ,
        );
    }
}
add_action('add_meta_boxes', 'smokeWings_add_meta_boxes');


function smokeWings_meta_box_callback($post) {
    $price = get_post_meta($post->ID, '_price', true);

    echo '<p><label><strong>Pricing:</strong></label><br />';
    echo '<input type="text" name="price_field" value="' . esc_attr($price) . '" style="width:100%;" /></p>';
}

function smokeWings_save_meta_box($post_id) {
    if (array_key_exists('price_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_price',
            sanitize_text_field($_POST['price_field'])
        );
    }
}
add_action('save_post', 'smokeWings_save_meta_box');

