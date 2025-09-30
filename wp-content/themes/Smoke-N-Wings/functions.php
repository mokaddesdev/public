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
include_once get_template_directory() . '/inc/customizer/enter_competition.php';
include_once get_template_directory() . '/inc/customizer/contact_form.php';

include_once get_template_directory() . '/inc/customizer/featured_sponsor_scholarship.php';

include_once get_template_directory() . '/inc/customizer/kids_younger_division.php';
include_once get_template_directory() . '/inc/customizer/kids_older_division.php';
include_once get_template_directory() . '/inc/customizer/kids_older_competition_monitoring.php';
include_once get_template_directory() . '/inc/customizer/kids_type.php';
include_once get_template_directory() . '/inc/customizer/child_entry_form.php';




// Include CPT
include_once get_template_directory() . '/inc/CPT/faqs.php';
include_once get_template_directory() . '/inc/CPT/bestbbq.php';
include_once get_template_directory() . '/inc/CPT/kids_cooksite.php';
include_once get_template_directory() . '/inc/CPT/sponsors.php';







?>
