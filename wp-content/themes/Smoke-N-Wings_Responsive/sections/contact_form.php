<section class="relative w-full pt-18 px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%] xl:pt-[108px] xl:pb-[35px] mx-auto py-5">


  <!-- Foreground content layer -->
  <div class="relative z-20 w-full max-w-[1300px] mx-auto">

      <!-- Background huge text layer -->
   <div class="absolute -top-14 lg:-top-16 2xl:-top-20 left-1/2 -translate-x-1/2 md:left-auto md:right-0 md:translate-x-0 transition z-10 opacity-100">
    <?php get_template_part("svg/berbecue_svg"); ?>
</div>

 <div class="flex flex-col gap-3 md:flex-row md:gap-[10px]">

      <!-- Left side -->
      <div class="relative w-full md:w-[51.5%] -mt-4 flex flex-col gap-3 text-center md:text-left">

        <!-- heading -->
        <h2 class="body-heading">
          <?php
            $left_title = get_theme_mod("contact_form_title");
            echo !empty($left_title) ? wp_kses_post($left_title) : 'Contact Us';
          ?>
        </h2>

        <!-- description -->
        <p class="text-black dark:text-white font-jost pt-0.5 text-[16px] sm:text-[17px] md:text-[18px] font-normal leading-normal tracking-[0.36px]">
          <?php
            $description = get_theme_mod('contact_form_description');
            echo !empty($description)
              ? wp_kses_post($description)
              : 'We will reply as soon as possible';
          ?>
        </p>

        <!-- contact info boxes -->
        <?php get_template_part("sections/contact_information"); ?>
      </div>

      <!-- Right side form -->
      <div class="w-full md:w-[48.5%] dark:bg-gray-400 bg-white z-20 shadow-[-12px_49px_94px_0_rgba(85,89,90,0.05)] px-[20px] sm:px-[30px] md:pl-[40px] py-6 md:py-3 mt-10 md:mt-0">
        <h2 class="text-[#16396F] font-bebas text-[28px] sm:text-[34px] md:text-[38px] font-normal leading-[60px] md:leading-[81px] tracking-[0.76px] uppercase text-center md:text-left">
          <?php
            $right_title = get_theme_mod('contact_form_right_title');
            echo !empty($right_title)
              ? wp_kses_post($right_title)
              : 'Leave Us <span class="text-[#F65600]">Message</span>';
          ?>
        </h2>
        <div class="mt-4 md:mt-6 mx-auto">
          <?php echo do_shortcode('[contact-form-7 id="7f08c2e" title="Contact Us"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
