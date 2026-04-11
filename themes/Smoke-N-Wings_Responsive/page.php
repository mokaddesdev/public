<?php
/**
 * 404 / Fallback Page
 *
 * @package smokewings
 */

defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/breadcrumb_section' );
?>

<section class="relative mx-auto w-full px-[5%] lg:px-[7.5%] py-16 flex flex-col items-center justify-center text-center bg-gradient-to-b from-gray-50 to-gray-100 rounded-xl shadow-xl">

  <!-- Heading -->
  <h1 class="text-3xl sm:text-5xl font-extrabold text-gray-900 mb-4">
    <?php esc_html_e( 'Oops! Page Not Found', 'smokewings' ); ?>
  </h1>

  <!-- Description -->
  <p class="text-gray-600 mb-10 sm:mb-12 text-lg sm:text-xl max-w-2xl">
    <?php esc_html_e( 'The page you are looking for might have been removed, renamed, or is temporarily unavailable in Smoke-N-Wings BBQ Competition website.', 'smokewings' ); ?>
  </p>

  <!-- Button -->
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
     class="relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#142137] to-[#1f3a8a] text-white font-semibold text-lg rounded-full overflow-hidden group hover:from-[#1f3a8a] hover:to-[#142137] transition-all duration-500 shadow-lg">

    <!-- Hover Effect -->
    <span class="absolute inset-0 bg-white -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out opacity-10 rounded-full"></span>

    <!-- Text -->
    <span class="relative z-10 flex items-center gap-3">

      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>

      <?php esc_html_e( 'Go Back Home', 'smokewings' ); ?>

    </span>
  </a>

</section>

<?php get_footer(); ?>