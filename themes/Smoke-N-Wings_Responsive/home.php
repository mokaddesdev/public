<?php
/**
 * Rules page for blog page
 * 
 * @package smokewings
 */
defined( 'ABSPATH' ) || exit;

get_header();

get_template_part('template-parts/breadcrumb_section');
get_template_part("template-parts/rules/competition_rules");
get_template_part("template-parts/rules/competition_held_on");
get_template_part("template-parts/rules/competition_awareness");
get_template_part("template-parts/home/competition_time_location");
get_template_part("template-parts/rules/competition_item");
get_template_part("template-parts/home/competion_date_banner_shap_div");get_template_part("template-parts/rules/contestant_responsibility");

get_footer();