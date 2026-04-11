  <?php 
        $title   = get_theme_mod('competition_held_on_title' );
        $desc1    = get_theme_mod('competition_held_on_first_description' );
         $desc2    = get_theme_mod('competition_held_on_second_description');
  
        $image   = get_theme_mod('competition_held_on_image');
    ?>

<section class="relative w-full px-[3%] md:px-[5%] lg:px-[7.5%] xl:px-[8.68%] mx-auto pt-8 sm:pt-10 md:pt-12 lg:pt-16 xl:pt-20 2xl:pt-[105px] pb-5 md:pb-7 lg:pb-10">

    <!-- card wrapper -->
    <div class="max-w-[1300px] mx-auto relative z-20 flex flex-col-reverse lg:flex-row items-center gap-6 xl:gap-12 w-full">
            <!-- left side text -->
            <div class="relative about-left pt-3 md:pt-4 lg:pt-[19.60px] w-full md:w-[50.42%] flex flex-col gap-7">
                <h2 class="body-heading">
                    <?php 
                        echo ! empty($title) ?
                        wp_kses_post($title) : ' The <span class="text-[#F65600]">competition</span> held on'
                        ?>
                   
                </h2>

                <p class="px-[2.5%] w-full mx-auto pt-[4.90px] body-text">
                     <?php 
                        echo ! empty($desc1) ?
                        wp_kses_post($desc1) : 'The competition will be held on the tarmac at the Blackfoot Municipal Airport (McCarley Field).During the competition the area will continue to be an active airport.No guns, fireworks and all fire/flame must be contained within the cooking apparatus.Pets MUST be on a leash or contained at the teams cook site. There is a dog park just outside the airport gate.Vehicles must follow established traffic flow through the airport property.'
                        ?>
                </p>

                <p class="px-[2.5%] w-full mx-auto body-text">
                    <?php 
                        echo ! empty($desc2) ?
                        wp_kses_post($desc2) : 'Each team site must have a fire extinguisher and if a stick burner is used some sort of ground protection must be used under the fire box. This may include sheet metal or cement board for example.'
                        ?> 

                </p>
            </div>

      <!-- right side image with SVG overlay -->
<div class="relative w-full md:w-[48.5%] mx-auto">
  <div class="relative w-full h-[400px] sm:h-[350px] md:h-[400px] lg:h-[450px]">
    <!-- SVG Background -->
    <div class="w-full h-full mt-6">
      <svg xmlns="http://www.w3.org/2000/svg" 
           class="w-full h-full" 
           viewBox="0 0 594 495" 
           fill="none" 
           preserveAspectRatio="xMidYMid meet">
        <path d="M95 495H593.5V0H0L95 495Z" fill="#591419"/>
      </svg>
    </div>

    <!-- Image Layer -->
    <div class="absolute -top-1 left-0 w-full h-full flex justify-center items-center">
      <img 
        src="<?php echo !empty($image) ? $image : get_template_directory_uri() . '/assets/images/rule1.png'; ?>"
        alt="<?php echo esc_attr($title)?>"
        class="w-full h-full -mb-3 max-w-[650px] object-contain top-0 sm:-top-10 md:-top-3 md:-left-9 relative"
      />
    </div>
  </div>
</div>

    </div>

</section>