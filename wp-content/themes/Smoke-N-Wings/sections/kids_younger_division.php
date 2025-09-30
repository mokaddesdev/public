<section class="relative w-[1440px] px-[95px] mx-auto pt-[58px] pb-10 flex gap-[50px]">

            <!-- left side text -->
            <div class="relative  w-[624px] flex pt-16 flex-col gap-8">
                <h2 class="text-[#16396F] font-bebas text-[60px] font-normal leading-[81px] tracking-[1.2px] uppercase leading-trim">
                    The <span class="text-[#F65600]">Younger</span> Division
                </h2>

                <p class="w-[624px] text-black font-jost text-[18px] font-normal leading-normal tracking-[0.36px]">
                   The younger kids will prepare, cook, and box their entries with the help of a parent.Parents should let the kids do as much as they are capable of, given age and abilities.The emphasis in this age group is bonding with their family/friends, learning how to cook and growing their skills with familiar mentors. The focus should be to encourage kids to have fun while learning.
                </p>

                 <div class="button pt-2">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path('enter') ) ); ?>"
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
                <svg xmlns="http://www.w3.org/2000/svg" width="594" height="495" viewBox="0 0 594 495" fill="none">
                    <path d="M95 495H593.5V0H0L95 495Z" fill="#591419"/>
                </svg> 
                </div>

                <div class="absolute -top-3 -left-9 -mr-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/youngerdivision.png"
                         alt="about image"
                         class="w-[621px] h-[518px]">
                </div>
            </div>
        </div>
        </div>
</section>