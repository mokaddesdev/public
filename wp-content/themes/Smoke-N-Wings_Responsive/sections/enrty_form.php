    <?php
    $title = get_theme_mod('enter_competition_title');
    $desc  = get_theme_mod('enter_competition_description');
    $form  = get_theme_mod('enter_competition_form_title');

    ?>

    <section class="relative w-full px-[2.5%] md:px-[3.5%] lg:pl-[7.5%] 2xl:pl-[8.68%] lg:pr-[40px] mx-auto py-3 lg:py-5">

        <!-- Background huge text layer -->
        <div class="absolute top-6 right-0 z-10 opacity-100">
            <?php get_template_part("svg/berbecue_svg"); ?>
        </div>

        <!-- Foreground content layer -->
        <div class="relative z-20 pt-8 xl:pt-[100px] xl:gap-[68px] max-w-[1300px] flex flex-col md:flex-row">

            <!-- left side text -->
            <div class=" w-full md:w-[36.25%] flex-shrink-0">

                <div class="relative sticky top-1 right-0 -mt-2 w-full flex flex-col gap-3 items-center md:items-start">
                    <!-- form heading -->
                    <h2 class="text-[#16396F] font-bebas text-[36px] sm:text-[40px] md:text-[46px] lg:text-[50px] 2xl:text-[60px] font-normal leading-[44px] md:leading-[55px] xl:leading-[81px] tracking-[1.2px] uppercase">
                        <?php
                        if (! empty($title)) {
                            echo wp_kses_post($title);
                        } else {
                            echo 'Enter Competition';
                        }
                        ?>
                    </h2>

                    <p class="text-black font-jost text-center md:text-start text-base md:text-[18px] font-normal leading-[22px] md:leading-normal tracking-[0.36px] pt-0.5">
                        <?php
                        if (! empty($desc)) {
                            echo wp_kses_post($desc);
                        } else {
                            echo 'We are excited to welcome your team to the 2024 SMOKE-N-WINGS BBQ CONTEST. Put your skills to the test for your chance to win cash prizes and be crowned the SMOKE-N-WINGS Grand Champion and the Idaho State Champion.<br><br>This KCBS sanctioned competition will be held June 28-29, 2024. Winning will make your team eligible for the American Royal and the Jack Daniels World Championship.';
                        }
                        ?>
                    </p>

               <!-- Contact Info crad -->
                    <div class="px-[7.5%] md:pl-4 pt-4 w-full flex flex-col gap-9">
                        <!-- email box -->
                        <div class="w-full md:w-[469px] h-[60px] md:h-[99px] bg-[#FFF4EE] flex items-center justify-between">

                            <!-- email icon box -->
                                <?php get_template_part('svg/email_icon') ?>
                

                            <!-- email -->
                            <p class="text-[#16396F] font-bebas text-[16px] sm:text-[20px] xl:text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase">
                                <?php echo esc_html(get_theme_mod('company_email', 'smokenwingsbbq@gmail.com')); ?>

                            </p>
                            <?php get_template_part('svg/right_contact_svg') ?>


                        </div>

                        <div class="w-full md:w-[469px] h-[60px] md:h-[99px] bg-[#FFF4EE] flex items-center justify-between">

                            <!-- Left icon box -->

                                <?php get_template_part('svg/calender_icon') ?>

                            <!-- Center text -->
                            <p class="text-[#16396F] font-bebas text-[16px] sm:text-[20px] xl:text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase">
                                <?php echo esc_html(get_theme_mod('service_time', 'Mon - Fri 09:00 - 18:00')); ?>
                            </p>

                            <!-- Right shape -->
                            <?php get_template_part('svg/right_contact_svg') ?>

                        </div>

                        <div class="w-full md:w-[469px] h-[60px] md:h-[99px] flex-shrink-0 bg-[#FFF4EE] flex items-center justify-between">

                            <!-- Left icon box -->
                                <?php get_template_part('svg/contact_icon_svg') ?>
                                
                            <!-- Center text -->
                            <p class="text-[#16396F] font-bebas text-[16px] sm:text-[20px] xl:text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase">
                                <?php echo esc_html(get_theme_mod('company_phone', 'Call (800) 123 45 67')); ?>
                            </p>

                            <!-- Right shape -->
                            <?php get_template_part('svg/right_contact_svg') ?>

                        </div>


                    </div>

                </div>
            </div>

            <!-- right side image with SVG overlay -->
            <!-- right -->
          <div class="w-full md:w-[41.04%] h-[1397px] flex flex-col items-center -ml-1 bg-white pt-4 px-2 xl:px-[39.5px] mx-auto" style="box-shadow: -12px 49px 94px 0 rgba(85,89,90,0.05);">
                <h2 class="text-[#16396F] max-w-[220px] text-center md:text-start font-bebas text-[26px] sm:text-[29px] md:text-[32px] xl:text-[38px] font-normal leading-[44px] md:leading-[55px] xl:leading-[81px] tracking-[0.76px] uppercase">
                    <?php
                    if (! empty($form)) {
                        echo wp_kses_post($form);
                    } else {
                        echo 'Complete the <span class="text-[#F65600]">Entry Form</span> Below';
                    }
                    ?>
                </h2>

                <?php echo do_shortcode('[contact-form-7 id="cb14ff8" title="Enter Competition"]'); ?>
            </div>
        </div>
        </div>
        </div>

    </section>