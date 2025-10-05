<?php
$type_title  = get_theme_mod('competition_type_title', 'Kids-Q');

$end_date    = get_theme_mod('competition_end_date', 'Saturday June 29th');

$held_date   = get_theme_mod('competition_held_date', 'Friday June 28, 2024');

$competition_sub_title   = get_theme_mod('competition_sub_title', 'Bingham County Mayors Scholarship Fundraiser');

$description = get_theme_mod('competition_held_description','Friday June 28, 2024 from 5-7pm – Community invited to enjoy BBQ, Kids-Q, activities and an auction to benefit the high school seniors of Bingham County through the Bingham County Mayors Scholarship. Come and help support a wonderful cause.');

?>

<!-- design for md and above desktop device -->

<section class="hidden md:block w-[1440px] px-[125px] flex gap-8 bg-white overflow-hidden h-[349.50px] mt-[81px] mb-[72px]">

  <div class="container-section relative w-full">

       <!-- first and second shape -->
      <div class="absolute -top-6 left-5 z-30 flex gap-[13px]">
              <!-- First Shape -->
          <div class="relative h-[550px] w-[87px] bg-[#16396F] rotate-[11deg]">
            <!-- Text -->
            <?php if ( !empty($type_title) ) : ?>
            <h2 class="absolute bottom-52 left-6/12 -translate-x-1/2 whitespace-nowrap text-white font-bold text-[48px] leading-normal tracking-[0.96px] uppercase font-bebas-pro z-50 rotate-[-89.44deg]">
            <?php echo esc_html($type_title); ?>
            </h2>
            <?php endif; ?>
          </div>
          <!-- second shape -->
          <div class="h-[550px] w-[87px] bg-[#F65600] rotate-[11deg]">
            <?php if ( !empty($end_date) ) : ?>
              <h2 class="absolute bottom-80 left-7/12 -translate-x-1/2 whitespace-nowrap text-white font-bold text-[48px] leading-normal tracking-[0.96px] uppercase font-bebas-pro z-50 rotate-[-89.44deg]">
            <?php echo esc_html($end_date); ?>
          </h2>
          <?php endif; ?>
          </div>
     </div>
 <!-- data shap -->
<div class="absolute right-0 top-0 w-[989px] h-[349.5px] mx-auto overflow-hidden ">
  <!-- Left Rotated Shape -->
  <div class="relative absolute left-0 top-0 h-full w-full bg-[#FFE4D5] transform -skew-x-[11deg] origin-bottom-right z-10">
     <!-- SVG Elements -->
  <div class="absolute -top-16 -left-10 skew-x-[11deg]">
    <?php get_template_part('svg/smoke_in_wings2_oneline_svg'); ?>
    <?php get_template_part('svg/smoke_in_wings2_oneline_svg'); ?>
    <?php get_template_part('svg/smoke_in_wings2_oneline_svg'); ?>
  </div>


   <div class="center-content skew-x-[11deg] absolute top-16 left-[107px] flex flex-col gap-0">
            <?php if ( !empty($held_date) ) : ?>
            <h1 class="text-[#591419] font-bebas-pro text-[48px] font-bold leading-normal tracking-[0.96px] uppercase">
                <?php echo esc_html($held_date); ?>
            </h1>
            <?php endif; ?>

            <div class="-mt-2 divider w-[155px] h-[9px] bg-[#591419]"></div>
             
             <?php if ( !empty($competition_sub_title) ) : ?>
            <h3 class="text-black inline-block pt-5 w-[500px] font-bebas-pro text-[26px] font-bold leading-normal tracking-[0.52px] uppercase">
                <?php echo esc_html($competition_sub_title); ?>
            </h3>
            <?php endif; ?>

            <?php if ( !empty($description) ) : ?>
            <p class="w-[760px] text-black pt-1 -pl-2.5 font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">
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
      <?php if(!empty($type_title)) : ?>
      <h2 class="text-white font-bold pl-2 sm:pl-4 text-[18px] sm:text-[20px] leading-snug tracking-wide uppercase font-bebas-pro z-50">
        <?php echo esc_html($type_title); ?>
      </h2>
      <?php endif; ?>
    </div>

    <!-- Right Shape (Orange) -->
    <div class="relative py-3 px-3 flex justify-end items-center w-6/12 bg-[#F65600]" style="clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);">
      <?php if(!empty($end_date)) : ?>
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
      <div class="absolute -top-4 -left-2 skew-x-6 flex gap-2">
        <?php for($i=0; $i<3; $i++) : ?>
          <?php get_template_part('svg/smoke_in_wings2_oneline_svg'); ?>
        <?php endfor; ?>
      </div>

      <!-- Content -->
      <div class="flex flex-col items-center justify-center px-4 py-2 gap-2 skew-x-6">

        <?php if(!empty($held_date)) : ?>
        <h1 class="text-[#591419] font-bebas-pro text-[28px] font-bold leading-snug tracking-wide uppercase text-center">
          <?php echo esc_html($held_date); ?>
        </h1>
        <?php endif; ?>

        <div class="w-[100px] h-[6px] bg-[#591419] -mt-1"></div>

        <?php if(!empty($competition_sub_title)) : ?>
        <h3 class="text-black text-[16px] font-bebas-pro font-bold uppercase mt-2 text-center">
          <?php echo esc_html($competition_sub_title); ?>
        </h3>
        <?php endif; ?>

        <?php if(!empty($description)) : ?>
        <p class="text-black max-w-full text-[14px] font-jost mt-1 leading-normal text-center break-words">
          <?php echo wp_kses_post($description); ?>
        </p>
        <?php endif; ?>

      </div>

    </div>

  </div>

</section>

