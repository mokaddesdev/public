<?php
/**
 * Register Multiple CPTs with full features + Pricing Meta Field
 * 
 * @package smokewings
 */

if( ! function_exists( "smokewings_register_cpts" ) ) {
function smokewings_register_cpts() {

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

    foreach ( $cpt_register as $slug => $args ) {

        $labels = array(
            'name'                  => __( $args['plural'], 'smokewings' ),
            'singular_name'         => __( $args['singular'], 'smokewings' ),
            'add_new'               => __( 'Add New ' . $args['singular'], 'smokewings' ),
            'add_new_item'          => __( 'Add New ' . $args['singular'], 'smokewings' ),
            'edit_item'             => __( 'Edit ' . $args['singular'], 'smokewings' ),
            'new_item'              => __( 'New ' . $args['singular'], 'smokewings' ),
            'all_items'             => __( 'All ' . $args['plural'], 'smokewings' ),
            'view_item'             => __( 'View ' . $args['singular'], 'smokewings' ),
            'search_items'          => __( 'Search ' . $args['plural'], 'smokewings' ),
            'not_found'             => __( 'No ' . $args['plural'].' found', 'smokewings' ),
            'not_found_in_trash'    => __( 'No ' . $args['plural'].' found in Trash', 'smokewings' ),
        );

        register_post_type( $slug, array(
            'labels'        => $labels,
            'public'        => true,
            'show_in_rest'  => true,
            'menu_icon'     => $args['icon'],
            'has_archive'   => true,
            'rewrite'       => array( 'slug' => $slug ),
            'supports'      => array( 'title', 'editor', 'thumbnail' ),
        ) );
    }
}

add_action( 'init', 'smokewings_register_cpts' );
}

if( ! function_exists( "smokewings_add_meta_boxes" ) ) {
function smokewings_add_meta_boxes() {

    $cpts = array( 'kids', 'cook_site' );

    foreach( $cpts as $cpt ){
        add_meta_box(
            $cpt . '_details_meta_box',
            __( 'Details', 'smokewings' ),
            'smokewings_meta_box_callback',
            $cpt,
            'side',
        );
    }
}

add_action( 'add_meta_boxes', 'smokewings_add_meta_boxes' );
}

if ( ! function_exists( "smokewings_meta_box_callback" ) ) {
function smokewings_meta_box_callback( $post ) {

    wp_nonce_field( 'smokewings_save_meta_box', 'smokewings_meta_box_nonce' );

    $price = get_post_meta( $post->ID, '_smokewings_price', true );
    ?>
    <p>
        <label>
            <strong>
                <?php echo esc_html__( "Pricing:", "smokewings" ); ?>
            </strong>
        </label>
        <br/>
        <input type="number" step="0.01" min="0" name="_smokewings_price" value="<?php echo esc_attr( $price ); ?>" style="width:100%;" />
    </p>
<?php
}
}

if ( ! function_exists( "smokewings_save_meta_box" ) ) {
function smokewings_save_meta_box( $post_id ) {

    $post_type = get_post_type( $post_id );

    if ( ! in_array( $post_type, array( 'kids', 'cook_site' ), true ) ) {
        return;
    }
     // Nonce check
    if ( ! isset( $_POST['smokewings_meta_box_nonce'] ) ||
         ! wp_verify_nonce( $_POST['smokewings_meta_box_nonce'], 'smokewings_save_meta_box' ) ) {
        return;
    }

    // Autosave check
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Permission check
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Save field
    if ( isset( $_POST['_smokewings_price'] ) ) {
    $price = floatval( $_POST['_smokewings_price'] );
    update_post_meta( $post_id, '_smokewings_price', $price );
    }
}

add_action( 'save_post', 'smokewings_save_meta_box' );
}

