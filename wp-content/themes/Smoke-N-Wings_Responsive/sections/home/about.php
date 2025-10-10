<?php
// Get customizer values with default fallback
$about_title = get_theme_mod('about_title', 'Join us for the <span class="text-[#F65600]"> 2025 Smoke-N-Wings </span> BBQ Competition!');

$about_description = get_theme_mod('about_description', 'Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket. The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.');

$about_button_text = get_theme_mod('about_button_text', 'Enter the competition');

$about_left_image = get_theme_mod('about_left_image', get_template_directory_uri() . '/assets/images/about.png');

?>


<section class="relative w-full px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%] mx-auto pt-3 xl:pt-[97px]">

    <!-- Background huge text layer -->
    <div class="absolute top-[42px] left-[45px] z-10 opacity-100">
        <?php get_template_part("svg/smoke_in_wings_svg");?>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 flex flex-col md:flex-row gap-8 md:gap-6 xl:gap-12 w-full">
        <!-- left side text -->
        <div class="about-left py-[13px] w-full md:w-6/12 flex flex-col items-start gap-5 text-center md:text-start">
             <?php if(!empty($about_title)): ?>
            <h2 class="text-[#16396F] max-w-[550px] font-bebas-pro text-[48px] sm:text-[58px] md:text-[65px] lg:text-[72px] xl:text-[78px] font-bold leading-12 sm:leading-14 md:leading-16 lg:leading-20 xl:leading-[81px] tracking-[1.56px] uppercase">
                 <?php echo wp_kses_post($about_title); ?>
                </h2>
                <?php endif; ?>

            <?php if(!empty($about_description)): ?>
            <p class="text-black max-w-[533px] font-jost text-base md:text-[19px] font-normal leading-normal tracking-[0.38px]">
                <?php echo wp_kses_post(nl2br($about_description)); ?>
            </p>
            <?php endif; ?>
        </div>

        <!-- right side image with SVG overlay -->
        <div class="relative w-full md:w-6/12 h-[280px] md:h-[380px] ">

        <!-- css clip path  -->
         <div class="absolute z-10 w-full h-full top-0 left-0 bg-[#591419]" style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 25% 100%);">
         </div>
                <?php if(!empty($about_left_image)): ?>
                <div class="relative z-20 -mt-1.5 -mr-6 md:mt-0 w-full h-auto xl:w-[600px] xl:h-[490px] 2xl:w-[618px] 2xl:h-[515px]">
                    <img src="<?php echo esc_url($about_left_image); ?>"
                         alt="about image"
                         class="w-full h-full object-cover">
                <?php endif; ?>

              
            </div>
        </div>
    </div>
</section>
