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


// gaming_rules_customizer
include_once get_template_directory() . '/inc/customizer/rules/gaming_rules_customizer.php';
include_once get_template_directory() . '/inc/customizer/rules/competition_rules.php';
include_once get_template_directory() . '/inc/customizer/rules/competition_awareness.php';
include_once get_template_directory() . '/inc/customizer/rules/competition_held_on.php';
include_once get_template_directory() . '/inc/customizer/rules/competition_item.php';
include_once get_template_directory() . '/inc/customizer/rules/contestant_responsibility.php';


//  kids customizer
include_once get_template_directory() . '/inc/customizer/kids/kids.php';
include_once get_template_directory() . '/inc/customizer/kids/kids_younger_division.php';
include_once get_template_directory() . '/inc/customizer/kids/kids_older_division.php';
include_once get_template_directory() . '/inc/customizer/kids/kids_older_competition_monitoring.php';
include_once get_template_directory() . '/inc/customizer/kids/kids_type.php';
include_once get_template_directory() . '/inc/customizer/kids/child_entry_form.php';

// sponsor customizer
include_once get_template_directory() . '/inc/customizer/sponsor/sponsor_page_customizer.php';
include_once get_template_directory() . '/inc/customizer/sponsor/sponsor_page_heading.php';

// scholarship customizer
include_once get_template_directory() . '/inc/customizer/scholarship/scholarship.php';
include_once get_template_directory() . '/inc/customizer/scholarship/featured_sponsor_scholarship.php';


// contact-us customizer
include_once get_template_directory() . '/inc/customizer/contact-us/contact_form.php';
include_once get_template_directory() . '/inc/customizer/contact-us/contact_us.php';

// enter_competition customizer
include_once get_template_directory() . '/inc/customizer/enter_competition/enter_competition_page.php';
include_once get_template_directory() . '/inc/customizer/enter_competition/enter_competition.php';




// Include CPT
include_once get_template_directory() . '/inc/CPT/faqs.php';
include_once get_template_directory() . '/inc/CPT/bestbbq.php';
include_once get_template_directory() . '/inc/CPT/kids_cooksite.php';
include_once get_template_directory() . '/inc/CPT/sponsors.php';
include_once get_template_directory() . '/inc/CPT/competition_rule.php';

require get_template_directory() . '/inc/cookie.php';

get_template_part('inc/preloader');



function allow_svg_uploads($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');












?>
