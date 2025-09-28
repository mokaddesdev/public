<?php

/**
 * Theme Functions
 */


// Include Default Theme Support
include_once get_template_directory() . '/inc/default.php';

// Include Enqueue Scripts
include_once get_template_directory() . '/inc/enqueue.php';

// include customizer
include_once get_template_directory() . '/inc/customizer/header.php';
include_once get_template_directory() . '/inc/customizer/about.php';

// Include CPT
include_once get_template_directory() . '/inc/CPT/faqs.php';
include_once get_template_directory() . '/inc/CPT/gallery.php';
include_once get_template_directory() . '/inc/CPT/kids.php';
include_once get_template_directory() . '/inc/CPT/sponsors.php';






?>
