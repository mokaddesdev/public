<?php
$about_title = get_theme_mod('about_title', 'Join us for the <span class="text-[#F65600]"> 2025 Smoke-N-Wings </span> BBQ Competition!');
$about_description = get_theme_mod('about_description', 'Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket. The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.');
$about_button_text = get_theme_mod('about_button_text', 'Enter the competition');
$about_left_image = get_theme_mod('about_left_image', get_template_directory_uri() . '/assets/images/about.png');
?>

<section class="relative w-full mx-auto 
  px-[4%] sm:px-[5%] md:px-[6%] lg:px-[7%] xl:px-[8.5%] 
  pt-[60px] sm:pt-[80px] md:pt-[90px] lg:pt-[97px] 
  max-w-[1300px]">

  <!-- Background huge text layer -->
  <div class="absolute -top-[25px] sm:-top-[35px] md:-top-[42px] left-0 z-10 opacity-100 mx-auto">
      <?php get_template_part("svg/smoke_in_wings_svg");?>
  </div>

  <!-- Grid layout -->
  <div class="relative z-20 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10 md:gap-12 lg:gap-14 items-center">

    <!-- Right image + SVG (Show first on mobile) -->
    <div class="relative w-full flex justify-center md:justify-end order-1 md:order-2">
      <div class="relative w-[90%] sm:w-[85%] md:w-[500px] lg:w-[595px] aspect-[594/495]">

        <!-- background SVG shape -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 594 495" fill="none" class="w-full h-full">
          <path d="M95 495H593.5V0H0L95 495Z" fill="#591419"/>
        </svg>

        <!-- main image -->
        <?php if(!empty($about_left_image)): ?>
        <div class="absolute -top-[2%] -left-[2%] -mr-1.5 w-[104%] h-[104%]">
          <img src="<?php echo esc_url($about_left_image); ?>" 
               alt="about image" 
               class="w-full h-full object-contain">
        </div>
        <?php endif; ?>

        <!-- button shape -->
        <a href="<?php
            $enter_page = get_page_by_path('enter');
            echo $enter_page ? esc_url(get_permalink($enter_page)) : '#';
        ?>" class="absolute bottom-0 xl:bottom-11 left-0 w-full">

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 594 89" fill="none" class="w-full h-auto">
            <path d="M593.5 89H0L17.6895 0H593.5V89Z" fill="#16396F"/>
          </svg>

          <?php if(!empty($about_button_text)): ?>
          <p class="absolute inset-0 flex items-center justify-center 
                    text-white font-bebas-pro font-bold uppercase 
                    text-[30px] sm:text-[38px] md:text-[45px] lg:text-[50px] xl:text-[55px]
                    tracking-[1.1px] pt-1 sm:pt-2.5 pl-2 sm:pl-4">
            <?php echo esc_html($about_button_text); ?>
          </p>
          <?php endif; ?>
        </a>
      </div>
    </div>

    <!-- Left text side (Show after image on mobile) -->
    <div class="about-left w-full flex flex-col items-center md:items-start text-center md:text-left gap-4 sm:gap-6 md:gap-7 lg:gap-8 pt-[30px] order-2 md:order-1">

        <?php if(!empty($about_title)): ?>
        <h2 class="text-[#16396F] font-bebas-pro font-bold uppercase 
                   text-[48px] sm:text-[60px] md:text-[45px] lg:text-[78px] 
                   leading-[1.1] tracking-[1.2px] 
                   max-w-[95%] sm:max-w-[550px]">
            <?php echo wp_kses_post($about_title); ?>
        </h2>
        <?php endif; ?>

        <?php if(!empty($about_description)): ?>
        <p class="text-black font-jost font-normal 
                  text-[16px] sm:text-[18px] lg:text-[19px] 
                  leading-relaxed tracking-[0.3px] 
                  max-w-[95%] sm:max-w-[533px]">
            <?php echo wp_kses_post(nl2br($about_description)); ?>
        </p>
        <?php endif; ?>
    </div>

  </div>
</section>
