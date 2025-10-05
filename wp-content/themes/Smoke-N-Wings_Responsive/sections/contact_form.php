<section class="relative w-full px-[8.50px] xl:pt-[108px] xl:pb-[35px] mx-auto py-5">

  <!-- Background huge text layer -->
  <div class="absolute top-6 left-1/2 md:left-0 transition -translate-x-1/2 md:right-0 z-10 opacity-100">
      <?php get_template_part("svg/berbecue_svg"); ?>
  </div>

  <!-- Foreground content layer -->
  <div class="relative z-20 w-full">
    <div class="flex flex-col md:flex-row gap-[10px]">

      <!-- Left side -->
      <div class="relative about-left w-full md:w-[51.5%] -mt-4 flex flex-col gap-3 text-center md:text-left">

        <!-- heading -->
        <h2 class="body-heading text-center md:text-left">
          <?php
            $left_title = get_theme_mod("contact_form_title");
            echo !empty($left_title) ? wp_kses_post($left_title) : 'Contact Us';
          ?>
        </h2>

        <!-- description -->
        <p class="text-black font-jost pt-0.5 text-[16px] sm:text-[17px] md:text-[18px] font-normal leading-normal tracking-[0.36px] text-center md:text-left">
          <?php
            $description = get_theme_mod('contact_form_description');
            echo !empty($description)
              ? wp_kses_post($description)
              : 'We will reply as soon as possible';
          ?>
        </p>

        <!-- contact info boxes -->
        <div class="pl-0 md:pl-2 pt-5 sm:pt-6 md:pt-7 flex flex-col gap-5 sm:gap-6 items-center md:items-start">
          <?php
          $contact_boxes = [
            [
              'icon' => 'svg/email_icon',
              'text' => get_theme_mod('company_email', 'smokenwingsbbq@gmail.com'),
              'ml' => '-ml-[90px]'
            ],
            [
              'icon' => 'svg/calender_icon',
              'text' => get_theme_mod('service_time', 'Mon - Fri 09:00 - 18:00'),
              'ml' => '-ml-[148px]'
            ],
            [
              'icon' => 'svg/contact_icon_svg',
              'text' => get_theme_mod('company_phone', 'Call (800) 123 45 67'),
              'ml' => '-ml-[160px]'
            ],
          ];

          foreach ($contact_boxes as $box) :
          ?>
            <div class="w-full sm:w-[420px] md:w-[469px] h-auto md:h-[99px] flex-shrink-0 bg-[#FFF4EE] flex flex-col sm:flex-row items-center justify-between text-center md:text-left">
              <div class="w-[64px] sm:w-[74px] h-[64px] sm:h-[74px] bg-[#16396F] flex items-center justify-center">
                <?php get_template_part($box['icon']); ?>
              </div>
              <p class="text-[#16396F] font-bebas text-[20px] sm:text-[23px] font-normal leading-[60px] sm:leading-[81px] tracking-[0.46px] uppercase sm:<?php echo $box['ml']; ?> text-center md:text-left">
                <?php echo esc_html($box['text']); ?>
              </p>
              <?php get_template_part('svg/right_contact_svg'); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right side form -->
      <div class="w-full md:w-[48.5%] bg-white shadow-[-12px_49px_94px_0_rgba(85,89,90,0.05)] px-[20px] sm:px-[30px] md:px-[40px] py-6 md:py-3 mt-10 md:mt-0">
        <h2 class="text-[#16396F] font-bebas text-[28px] sm:text-[34px] md:text-[38px] font-normal leading-[60px] md:leading-[81px] tracking-[0.76px] uppercase text-center md:text-left">
          <?php
            $right_title = get_theme_mod('contact_form_right_title');
            echo !empty($right_title)
              ? wp_kses_post($right_title)
              : 'Leave Us <span class="text-[#F65600]">Message</span>';
          ?>
        </h2>
        <div class="mt-4 md:mt-6">
          <?php echo do_shortcode('[contact-form-7 id="7f08c2e" title="Contact Us"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
