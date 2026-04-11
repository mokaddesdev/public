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
            <div class="relative w-full lg:w-[48%] flex flex-col items-center lg:items-start gap-5 md:gap-4 lg:gap-3 text-center lg:text-start">
                <h2 class="body-heading leading-trim">
                     <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : 'The older competitor <span class="text-[#F65600]">mentoring</span> session';
                    ?>
                    
                </h2>

                <p class="w-full body-text px-[3.5%] sm:pax-[7.5%] md:px-[12.5%] mx-auto lg:px-0">
                     <?php
                    echo ! empty($desc)
                        ? wp_kses_post($desc)
                        : 'Competitors should trim any of their meats, as needed, and volunteers will be available to help as necessary.Older division cooks will have the opportunity to have a mentoring session with a competition BBQ team at the event prior to their contest.Charcoal grills will be provided for each contestant and a volunteer will be on hand to light the charcoal and provide other assistance as needed.Prior to the contest an information packet will be sent to all the contestants outlining the rules and describing the protein being used. This information will be sent to all contestants at the same time allowing an equal amount of time for contestants to plan and prepare for their cook. Entry fee is $25 for each child.';
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
                                : esc_url( get_template_directory_uri() . '/assets/images/oldercompetiotionmonitoring.png' ); ?>"
                                alt="about image"
                                class="w-full h-full object-cover">
                        </div>
                </div>

            </div>
     </div>
</section>