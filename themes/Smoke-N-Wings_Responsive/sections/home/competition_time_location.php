<?php
$set_time_title = get_theme_mod('set_time_title', 'When:');

$competition_time = get_theme_mod('competition_time', 'June 28-29, 2025');

$competition_location_title = get_theme_mod('competition_location_title', 'Where:');

$competition_location = get_theme_mod('competition_location', "Blackfoot, Idaho Blackfoot Airport (McCarly Field)");

$location_words = explode(' ', $competition_location);

$first_two_words = implode(' ', array_slice($location_words, 0, 2));

$remaining_words = implode(' ', array_slice($location_words, 2));

$competition_description = get_theme_mod('competition_description', 'Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.');

?>

<section class="w-full py-8 lg:py-10 xl:py-16 mx-auto pr-[2%] sm:pr-[3.5%] md:pr-[5%] lg:pr-[7.5%] xl:pr-[8.6%]">

  <div class="flex flex-col lg:flex-row justify-between items-center max-w-[1330px] mx-auto">

        <!-- Left -->
     <div
        class="relative bg-[#591419] w-full sm:max-w-[90%] md:max-w-[80%] lg:w-full h-[100px] sm:h-[110px] lg:h-[140px] xl:py-7 xl:h-[161px] flex py-4 justify-center"
        style="clip-path: polygon(0 0, 100% 0%, 89% 100%, 0% 100%);"
      >
        <!-- Text Over SVG -->
        <div class="flex flex-col items-center">
          <div class="flex gap-1 sm:gap-5 xl:gap-[70px] justify-center">
            <!-- Time -->
            <div class="time -ml-7 lg:ml-0 flex flex-col items-center gap-0.5">
              <h1 class="heading-text">
                <?php echo esc_html($set_time_title); ?>
              </h1>
              <p class="text-[#FFE4D5] font-bebas-pro text-base lg:text-[24px] xl:text-[26px] font-bold leading-normal tracking-[0.52px] uppercase">
                <?php echo esc_html($competition_time); ?>
              </p>
            </div>

            <!-- Location -->
            <div class="location flex flex-col ml-0 sm:ml-2 items-center gap-0.5">
              <h1 class="heading-text">
                <?php echo esc_html($competition_location_title); ?>
              </h1>
              <p class="text-[#FFE4D5] font-bebas-protext-base lg:text-[24px] xl:text-[26px] w-full xl:min-w-60 font-semibold lg:font-bold leading-normal tracking-[0.52px] uppercase text-center">
                <?php echo esc_html($first_two_words); ?>
              </p>
              <h6 class="text-center text-base lg:text-[19px] text-[#FFE4D5] font-bebas-pro w-full xl:min-w-56 2xl:min-w-64 font-bold leading-normal tracking-[0.52px] uppercase -mt-2.5">
                <?php echo esc_html($remaining_words); ?>
              </h6>
            </div>
          </div>
        </div>
      </div>


     <!-- Right -->
    <div class="right mx-auto max-w-[360px] sm:max-w-[600px] lg:max-w-[400px] xl:max-w-[534px] pt-2.5">
      <p class="text-black dark:text-white text-center lg:text-right font-jost text-base md:text-[19px] font-normal leading-normal tracking-[0.38px]">
        <?php echo esc_html($competition_description); ?>
      </p>
    </div>

  </div>
</section>
