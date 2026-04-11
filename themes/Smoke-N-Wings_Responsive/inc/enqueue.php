<?php 
/**
 * Enqueue scripts and styles.
 * 
 * @package smokewings
 */

function laundryclean_enqueue_scripts() {
    // Tailwind & style
    wp_enqueue_style('tailwind-css', THEME_DIR_URI . '/assets/css/output.css', [], filemtime( THEME_DIR . '/assets/css/output.css'));
    wp_enqueue_style('style-css', THEME_DIR_URI . '/style.css', [], filemtime( THEME_DIR . '/style.css'));

    // Slick CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', [], '1.9.0');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', [], '1.9.0');

    // jQuery
    wp_enqueue_script('jquery');

    // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], '1.9.0', true);


    // Custom JS
    wp_enqueue_script('custom-js', THEME_DIR_URI . '/assets/js/custom-js.js', ['jquery', 'slick-js'], filemtime( THEME_DIR . '/assets/js/custom-js.js'), true);
     
    // cookie-js
    wp_enqueue_script('cookie-js', THEME_DIR_URI . '/assets/js/cookie-js.js', ['jquery'], filemtime( THEME_DIR . '/assets/js/cookie-js.js'), true);

     wp_localize_script('cookie-js', 'cookieData', array(
        'ajax_url'   => admin_url('admin-ajax.php'),
        'nonce'      => wp_create_nonce('cookie_nonce'),
        'expire_days'=> 365
    ));
    
}
add_action('wp_enqueue_scripts', 'laundryclean_enqueue_scripts');

