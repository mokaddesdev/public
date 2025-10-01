  <?php 
        $title   = get_theme_mod('competition_held_on_title' );
        $desc1    = get_theme_mod('competition_held_on_first_description' );
         $desc2    = get_theme_mod('competition_held_on_second_description');
  
        $image   = get_theme_mod('competition_held_on_image');
    ?>

<section class="relative w-[1440px] px-[125px] mx-auto pt-[105px] pb-10">

    <!-- Foreground content layer -->
    <div class="relative z-20 flex gap-12 w-full">
            <!-- left side text -->
            <div class="relative about-left pt-[19.60px] w-[600px] flex flex-col gap-7">
                <h2 class="text-[#16396F] font-bebas-pro text-[60px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                    <?php 
                        echo ! empty($title) ?
                        wp_kses_post($title) : ' The <span class="text-[#F65600]">competition</span> held on'
                        ?>
                   
                </h2>

                <p class="w-[570px] pt-[4.90px] text-black font-jost text-[18px] not-italic font-normal leading-normal tracking-[0.36px]">
                     <?php 
                        echo ! empty($desc1) ?
                        wp_kses_post($desc1) : 'The competition will be held on the tarmac at the Blackfoot Municipal Airport (McCarley Field).During the competition the area will continue to be an active airport.No guns, fireworks and all fire/flame must be contained within the cooking apparatus.Pets MUST be on a leash or contained at the teams cook site. There is a dog park just outside the airport gate.Vehicles must follow established traffic flow through the airport property.'
                        ?>
                </p>

                <p class="w-[570px] text-black font-jost -mt-[7.93px] text-[18px] font-normal leading-normal tracking-[0.36px]">
                    <?php 
                        echo ! empty($desc2) ?
                        wp_kses_post($desc2) : 'Each team site must have a fire extinguisher and if a stick burner is used some sort of ground protection must be used under the fire box. This may include sheet metal or cement board for example.'
                        ?> 

                </p>
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
                <img src="<?php echo !empty($image) ? $image : get_template_directory_uri() . '/assets/images/rule1.png'; ?>"
                    alt="<?php echo esc_attr($title)?>"
                    class="w-[622px] h-[519px]">
                </div>

            </div>
        </div>
        </div>
    </div>

</section>