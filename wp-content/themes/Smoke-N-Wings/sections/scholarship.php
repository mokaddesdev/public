<section class="relative w-[1440px] pl-[125px] pr-[40px] mx-auto py-5">

    <!-- Background huge text layer -->
    <div class="absolute top-[56px] right-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 flex flex-col gap-12 w-full">
        <!-- heading -->
        <div class=" flex items-center justify-center">

            <h3 class="text-[#16396F] font-bebas text-[60px] font-normal leading-[81px] tracking-[1.2px] uppercase self-stretch">
                our featured <span class="text-[#F65600]">sponsors</span>
            </h3>
        </div>

        <!-- left and right -->
        <div class="flex gap-12 items-start">
            <!-- left side text -->
            <div class="about-left py-[13px] w-[700px] flex flex-col items-start gap-5">
                <h2 class="text-[#16396F] max-w-[650px] font-bebas-pro text-[60px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                    BINGHAM MAYORS <span class="text-[#F65600]">SCHOLORSHIP</span>
                </h2>

                <p class="text-black max-w-[533px] font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">
                    Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition.
                    Teams will cook chicken, ribs, pork and brisket. <br>
                    The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.
                </p>
            </div>

            <!-- right side image with SVG overlay -->
            <div class="relative  w-[595px]">
                <div class="relative w-full h-[495px]">
                    <!-- svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="594" height="495" viewBox="0 0 594 495" fill="none">
                        <path d="M95 495H593.5V0H0L95 495Z" fill="#591419" />
                    </svg>
                    <div class="absolute -top-3 -left-5 -mr-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/scholar.png"
                            alt="hero image"
                            class="w-[618px] h-[515px]">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>