<?php

/**
 * Theme Functions
 */


// Include Default Theme Support
include_once get_template_directory() . '/inc/default.php';

// Include Enqueue Scripts
include_once get_template_directory() . '/inc/enqueue.php';

// include  home customizer
include_once get_template_directory() . '/inc/customizer/home/home.php';
include_once get_template_directory() . '/inc/customizer/home/header.php';
include_once get_template_directory() . '/inc/customizer/home/about.php';
include_once get_template_directory() . '/inc/customizer/home/company_info.php';
include_once get_template_directory() . '/inc/customizer/home/competition_time_location.php';
include_once get_template_directory() . '/inc/customizer/home/hero.php';
include_once get_template_directory() . '/inc/customizer/home/faqs_heading.php';
include_once get_template_directory() . '/inc/customizer/home/competion_date_banner.php';

include_once get_template_directory() . '/inc/customizer/home/best_bbq_gallery_heading.php';

include_once get_template_directory() . '/inc/customizer/home/footer.php';
include_once get_template_directory() . '/inc/customizer/enter_competition.php';
include_once get_template_directory() . '/inc/customizer/contact_form.php';

include_once get_template_directory() . '/inc/customizer/featured_sponsor_scholarship.php';


//  kids customizer
include_once get_template_directory() . '/inc/customizer/kids/kids.php';
include_once get_template_directory() . '/inc/customizer/kids/kids_younger_division.php';
include_once get_template_directory() . '/inc/customizer/kids/kids_older_division.php';
include_once get_template_directory() . '/inc/customizer/kids/kids_older_competition_monitoring.php';
include_once get_template_directory() . '/inc/customizer/kids/kids_type.php';
include_once get_template_directory() . '/inc/customizer/kids/child_entry_form.php';


include_once get_template_directory() . '/inc/customizer/sponsor_page_heading.php';





// Include CPT
include_once get_template_directory() . '/inc/CPT/faqs.php';
include_once get_template_directory() . '/inc/CPT/bestbbq.php';
include_once get_template_directory() . '/inc/CPT/kids_cooksite.php';
include_once get_template_directory() . '/inc/CPT/sponsors.php';







?>
