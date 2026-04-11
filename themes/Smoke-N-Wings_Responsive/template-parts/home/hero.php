<?php 
/**
 * Hero Section Design
 * 
 * @package smokewings
 */
$hero_image             = get_theme_mod('hero_image', THEME_DIR_URI . '/assets/images/meat.png');
$hero_button_text_left  = get_theme_mod('hero_button_text_left', 'Enter competition');
$hero_button_text_right = get_theme_mod('hero_button_text_right', 'Check Out The Rules');
?>

<section class="relative w-full h-[270px] bg-white dark:bg-white sm:h-[330px] md:h-[400px] lg:h-[480px] xl:h-[560px] 2xl:max-h-[621px] overflow-hidden">

  <!-- Background color layer -->
  <div class="absolute inset-0 bg-[#F8B895] opacity-[0.73] z-0"></div>

  <!-- max-w-1300px -->
 <div class="relative max-w-[1440px] mx-auto h-full absolute inset-0">

  <!-- Background huge text layer -->
  <div class="absolute inset-0 top-4 sm:top-8 md:top-3 md:gap-3.5 flex flex-col gap-7 sm:gap-12 md:justify-between items-center z-10 text-[65px] sm:text-[110px] md:text-[130px] lg:text-[200px] xl:text-[207px] 2xl:text-[237px] font-bebas-pro font-extrabold uppercase leading-12 md:leading-[0.85] text-[rgba(248,184,149,0.45)] text-center w-full max-w-[1300px] mx-auto">
      <h1>Smoke-N-Wings</h1>
      <h1>Idaho State BBQ</h1>
      <h1>Competition</h1>
  </div>

  <!-- Foreground content layer -->
  <div class="relative z-20 flex justify-center items-center w-full h-full">

      <!-- Left button -->
      <a href="<?php
          $enter_page = get_page_by_path('enter-competition');
          $enter_link = $enter_page ? get_permalink( $enter_page ) : '#';
          echo esc_url( $enter_link );
      ?>" class="absolute -left-3 top-[40%] sm:top-[80%] md:top-[43%] w-[35%] md:w-[35.7%] text-center z-10">

          <div class="relative w-full h-[78px] md:h-[88px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 514 88" fill="none" class="w-full h-full">
                  <path d="M0 0H514L490.703 88H0V0Z" fill="#F65600"/>
              </svg>

              <?php if( ! empty( $hero_button_text_left) ) : ?>
              <p class="absolute inset-0 flex items-center justify-center pt-0.5 md:pt-1.5 xl:pt-2.5 text-white font-bebas-pro text-base md:text-[30px] xl:text-[48px] not-italic font-bold leading-normal">
                  <?php echo esc_html( $hero_button_text_left ); ?>
              </p>
              <?php endif; ?>

          </div>
      </a>

      <!-- Right button -->
      <a href="<?php echo esc_url( get_permalink( get_page_by_path('rules') ) ); ?>" 
         class="absolute -right-3.5 top-[40%] sm:top-[80%] md:top-[43%] w-[35%] md:w-[35.7%] text-center z-10">

          <div class="relative w-full h-[70px] md:h-[88px] ml-auto">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 514 88" fill="none" class="w-full h-full">
                  <path d="M514 88H0L23.2974 0H514V88Z" fill="#591419"/>
              </svg>

              <?php if( ! empty( $hero_button_text_right ) ) : ?>
              <p class="absolute inset-0 flex items-center justify-center pt-0.5 md:pt-1.5 xl:pt-2.5 text-white font-bebas-pro text-base md:text-[30px] xl:text-[48px] not-italic font-bold leading-normal pl-2 xl:pl-7">
                  <?php echo esc_html( $hero_button_text_right ); ?>
              </p>
              <?php endif; ?>
          </div>
      </a>

      <!-- Hero Image -->
      <div class="absolute bottom-0 md:bottom-0 left-1/2 -translate-x-1/2 w-[240px] sm:w-[300px] md:w-[350px] lg:w-[450px] xl:w-[500px] 
          h-auto z-10">
          <?php if ( ! empty( $hero_image ) ) : ?>
          <img src="<?php echo esc_url( $hero_image ); ?>" alt="<?php echo esc_attr__( "Hero Image", "smokewings" ); ?>" 
               class="w-full h-full object-contain">
            <?php endif; ?>
      </div>
  </div>
  </div>
</section>

