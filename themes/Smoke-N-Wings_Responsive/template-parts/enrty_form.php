    <?php
    $title = get_theme_mod('enter_competition_title', 'Enter Competition');

    $desc  = get_theme_mod('enter_competition_description', 'We are excited to welcome your team to the 2024 SMOKE-N-WINGS BBQ CONTEST. Put your skills to the test for your chance to win cash prizes and be crowned the SMOKE-N-WINGS Grand Champion and the Idaho State Champion.<br><br>This KCBS sanctioned competition will be held June 28-29, 2024. Winning will make your team eligible for the American Royal and the Jack Daniels World Championship.');

    $form  = get_theme_mod('enter_competition_form_title', 'Complete the <span class="text-[#F65600]">Entry Form</span> Below');

    ?>

<section class="relative w-full px-4 sm:px-6 lg:px-[7.5%] 2xl:px-[8.68%] mx-auto py-6 lg:py-10">

  <!-- Foreground content -->
  <div class="relative z-20 pt-10 xl:pt-[100px] flex flex-col md:flex-row gap-10 xl:gap-[68px] max-w-[1300px] mx-auto">
          <!-- Background huge text layer -->
   <div class="absolute top-0 left-1/2 -translate-x-1/2 md:left-auto md:right-0 md:translate-x-0 transition z-10 opacity-100">
    <?php get_template_part("svg/berbecue_svg"); ?>
</div>

    <!-- Left text -->
    <div class="w-full md:w-1/2 pt-4 md:pt-0 flex-shrink-0">
      <div class="relative md:sticky top-1 w-full flex flex-col gap-4 items-center md:items-start">
        <h2 class="body-heading text-center md:text-start">
          <?php echo wp_kses_post($title); ?>
        </h2>
        <p class="body-text text-center md:text-start">
          <?php echo wp_kses_post($desc); ?>
        </p>

        <?php get_template_part("sections/contact_information"); ?>
      </div>
    </div>

    <!-- Right form -->
    <div class="relative z-30 w-full md:w-1/2 flex flex-col items-center md:items-start bg-white dark:bg-gray-400 pt-6 md:pt-4 px-4 sm:px-6 xl:px-[40px] mx-auto shadow-[0_10px_60px_rgba(0,0,0,0.05)] rounded-lg">

      <h2 class="text-[#16396F] text-center font-bebas text-[28px] w-full sm:text-[34px] md:text-[38px] xl:text-[40px] leading-[45px] sm:leading-[60px] md:leading-[70px] 2xl:leading-[80px] uppercase tracking-[0.76px]">
        <?php echo wp_kses_post($form); ?>
      </h2>
      <div class="w-full sm:max-w-[90%] md:max-w-full mx-auto mt-3">
        <?php echo do_shortcode('[contact-form-7 id="cb14ff8" title="Enter Competition"]'); ?>
      </div>
    </div>

  </div>
</section>
