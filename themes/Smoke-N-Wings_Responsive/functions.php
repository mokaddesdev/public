<?php
/**
 * Theme Functions
 *
 * @package smokewings
 */

defined( 'ABSPATH' ) || exit;

/**
 * Theme Constants
 */
if ( ! defined( 'THEME_TEMPLATE' ) ) {
    define( 'THEME_TEMPLATE', get_template_directory() );
}

if ( ! defined( 'THEME_DIR_URI' ) ) {
    define( 'THEME_DIR_URI', get_template_directory_uri() );
}

if ( ! defined( 'THEME_DIR' ) ) {
    define( 'THEME_DIR', get_template_directory() );
}

/**
 * Core Theme Files
 */
require_once THEME_TEMPLATE . '/inc/default.php';
require_once THEME_TEMPLATE . '/inc/enqueue.php';

/**
 * Home Customizer
 */
require_once THEME_TEMPLATE . '/inc/customizer/home/home.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/header.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/about.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/company_info.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/competition_time_location.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/hero.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/faqs_heading.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/competion_date_banner.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/best_bbq_gallery_heading.php';
require_once THEME_TEMPLATE . '/inc/customizer/home/footer.php';

/**
 * Rules Customizer
 */
require_once THEME_TEMPLATE . '/inc/customizer/rules/gaming_rules_customizer.php';
require_once THEME_TEMPLATE . '/inc/customizer/rules/competition_rules.php';
require_once THEME_TEMPLATE . '/inc/customizer/rules/competition_awareness.php';
require_once THEME_TEMPLATE . '/inc/customizer/rules/competition_held_on.php';
require_once THEME_TEMPLATE . '/inc/customizer/rules/competition_item.php';
require_once THEME_TEMPLATE . '/inc/customizer/rules/contestant_responsibility.php';

/**
 * Kids Customizer
 */
require_once THEME_TEMPLATE . '/inc/customizer/kids/kids.php';
require_once THEME_TEMPLATE . '/inc/customizer/kids/kids_younger_division.php';
require_once THEME_TEMPLATE . '/inc/customizer/kids/kids_older_division.php';
require_once THEME_TEMPLATE . '/inc/customizer/kids/kids_older_competition_monitoring.php';
require_once THEME_TEMPLATE . '/inc/customizer/kids/kids_type.php';
require_once THEME_TEMPLATE . '/inc/customizer/kids/child_entry_form.php';

/**
 * Sponsor Customizer
 */
require_once THEME_TEMPLATE . '/inc/customizer/sponsor/sponsor_page_customizer.php';
require_once THEME_TEMPLATE . '/inc/customizer/sponsor/sponsor_page_heading.php';

/**
 * Scholarship Customizer
 */
require_once THEME_TEMPLATE . '/inc/customizer/scholarship/scholarship.php';
require_once THEME_TEMPLATE . '/inc/customizer/scholarship/featured_sponsor_scholarship.php';

/**
 * Contact Us Customizer
 */
require_once THEME_TEMPLATE . '/inc/customizer/contact-us/contact_form.php';
require_once THEME_TEMPLATE . '/inc/customizer/contact-us/contact_us.php';

/**
 * Enter Competition Customizer
 */
require_once THEME_TEMPLATE . '/inc/customizer/enter_competition/enter_competition_page.php';
require_once THEME_TEMPLATE . '/inc/customizer/enter_competition/enter_competition.php';

/**
 * Custom Post Types
 */
require_once THEME_TEMPLATE . '/inc/cpt/faqs.php';
require_once THEME_TEMPLATE . '/inc/cpt/bestbbq.php';
require_once THEME_TEMPLATE . '/inc/cpt/kids_cooksite.php';
require_once THEME_TEMPLATE . '/inc/cpt/sponsors.php';
require_once THEME_TEMPLATE . '/inc/cpt/competition_rule.php';

/**
 * Utilities
 */
require_once THEME_TEMPLATE . '/inc/cookie.php';