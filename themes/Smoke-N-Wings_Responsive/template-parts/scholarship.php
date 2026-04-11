<?php
$title   = get_theme_mod('featured_sponsor_title', 'BINGHAM MAYORS <span class="text-[#F65600]">SCHOLORSHIP</span>');

$desc    = get_theme_mod('featured_sponsor_description', 'The Bingham County Mayors Scholarship committee is pleased to announce a scholarship for graduating high school seniors residing or attending any school in Bingham County who plan on continuing their education at any accredited college/university, including technical and vocational programs. The Bingham County Mayors Scholarship will be awarded under the direction of the Bingham County Mayors Scholarship Selection Committee.');

$btn_txt = get_theme_mod('featured_sponsor_button_text', 'ENTER THE COMPETITION');

$banner  = get_theme_mod('featured_sponsor_banner_text', 'In 2023, 46 scholarships were awarded to Bingham County high school seniors. A total of <span class="text-[#F65600]">$23,000 was awarded.</span>');

$image   = get_theme_mod('featured_sponsor_image');

$enter_page = get_page_by_path('enter');
if ($enter_page) {
    $enter_link = get_permalink($enter_page);
} else {
    $enter_link = '#';
}
?>

<section class="relative w-full pl-[3.5%] pr-[2.5%] md:pl-[6.6%] md:pr-[2.78%] pt-14 sm:pt-20 md:pt-24 lg:pt-32  xl:pt-[147px] pb-8 sm:pb-11 md:pb-13 lg:pb-14 xl:pb-[66px] mx-auto">


    <div class="relative z-20 flex flex-col gap-12 w-full max-w-[1300px] mx-auto">

      <!-- Background huge text layer -->
    <div class="absolute -top-10 lg:-top-20 right-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>
    </div>

        <div class="flex flex-col-reverse lg:flex-row lg:items-center gap-5 md:gap-6 lg:gap-[30px] items-start">
            <!-- left side text -->
            <div class="relative about-left w-full lg:w-[50%] xl:w-[54%] -mt-4 flex flex-col items-center lg:items-start text-center lg:text-left gap-3">

                <h2 class="body-heading pt-6 lg:pt-0  w-full px-[10%] lg:px-0">

                    <?php
                    if (!empty($title)) {
                        echo wp_kses_post($title);
                    }
                    ?>
                </h2>

                <p class="body-text px-[2%] lg:px-0">
                    <?php
                    if (!empty($desc)) {
                        echo wp_kses_post($desc);
                    }
                    ?>
                </p>

                <div class="button pt-7">
                    <a href=" <?php echo $enter_link; ?>" class="red-btn">
                        <span>
                            <?php
                            if (!empty($btn_txt)) {
                                echo esc_html($btn_txt);
                            }
                            ?>
                        </span>
                    </a>
                </div>

                <div class="relative mt-4 lg:mt-6 ml-1 w-full max-w-[568px] bg-[#FFF4EE]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="99" viewBox="0 0 30 92" fill="none">
                        <path d="M0 0H30L0 91.5V0Z" fill="#591419" />
                    </svg>
                    <h2 class="text-[#16396F] absolute top-0 left-0 px-[48px] py-[8px] font-bebas text-[18px] md:text-[22px] xl:text-[24px] font-normal leading-[30.233px] w-full max-w-[497px]">
                        <?php
                        if (!empty($banner)) {
                            echo wp_kses_post($banner);
                        }

                        ?>
                    </h2>
                </div>
            </div>

            <!-- right side image -->
            <div class="relative w-full lg:w-[50%] xl:w-[46%] flex justify-center items-center lg:justify-end">
                    <!-- background SVG shape -->
                    <div
                        class="scholar-image-left-svg"
                        style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 25% 100%);">
                    </div>
                        <div
                            class="scholar-image-right">

                            <img
                                src="<?php
                                        echo ! empty($image)
                                            ? esc_url($image)
                                            : esc_url(get_template_directory_uri() . '/assets/images/scholar.png');
                                        ?>"
                                alt="about image"
                                class="w-full h-full object-cover">
                        </div>
                </div>

            </div>
        </div>

    </div>
    </div>
</section>