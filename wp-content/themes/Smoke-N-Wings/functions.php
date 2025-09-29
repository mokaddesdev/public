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
include_once get_template_directory() . '/inc/customizer/company_info.php';
include_once get_template_directory() . '/inc/customizer/competition_time_location.php';
include_once get_template_directory() . '/inc/customizer/hero.php';
include_once get_template_directory() . '/inc/customizer/faqs.php';
include_once get_template_directory() . '/inc/customizer/competion_date_banner.php';
include_once get_template_directory() . '/inc/customizer/sponsors.php';
include_once get_template_directory() . '/inc/customizer/best_bbq_action.php';
include_once get_template_directory() . '/inc/customizer/footer.php';






// Include CPT
include_once get_template_directory() . '/inc/CPT/faqs.php';
include_once get_template_directory() . '/inc/CPT/bestbbq.php';
include_once get_template_directory() . '/inc/CPT/kids.php';
include_once get_template_directory() . '/inc/CPT/sponsors.php';







?>
