<section class="relative w-[1440px] mx-auto">

    <!-- Background huge text layer -->
    <div class="absolute top-[42px] left-[45px] z-10 opacity-100">
     <?php get_template_part("svg/smoke_in_wings_svg");?>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 flex gap-12 px-[125px] pt-[97px] w-full">
        <!-- left side text -->
        <div class="about-left py-[13px] w-[549px] flex flex-col items-start gap-5">
            <h2 class="text-[#16396F] max-w-[550px] font-bebas-pro text-[78px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                Join us for the <span class="text-[#F65600]">2025 Smoke-N-Wings</span> BBQ Competition!
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
  <path d="M95 495H593.5V0H0L95 495Z" fill="#591419"/>
</svg>
<div class="absolute -top-3 -left-3 -mr-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png"
                     alt="hero image"
                     class="w-[618px] h-[515px]">
                  </div>

                <!-- SVG শেপ এবং টেক্সট -->
                <div class="absolute bottom-0 left-0 w-[594px] z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="594" height="89" viewBox="0 0 594 89" fill="none">
                        <path d="M593.5 89H0L17.6895 0H593.5V89Z" fill="#16396F"/>
                    </svg>

                    <p class="absolute inset-0 flex items-center justify-center text-white font-bebas-pro text-[55px] font-bold tracking-[1.1px] pt-2.5 pl-4 uppercase z-20">
                        Enter the competition
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
