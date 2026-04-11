<?php
/**
 * Kids Page Template
 *
 * @package smokewings
 */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part( 'template-parts/breadcrumb_section' );

get_template_part( 'template-parts/kids/kids_type' );

get_template_part( 'template-parts/kids/kids_younger_division' );

get_template_part( 'template-parts/kids/kids_older_division' );

get_template_part( 'template-parts/kids/kids_older_competition_monitoring' );

get_template_part( 'template-parts/kids/child_entry_form' );

get_footer();