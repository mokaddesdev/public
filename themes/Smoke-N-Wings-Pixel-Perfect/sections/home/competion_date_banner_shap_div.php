<?php
$type_title  = get_theme_mod('competition_type_title', 'Kids-Q');

$end_date    = get_theme_mod('competition_end_date', 'Saturday June 29th');

$held_date   = get_theme_mod('competition_held_date', 'Friday June 28, 2024');

$competition_sub_title   = get_theme_mod('competition_sub_title', 'Bingham County Mayors Scholarship Fundraiser');

$description = get_theme_mod('competition_held_description','Friday June 28, 2024 from 5-7pm – Community invited to enjoy BBQ, Kids-Q, activities and an auction to benefit the high school seniors of Bingham County through the Bingham County Mayors Scholarship. Come and help support a wonderful cause.');

?>


<section class=" w-[1440px] px-[125px] flex gap-8 bg-white overflow-hidden h-[349.50px] mt-[81px] mb-[72px]">

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