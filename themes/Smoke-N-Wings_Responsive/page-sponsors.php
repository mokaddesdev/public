<?php
/**
 * Sponsor Page Template
 *
 * @package smokewings
 */
defined( 'ABSPATH' ) || exit;

get_header();

get_template_part( 'template-parts/breadcrumb_section' );

get_template_part( 'template-parts/sponsor_gallery' );

get_footer();