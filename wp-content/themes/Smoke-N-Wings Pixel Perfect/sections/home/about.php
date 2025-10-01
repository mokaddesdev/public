<?php
// Get customizer values with default fallback
$about_title = get_theme_mod('about_title', 'Join us for the <span class="text-[#F65600]"> 2025 Smoke-N-Wings </span> BBQ Competition!');

$about_description = get_theme_mod('about_description', 'Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket. The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.');

$about_button_text = get_theme_mod('about_button_text', 'Enter the competition');

$about_left_image = get_theme_mod('about_left_image', get_template_directory_uri() . '/assets/images/about.png');

?>

<section class="relative w-[1440px] mx-auto">

    <!-- Background huge text layer -->
    <div class="absolute top-[42px] left-[45px] z-10 opacity-100">
        <?php get_template_part("svg/smoke_in_wings_svg");?>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 flex gap-12 px-[125px] pt-[97px] w-full">
        <!-- left side text -->
        <div class="about-left py-[13px] w-[549px] flex flex-col items-start gap-5">
             <?php if(!empty($about_title)): ?>
            <h2 class="text-[#16396F] max-w-[550px] font-bebas-pro text-[78px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                 <?php echo wp_kses_post($about_title); ?>
                </h2>
                <?php endif; ?>

            <?php if(!empty($about_description)): ?>
            <p class="text-black max-w-[533px] font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">
                <?php echo wp_kses_post(nl2br($about_description)); ?>
            </p>
            <?php endif; ?>
        </div>

        <!-- right side image with SVG overlay -->
        <div class="relative w-[595px]">
            <div class="relative w-full h-[495px]">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="594" height="495" viewBox="0 0 594 495" fill="none">
                    <path d="M95 495H593.5V0H0L95 495Z" fill="#591419"/>
                </svg>

                <?php if(!empty($about_left_image)): ?>
                <div class="absolute -top-3 -left-3 -mr-4">
                    <img src="<?php echo esc_url($about_left_image); ?>"
                         alt="about image"
                         class="w-[618px] h-[515px]">
                </div>
                <?php endif; ?>

                <!-- SVG shape and button text -->
           <a href="<?php
              $enter_page = get_page_by_path('enter');
                if ($enter_page) {
                    $enter_link = get_permalink($enter_page);
                } else {
                    $enter_link = '#';
                }
                echo $enter_link;
                ?>">
                <div class="absolute bottom-0 left-0 w-[594px] z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="594" height="89" viewBox="0 0 594 89" fill="none">
                        <path d="M593.5 89H0L17.6895 0H593.5V89Z" fill="#16396F"/>
                    </svg>

                    <?php if(!empty($about_button_text)): ?>
                    <p class="absolute inset-0 flex items-center justify-center text-white font-bebas-pro text-[55px] font-bold tracking-[1.1px] pt-2.5 pl-4 uppercase z-20">
                        <?php echo esc_html($about_button_text); ?>
                    </p>
                    <?php endif; ?>
                </div>
              </a>
            </div>
        </div>
    </div>
</section>
