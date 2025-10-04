        <?php 
        $title   = get_theme_mod('kids_younger_division_title');
        $desc    = get_theme_mod('kids_younger_division_description');
        $btn_txt = get_theme_mod('kids_younger_division_button_text');
        $image   = get_theme_mod('kids_younger_division_image');

        ?>

<section class="relative w-full px-[2.5%] md:px-[3.5%] lg:px-[5%] xl:px-[6.8%] mx-auto pt-7 sm:pt-9 md:pt-10 lg:pt-11 xl:pt-[58px] pb-10 overflow-hidden">

            <!-- container -->
   <div class="w-full max-w-[1300px] flex flex-col md:flex-row gap-8 sm:gap-9 md:gap-11 xl:gap-[50px]">

            <!-- left side text -->
            <div class="relative w-full md:w-[49.9%] flex pt-8 sm:pt-10 md:pt-12 lg:pt-16 flex-col items-center md:items-start gap-5 md:gap-7 lg:gap-8">
                <h2 class="body-heading leading-trim">
                     <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : 'The <span class="text-[#F65600]">Younger</span> Division';
                    ?>
                    
                </h2>

                <p class="w-full body-text">
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
        <div class="relative w-full md:w-[47.5%]">
            <div class="relative w-full h-[260px] md:h-[495px]">
              <div class=" ml-0 md:-ml-5">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 594 495" fill="none">
                    <path d="M95 495H593.5V0H0L95 495Z" fill="#591419"/>
                </svg> 
                </div>

                <div class="absolute w-full h-[380px] md:w-[621px] md:h-[518px] left-0 md:-top-3 md:-left-9 -mr-3">
                    <img src="<?php
                            echo ! empty($image)
                                ? esc_url($image)
                                : esc_url( get_template_directory_uri() . '/assets/images/youngerdivision.png' );
                        ?>" alt="<?php echo esc_attr(! empty($title) ? $title : 'Younger Division'); ?>" class="w-full h-full object-contain">
                </div>
            </div>
        </div>
     </div>
</section>