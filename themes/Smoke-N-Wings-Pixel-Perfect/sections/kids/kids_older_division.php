   <?php 
        $title   = get_theme_mod('kids_older_division_title');
        $desc    = get_theme_mod('kids_older_division_description');
        $btn_txt = get_theme_mod('kids_older_division_button_text');
        $image   = get_theme_mod('kids_older_division_image');
    ?>
<section class="relative w-[1440px] px-[95px] mx-auto pt-[65px] pb-10 flex gap-[30px]">
           
            <!-- right side image with SVG overlay -->
        <div class="relative  w-[593px]">
            <div class="relative w-full h-[495px]">
                <div class="">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="594" height="495" viewBox="0 0 594 495" fill="none">
                    <path d="M95 495H593.5V0H0L95 495Z" fill="#591419"/>
                </svg> 
                </div>

                <div class="absolute -top-3 -left-3.5 -mr-3">
                    <img src="<?php
                            echo ! empty($image)
                                ? esc_url($image)
                                : esc_url( get_template_directory_uri() . '/assets/images/olderdivision.png' );
                        ?>" alt="<?php echo esc_attr(! empty($title) ? $title : 'Older Division'); ?>" class="w-[624px] h-[532px]">
                </div>
            </div>
        </div>

            <!-- Right side text -->
            <div class="relative  w-[624px] -mt-0.5 flex flex-col gap-3">
                <h2 class="text-[#16396F] font-bebas text-[60px] font-normal leading-normal tracking-[0.6px] uppercase leading-trim">
                     <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : 'The <span class="text-[#F65600]">Older </span> Division';
                    ?>
                </h2>

                <p class="w-[624px] text-black font-jost pt-0.5 text-[18px] font-normal leading-normal tracking-[0.36px]">
                    <?php
                    echo ! empty($desc)
                        ? wp_kses_post($desc)
                        : 'The older kids will get to compete in a kid-only environment, and allowed to challenge their peers much like they do in any other sport or activity that hosts competitions and tournaments.Parents can encourage their children from outside the cooking area, but cannot help/do any of the cooking. Each entry shall be cooked by one child only.The child must do the preparation, cooking, and presentation. This means that the child should be able to put his/her own protein on the grill, turn his/her own protein on the grill,remove the protein from the grill, and do all garnishing (if garnish is being used).Must be able to temp and flip their own food.Are allowed to bring written or pictorial notes with them for guidance but must be able to read/follow it themselves. It helps if the children make these note sheets themselves.';
                    ?>
                   
                </p>

                 <div class="button pt-5">
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
</section>