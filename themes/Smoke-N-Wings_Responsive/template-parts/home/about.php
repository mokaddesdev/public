<?php
/**
 * About Section
 *
 * @package smokewings
 */

$about_title = get_theme_mod(
    'about_title',
    'Join us for the <span class="text-[#F65600]">2025 Smoke-N-Wings</span> BBQ Competition!'
);

$about_description = get_theme_mod(
    'about_description',
    'Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket. The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.'
);

$about_button_text = get_theme_mod( 'about_button_text', 'Enter the competition' );

$about_image = get_theme_mod(
    'about_left_image',
    THEME_DIR_URI . '/assets/images/aboutimg.png'
);

$enter_page = get_page_by_path( 'enter-competition' );
$enter_link = $enter_page ? get_permalink( $enter_page ) : home_url( '/' );
?>

<section class="relative w-full px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%] mx-auto pt-3 xl:pt-[97px] pb-6 overflow-hidden">

  <div class="relative z-20 flex flex-col lg:flex-row items-center xl:items-start justify-center lg:justify-between gap-8 lg:gap-6 xl:gap-12 w-full max-w-[1300px] mx-auto text-center lg:text-left">

    <!-- SVG BACKGROUND -->
    <div class="absolute top-2 left-2 xl:-top-[42px] xl:-left-[45px] z-10 opacity-100">
      <?php get_template_part( 'svg/smoke_in_wings_svg' ); ?>
    </div>

    <!-- LEFT CONTENT -->
    <div class="about-left py-[13px] w-full lg:w-6/12 flex flex-col items-center lg:items-start gap-5">

      <?php if ( ! empty( $about_title ) ) : ?>
        <h2 class="home-heading pt-8 md:pt-0">
          <?php echo wp_kses_post( $about_title ); ?>
        </h2>
      <?php endif; ?>

      <?php if ( ! empty( $about_description ) ) : ?>
        <p class="text-black dark:text-white max-w-[533px] font-jost text-base md:text-[19px] leading-normal tracking-[0.38px]">
          <?php echo wp_kses_post( nl2br( $about_description ) ); ?>
        </p>
      <?php endif; ?>

    </div>

    <!-- RIGHT IMAGE FIXED -->
    <div class="relative w-full lg:w-6/12 flex justify-center lg:justify-end">

      <?php if ( ! empty( $about_image ) ) : ?>

        <!-- FIX WRAPPER -->
        <div class="relative w-full max-w-[624px] aspect-[624/495] overflow-hidden">

          <!-- IMAGE FIX -->
          <img
            src="<?php echo esc_url( $about_image ); ?>"
            alt="<?php echo esc_attr( get_bloginfo( 'name' ) . ' About Section' ); ?>"
            class="w-full h-full object-cover object-center"
          >

          <!-- OVERLAY -->
          <div class="absolute inset-0 bg-white/10"></div>

          <!-- CTA BUTTON (SAFE OVERLAY) -->
          <a href="<?php echo esc_url( $enter_link ); ?>"
             class="absolute bottom-0 left-0 w-full z-30">

            <div class="relative w-full aspect-[594/89]">

              <svg xmlns="http://www.w3.org/2000/svg"
                   class="w-full h-full"
                   viewBox="0 0 594 89" fill="none">
                <path d="M593.5 89H0L17.6895 0H593.5V89Z" fill="#16396F" />
              </svg>

              <?php if ( ! empty( $about_button_text ) ) : ?>
                <p class="absolute inset-0 flex items-center justify-center
                  text-white font-bebas-pro text-[30px] sm:text-[40px] md:text-[44px] lg:text-[50px] font-bold uppercase">
                  <?php echo esc_html( $about_button_text ); ?>
                </p>
              <?php endif; ?>

            </div>
          </a>

        </div>

      <?php endif; ?>

    </div>

  </div>
</section>