<?php
$title   = get_theme_mod('featured_sponsor_title');
$desc    = get_theme_mod('featured_sponsor_description');
$btn_txt = get_theme_mod('featured_sponsor_button_text');
$banner  = get_theme_mod('featured_sponsor_banner_text');
$image   = get_theme_mod('featured_sponsor_image');
?>

<section class="relative w-[1440px] pl-[95px] pt-[147px] pb-[66px] pr-[40px] mx-auto py-5">

    <!-- Background huge text layer -->
    <div class="absolute top-[56px] right-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>
    </div>

    <div class="relative z-20 flex flex-col gap-12 w-full">
        <div class="flex gap-[30px] items-start">
            <!-- left side text -->
            <div class="relative about-left w-[624px] -mt-4 flex flex-col gap-3">

                <h2 class="text-[#16396F] font-bebas-pro text-[60px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                    <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : 'BINGHAM MAYORS <span class="text-[#F65600]">SCHOLORSHIP</span>';
                    ?>
                </h2>

                <p class="w-[624px] text-black font-jost text-[18px] font-normal leading-normal tracking-[0.36px]">
                    <?php
                    echo ! empty($desc)
                        ? wp_kses_post($desc)
                        : 'The Bingham County Mayors Scholarship committee is pleased to announce a scholarship for graduating high school seniors residing or attending any school in Bingham County who plan on continuing their education at any accredited college/university, including technical and vocational programs. The Bingham County Mayors Scholarship will be awarded under the direction of the Bingham County Mayors Scholarship Selection Committee.';
                    ?>
                </p>

                <div class="button pt-7">
                    <a href="<?php
                     $enter_page = get_page_by_path('enter');
                        if ($enter_page) {
                            $enter_link = get_permalink($enter_page);
                        } else {
                            $enter_link = '#';
                        }
                        echo $enter_link;
                        ?>"
                       class="inline-block w-[273px] h-[60px] flex-shrink-0 bg-[#F65600]
                       text-white font-bebas text-[24px] font-normal leading-[30.233px] uppercase 
                       py-[15.25px] px-[30px] text-center">
                        <?php
                        echo ! empty($btn_txt)
                            ? esc_html($btn_txt)
                            : 'ENTER THE COMPETITION';
                        ?>
                    </a>
                </div>

                <div class="relative mt-11 ml-1 w-[568px] h-[99px] bg-[#FFF4EE]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="99" viewBox="0 0 30 92" fill="none">
                        <path d="M0 0H30L0 91.5V0Z" fill="#591419"/>
                    </svg>
                    <h2 class="text-[#16396F] absolute top-5 left-11 font-bebas text-[24px] font-normal leading-[30.233px] max-w-[497px]">
                        <?php
                        echo ! empty($banner)
                            ? wp_kses_post($banner)
                            : 'In 2023, 46 scholarships were awarded to Bingham County high school seniors. A total of <span class="text-[#F65600]">$23,000 was awarded.</span>';
                        ?>
                    </h2>
                </div>

            </div>

            <!-- right side image -->
            <div class="relative  w-[593px]">
                <div class="relative w-full h-[495px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="594" height="495" viewBox="0 0 594 495" fill="none">
                        <path d="M95 495H593.5V0H0L95 495Z" fill="#591419" />
                    </svg>
                    <div class="absolute -top-3 -left-3 -mr-5">
                        <img src="<?php
                            echo ! empty($image)
                                ? esc_url($image)
                                : esc_url( get_template_directory_uri() . '/assets/images/scholar.png' );
                        ?>" alt="hero image" class="w-[618px] h-[515px]">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
