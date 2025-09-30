    <?php 
     $title   = get_theme_mod('kids_older_competition_monitoring_title');
    $desc    = get_theme_mod('kids_older_competition_monitoring_description');
    $btn_txt = get_theme_mod('kids_older_competition_monitoring_button_text');

    $image   = get_theme_mod('kids_older_competition_monitoring_image');
    ?>

<section class="relative w-[1440px] px-[95px] mx-auto pt-[80px] pb-10 flex gap-[50px]">

            <!-- left side text -->
            <div class="relative  w-[624px] flex pt-5 flex-col gap-8">
                <h2 class="text-[#16396F] font-bebas text-[60px] font-normal leading-[81px] tracking-[1.2px] uppercase leading-trim">
                     <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : ' The older competitor <span class="text-[#F65600]">mentoring</span> session';
                    ?>
                   
                </h2>

                <p class="w-[624px] text-black font-jost text-[18px] font-normal leading-normal tracking-[0.36px]">
                     <?php
                    echo ! empty($desc)
                        ? wp_kses_post($desc)
                        : 'Competitors should trim any of their meats, as needed, and volunteers will be available to help as necessary.Older division cooks will have the opportunity to have a mentoring session with a competition BBQ team at the event prior to their contest.Charcoal grills will be provided for each contestant and a volunteer will be on hand to light the charcoal and provide other assistance as needed.Prior to the contest an information packet will be sent to all the contestants outlining the rules and describing the protein being used. This information will be sent to all contestants at the same time allowing an equal amount of time for contestants to plan and prepare for their cook.Entry fee is $25 for each child.';
                    ?>
                   
                </p>

                 <div class="button pt-1">
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
            </div>

        <!-- right side image with SVG overlay -->
        <div class="relative  w-[593px]">
            <div class="relative w-full h-[495px]">
                <div class="-ml-5">
                <!-- svg -->
               <svg xmlns="http://www.w3.org/2000/svg" width="594" height="614" viewBox="0 0 594 614" fill="none"> <path d="M95 614H593.5V0H0L95 614Z" fill="#591419"/>
              </svg>
                </div>

                <div class="absolute -top-3 -left-[34px] -mr-8">
                    <img src="<?php
                            echo ! empty($image)
                                ? esc_url($image)
                                : esc_url( get_template_directory_uri() . '/assets/images/oldercompetiotionmonitoring.png' );
                        ?>" alt="<?php echo esc_attr(! empty($title) ? $title : 'Older Competition Monitoring'); ?>" class="w-[620px] h-[638px]">
                </div>
            </div>
        </div>
        </div>
</section>