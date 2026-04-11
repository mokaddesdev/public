        <?php 
        $title   = get_theme_mod('kids_younger_division_title');
        $desc    = get_theme_mod('kids_younger_division_description');
        $btn_txt = get_theme_mod('kids_younger_division_button_text');
        $image   = get_theme_mod('kids_younger_division_image');

        ?>

<section class="relative w-full px-[2.5%] md:px-[3.5%] lg:px-[5%] xl:px-[6.8%] mx-auto pt-7 sm:pt-9 md:pt-10 lg:pt-11 xl:pt-[58px] pb-10 overflow-hidden">

            <!-- container -->
   <div class="w-full max-w-[1300px] mx-auto flex flex-col-reverse lg:flex-row gap-8 sm:gap-9 lg:items-center xl:items-start lg:gap-11 xl:gap-[50px]">

            <!-- left side text -->
            <div class="relative w-full lg:w-[48%] flex pt-8 sm:pt-10 md:pt-12 lg:pt-16 flex-col items-center lg:items-start gap-5 md:gap-7 lg:gap-8 text-center lg:text-start">
                <h2 class="body-heading leading-trim">
                     <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : 'The <span class="text-[#F65600]">Younger</span> Division';
                    ?>
                    
                </h2>

                <p class="w-full body-text px-[3.5%] sm:pax-[7.5%] md:px-[12.5%] mx-auto lg:px-0">
                     <?php
                    echo ! empty($desc)
                        ? wp_kses_post($desc)
                        : 'The younger kids will prepare, cook, and box their entries with the help of a parent.Parents should let the kids do as much as they are capable of, given age and abilities.The emphasis in this age group is bonding with their family/friends, learning how to cook and growing their skills with familiar mentors. The focus should be to encourage kids to have fun while learning.';
                    ?>
                </p>

                 <div class="button pt-2">
                    <a href="<?php
                     $enter_page = get_page_by_path('enter');
                        if ($enter_page) {
                            $enter_link = get_permalink($enter_page);
                        } else {
                            $enter_link = '#';
                        }
                        echo $enter_link;
                        ?>"
                       class="red-btn">
                       <span>
                             <?php
                        echo ! empty($btn_txt)
                            ? esc_html($btn_txt)
                            : 'ENTER THE COMPETITION';
                        ?>
                       </span>
                       
                    </a>
                </div>
            </div>

        <!-- right side image with SVG overlay -->
             <!-- right side image -->
            <div class="relative w-full lg:w-[52%] flex justify-center items-center lg:justify-end">
                    <!-- background SVG shape -->
                    <div
                        class="kids-image-left-svg"
                        style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 25% 100%);">
                    </div>
                        <div
                            class="kids-image-right">
                       <img src="<?php echo ! empty($image)
                                ? esc_url($image)
                                : esc_url( get_template_directory_uri() . '/assets/images/youngerdivision.png' ); ?>"
                                alt="about image"
                                class="w-full h-full object-cover">
                        </div>
                </div>

            </div>
     </div>
</section>