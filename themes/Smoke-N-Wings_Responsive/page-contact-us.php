<?php
/**
 * Contact us page
 * 
 * @package smokewings
 */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part('template-parts/breadcrumb_section');
get_template_part('template-parts/contact_form');

get_footer();