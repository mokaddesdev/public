<?php 
/**
 * Front page for home page
 * 
 * @package smokewings
 */
get_header();
get_template_part('template-parts/home/hero');
get_template_part('template-parts/home/about');
get_template_part('template-parts/home/competition_time_location');
get_template_part('template-parts/home/berbecue-gallery');
get_template_part('template-parts/home/competion_date_banner_shap_div');
get_template_part('template-parts/home/faqs');
get_footer();

?>