  <?php 
        $title   = get_theme_mod('competition_awareness_title' );
        $desc1    = get_theme_mod('competition_awareness_first_description' );
         $desc2    = get_theme_mod('competition_awareness_second_description');
  
        $image   = get_theme_mod('competition_awareness_image');
    ?>


<section class="w-full flex gap-[34px] pt-16 pb-3 px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%]">

  <!-- left image -->
  <div class="w-[562.293px] relative">
    <div class="absolute -top-1 -left-1 z-0">
      <svg xmlns="http://www.w3.org/2000/svg" width="563" height="454" viewBox="0 0 563 454" fill="none">
        <path d="M464.008 453.164H0V0.921112H562.293L464.008 453.164Z" fill="#591419"/>
      </svg>
    </div>

    <!-- image -->
    <div class="relative -top-3.5 left-1 -ml-2 z-20">
      <img src="<?php
                         echo ! empty($image)
                                ? esc_url($image)
                                : esc_url( get_template_directory_uri() . '/assets/images/rule2.png' );
                        ?>" alt="<?php echo esc_attr(! empty($title) ? $title : ''); ?>" class="w-[624.293px] h-[559.469px] object-cover z-20">
    </div>
  </div>

  <!-- right side text -->
  <div class="relative about-left py-8 pl-9 w-[600px] flex flex-col gap-6">

    <!-- heading one line -->
    <h2 class="body-heading whitespace-nowrap">
      <?php 
      echo ! empty($title) ?
       wp_kses_post($title)
        : 'The <span class="text-[#F65600]">competition</span> awareness'
      ?>
      
    </h2>

    <!-- paragraph -->
    <p class="w-[570px] body-text pt-4  ">
      <?php 
      echo ! empty($desc1) ?
       wp_kses_post($desc1)
        : 'Fire lanes and emergency access shall be maintained at all times.Ashes and grease must be disposed of in provided containers located close to the cook sites. Team site will be left with no garbage, ashes, debris or liquid/grease spills. If site is not left in a Clean manner the city will clean the site and bill the team for the labor involved.'
      ?>

      </p>
      <p class="w-[570px] body-text -mt-1.5">
     <?php 
      echo ! empty($desc2) ?
       wp_kses_post($desc2)
        : 'Fire lanes and emergency access shall be maintained at all times.Ashes and grease must be disposed of in provided containers located close to the cook sites. Team site will be left with no garbage, ashes, debris or liquid/grease spills. If site is not left in a Clean manner the city will clean the site and bill the team for the labor involved.'
      ?>
    </p>

  </div>
</section>
