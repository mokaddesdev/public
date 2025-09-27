<section class="relative w-[1440px] mx-auto">

    <!-- Background huge text layer -->
    <div class="absolute right-10 top-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>

    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 px-[125px] pt-[50px] w-full flex flex-col gap-6">
        <!-- side right side button text -->
        <div class="relative w-full flex justify-between">
            <!-- left -->
            <div class="about-left w-[626px] flex flex-col pt-[22px] pl-1.5 items-start gap-5">
                <h2 class="text-[#16396F]  font-bebas-pro text-[78px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                    Smokin’ Highlights: The <span class="text-[#F65600]">best bbq</span> in action

                </h2>
            </div>
            <!-- right -->
    <div class="button flex gap-2.5 items-center pt-24 justify-center">
                <button class="w-[53px] h-[53px] flex-shrink-0 p-[17px] rounded-none bg-[#F8B895] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
                        <path d="M12 1.5L3 11.5L12 21.5" stroke="white" stroke-width="3" />
                    </svg>
                </button>
                <button class="w-[53px] h-[53px] flex-shrink-0 p-[17px] rounded-none bg-[#591419] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
                        <path d="M2 21.5L11 11.5L2 1.5" stroke="white" stroke-width="3" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- image gallery-->
        <div class="images relative flex justify-between items-center">
           <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="image w-[278px] h-[229px] ">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery1.png"
                     alt="hero image"
                     class="w-full h-full object-cover">
            </div>
            <?php endfor; ?>


        </div>
    </div>
</section>