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

<section class="w-[1440px] py-16 mx-auto pr-[125px]">
  <div class="flex justify-between items-center">

    <!-- Left -->
    <div class="relative flex-shrink-0">
      <svg xmlns="http://www.w3.org/2000/svg" width="697" height="161" viewBox="0 0 697 161" fill="none">
        <path d="M-35.5 0H697L665 161H-35.5V0Z" fill="#591419" />
      </svg>

      <!-- Text Over SVG -->
      <div class="absolute right-[100px] top-8 flex flex-col">
        <div class="flex gap-[70px]">

          <!-- Time -->
          <div class="time flex flex-col mt-3 items-center gap-0.5">
            <h1 class="heading-text"><?php echo esc_html($set_time_title); ?></h1>
            <p class="text-[#FFE4D5] font-bebas-pro text-[26px] font-bold leading-normal tracking-[0.52px] uppercase">
              <?php echo esc_html($competition_time); ?>
            </p>
          </div>

          <!-- Location -->
          <div class="location flex flex-col ml-2 items-center gap-0.5">
            <h1 class="heading-text"><?php echo esc_html($competition_location_title); ?>
          </h1>
            <p class="text-[#FFE4D5] font-bebas-pro text-[26px] w-60 font-bold leading-normal tracking-[0.52px] uppercase text-center">
              <?php echo esc_html($first_two_words); ?>
            </p>
            <h6 class="text-center text-[19px] text-[#FFE4D5] font-bebas-pro w-60 font-bold leading-normal tracking-[0.52px] uppercase -mt-2.5">
              <?php echo esc_html($remaining_words); ?>
            </h6>
          </div>

        </div>
      </div>
    </div>

     <!-- Right -->
    <div class="right max-w-[534px] pt-2.5">
      <p class="text-black text-right font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">
        <?php echo esc_html($competition_description); ?>
      </p>
    </div>

  </div>
</section>
