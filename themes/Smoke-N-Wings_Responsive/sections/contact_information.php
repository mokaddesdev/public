 <div class="pl-0 md:pl-2 pt-5 sm:pt-6 md:pt-7 flex flex-col gap-5 sm:gap-6 items-center md:items-start px-3 sm:px-[20%] md:px-0">
          <?php
          $contact_boxes = [
            [
              'icon' => 'svg/email_icon',
              'text' => get_theme_mod('company_email', 'smokenwingsbbq@gmail.com'),
            ],
            [
              'icon' => 'svg/calender_icon',
              'text' => get_theme_mod('service_time', 'Mon - Fri 09:00 - 18:00'),
            ],
            [
              'icon' => 'svg/contact_icon_svg',
              'text' => get_theme_mod('company_phone', 'Call (800) 123 45 67'),
            ],
          ];

          foreach ($contact_boxes as $box) :
          ?>
            <div class="w-full pl-2.5 pr-0.5 xl:pl-4 xl:pr-1 xl:w-[469px] h-auto lg:h-[70px] xl:h-[99px] flex-shrink-0 bg-[#FFF4EE] dark:bg-gray-400 flex items-center justify-between text-center md:text-left">

              <div class="w-[44px] h-[44px] sm:w-[48px] sm:h-[48px] md:w-[54px] md:h-[54px] lg:w-[58px] lg:h-[58px] xl:h-[74px] xl:w-[74px] bg-[#16396F] flex items-center justify-center">
                <?php get_template_part($box['icon']); ?>
              </div>
              <p class="text-[#16396F] pl-3 lg:pl-2 font-bebas text-[20px] lg:text-[23px] font-normal leading-[60px] sm:leading-[81px] tracking-[0.46px] uppercase text-center md:text-left">
                <?php echo esc_html($box['text']); ?>
              </p>
              <?php get_template_part('svg/right_contact_svg'); ?>
            </div>
          <?php endforeach; ?>
        </div>