    <?php
      $type_title  = get_theme_mod('competition_type_title', 'Kids-Q');

      $end_date    = get_theme_mod('competition_end_date', 'Saturday June 29th');

      $held_date   = get_theme_mod('competition_held_date', 'Friday June 28, 2024');

      $competition_sub_title   = get_theme_mod('competition_sub_title', 'Bingham County Mayors Scholarship Fundraiser');

      $description = get_theme_mod('competition_held_description', 'Friday June 28, 2024 from 5-7pm – Community invited to enjoy BBQ, Kids-Q, activities and an auction to benefit the high school seniors of Bingham County through the Bingham County Mayors Scholarship. Come and help support a wonderful cause.');

    ?>

  <!-- design for md and above desktop device -->

  <section class="hidden md:block w-full px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%] flex gap-8 dark:bg-[#1f1f1f] bg-white overflow-hidden md:h-[300px] lg:h-[349.50px] mt-10 md:mt-14 xl:mt-[81px] mb-9 sm:mb-10 md:mb-14 lg:mb-16 xl:mb-[72px]">

    <div class="container-section relative w-full max-w-[1300px] mx-auto">

      <!-- first and second shape -->
      <div class="absolute -top-6 left-5 z-30 flex gap-[13px]">
        <!-- First Shape -->
        <div class="relative h-[490px] md:w-[65px] lg:h-[550px] lg:w-[87px] bg-[#16396F] rotate-[11deg]">
          <!-- Text -->
          <?php if (!empty($type_title)) : ?>
            <h2 class="absolute bottom-52 left-6/12 -translate-x-1/2 whitespace-nowrap text-white font-bold md:text-[40px] 
            lg:text-[48px] leading-normal tracking-[0.96px] uppercase font-bebas-pro z-50 rotate-[-89.44deg]">
              <?php echo esc_html($type_title); ?>
            </h2>
          <?php endif; ?>
        </div>
        <!-- second shape -->
        <div class="h-[490px] md:w-[65px] lg:h-[550px] lg:w-[87px] bg-[#F65600] rotate-[11deg]">
          <?php if (!empty($end_date)) : ?>
            <h2 class="absolute md:bottom-72 lg:bottom-80 left-7/12 -translate-x-1/2 whitespace-nowrap text-white font-bold md:text-[40px] lg:text-[48px] leading-normal tracking-[0.96px] uppercase font-bebas-pro z-50 rotate-[-89.44deg]">
              <?php echo esc_html($end_date); ?>
            </h2>
          <?php endif; ?>
        </div>
      </div>

   <!-- data shape -->
<div class="absolute right-0 top-0 md:w-[80%] lg:w-[70%] xl:w-[80%] 2xl:w-[989px] md:h-[300px] lg:h-[349.5px] mx-auto overflow-hidden z-0">
  <!-- Left Rotated Shape -->
  <div class="relative h-full w-full bg-[#FFE4D5] transform -skew-x-[11deg] origin-bottom-right z-10 overflow-hidden">
    
    <!-- SVG Elements -->
    <div class="absolute top-0 flex flex-col gap-3 lg:gap-4 xl:gap-5 h-full w-full left-0 skew-x-[11deg] z-20">
 <?php get_template_part('svg/smoke_in_wings2_oneline_svg_data_shap'); ?>
 <?php get_template_part('svg/smoke_in_wings2_oneline_svg_data_shap'); ?>
  <?php get_template_part('svg/smoke_in_wings2_oneline_svg_data_shap'); ?>
    </div>

    <div class="absolute top-4 left-12 xl:top-16 xl:left-[107px] flex flex-col gap-0 skew-x-[11deg] z-30 max-w-[90%]">
      <?php if (!empty($held_date)) : ?>
        <h1 class="text-[#591419] font-bebas-pro md:text-[40px] xl:text-[45px] 2xl:text-[48px] font-bold leading-normal tracking-[0.96px] uppercase">
          <?php echo esc_html($held_date); ?>
        </h1>
      <?php endif; ?>

      <div class="-mt-2 divider w-[100px] xl:w-[155px] h-[9px] bg-[#591419]"></div>

      <?php if (!empty($competition_sub_title)) : ?>
        <h3 class="text-black inline-block pt-5 md:w-[95%] xl:w-[80%] font-bebas-pro md:text-[22px] xl:text-[24px] 2xl:text-[26px] font-bold leading-normal tracking-[0.52px] uppercase">
          <?php echo esc_html($competition_sub_title); ?>
        </h3>
      <?php endif; ?>

      <?php if (!empty($description)) : ?>
        <p class=" md:w-[92%] xl:w-[90%] text-black pt-1 -pl-2.5 font-jost md:text-base lg:text-[19px] font-normal leading-normal tracking-[0.38px]">
          <?php echo wp_kses_post($description); ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</div>


    </div>
  </section>


  <!-- Mobile & SM devices only -->
  <section class="md:hidden w-full px-4 flex flex-col gap-4 bg-white overflow-hidden min-h-[340px] max-h-[380px] my-4 relative">

    <!-- Rotated shapes -->
    <div class="absolute top-0 left-0 right-0 flex justify-between px-0 z-30 gap-2">

      <!-- Left Shape (Blue) -->
      <div class="relative py-3 px-3 flex w-4/12 items-center bg-[#16396F]" style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);">
        <?php if (!empty($type_title)) : ?>
          <h2 class="text-white font-bold pl-2 sm:pl-4 text-[18px] sm:text-[20px] leading-snug tracking-wide uppercase font-bebas-pro z-50">
            <?php echo esc_html($type_title); ?>
          </h2>
        <?php endif; ?>
      </div>

      <!-- Right Shape (Orange) -->
      <div class="relative py-3 px-3 flex justify-end items-center w-6/12 bg-[#F65600]" style="clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);">
        <?php if (!empty($end_date)) : ?>
          <h2 class="text-white font-bold text-[18px] sm:text-[20px] leading-snug tracking-wide uppercase font-bebas-pro z-50">
            <?php echo esc_html($end_date); ?>
          </h2>
        <?php endif; ?>
      </div>

    </div>

    <!-- Content shape at bottom -->
    <div class="absolute bottom-0 left-3 right-3 py-3 overflow-hidden">

      <!-- Skewed background -->
      <div class="relative w-full min-h-[240px] max-h-[350px] bg-[#FFE4D5] transform -skew-x-6 origin-bottom-right z-10 overflow-hidden">

        <!-- SVG overlay -->
        <div class="absolute h-full w-full top-0 -left-0 skew-x-6 flex flex-col gap-3">
          <?php for ($i = 0; $i < 3; $i++) : ?>
            <?php get_template_part('svg/smoke_in_wings2_oneline_svg_data_shap'); ?>
          <?php endfor; ?>
        </div>

        <!-- Content -->
        <div class="flex flex-col items-center justify-center px-4 py-2 gap-2 skew-x-6">

          <?php if (!empty($held_date)) : ?>
            <h1 class="text-[#591419] font-bebas-pro text-[28px] font-bold leading-snug tracking-wide uppercase text-center">
              <?php echo esc_html($held_date); ?>
            </h1>
          <?php endif; ?>

          <div class="w-[100px] h-[6px] bg-[#591419] -mt-1"></div>

          <?php if (!empty($competition_sub_title)) : ?>
            <h3 class="text-black text-[16px] font-bebas-pro font-bold uppercase mt-2 text-center">
              <?php echo esc_html($competition_sub_title); ?>
            </h3>
          <?php endif; ?>

          <?php if (!empty($description)) : ?>
            <p class="text-black max-w-full text-[14px] font-jost mt-1 leading-normal text-center break-words">
              <?php echo wp_kses_post($description); ?>
            </p>
          <?php endif; ?>

        </div>

      </div>

    </div>

  </section>