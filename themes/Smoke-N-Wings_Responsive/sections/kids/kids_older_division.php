   <?php 
        $title   = get_theme_mod('kids_older_division_title');
        $desc    = get_theme_mod('kids_older_division_description');
        $btn_txt = get_theme_mod('kids_older_division_button_text');
        $image   = get_theme_mod('kids_older_division_image');
    ?>

<section class="relative w-full px-[2.5%] md:px-[3.5%] lg:px-[5%] xl:px-[6.8%] mx-auto pt-7 sm:pt-9 md:pt-10 lg:pt-11 xl:pt-[58px] pb-10 overflow-hidden">

            <!-- container -->
   <div class="w-full max-w-[1300px] mx-auto flex flex-col-reverse lg:flex-row-reverse gap-8 sm:gap-9 lg:items-center xl:items-start lg:gap-11 2xl:gap-[50px]">

            <!-- left side text -->
            <div class="relative w-full lg:w-[48%] flex flex-col items-center lg:items-start gap-5 md:gap-3 lg:gap-4 text-center lg:text-start">
                <h2 class="body-heading leading-trim">
                     <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : 'The <span class="text-[#F65600]">Older</span> Division';
                    ?>
                    
                </h2>

                <p class="w-full body-text px-[3.5%] sm:pax-[7.5%] md:px-[12.5%] mx-auto lg:px-0">
                     <?php
                    echo ! empty($desc)
                        ? wp_kses_post($desc)
                        : 'The older kids will get to compete in a kid-only environment, and allowed to challenge their peers much like they do in any other sport or activity that hosts competitions and tournaments.Parents can encourage their children from outside the cooking area, but cannot help/do any of the cooking. Each entry shall be cooked by one child only.The child must do the preparation, cooking, and presentation. This means that the child should be able to put his/her own protein on the grill, turn his/her own protein on the grill,remove the protein from the grill, and do all garnishing (if garnish is being used).Must be able to temp and flip their own food.Are allowed to bring written or pictorial notes with them for guidance but must be able to read/follow it themselves. It helps if the children make these note sheets themselves.';
                    ?>
                </p>

                 <div class="button 2xl:pt-1">
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
            
             <!-- right side image -->
            <div class="relative w-full lg:w-[52%] flex justify-center items-center lg:justify-end">
                    <!-- background SVG shape -->
                    <div
                        class="kids-image-left-svg"
                        style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 25% 100%);">
                    </div>
                    <div class="kids-image-right">
                       <img src="<?php echo ! empty($image)
                                ? esc_url($image)
                                : esc_url( get_template_directory_uri() . '/assets/images/olderdivision.png' ); ?>"
                                alt="about image"
                                class="w-full h-full object-cover">
                        </div>
                </div>

            </div>
     </div>
</section>