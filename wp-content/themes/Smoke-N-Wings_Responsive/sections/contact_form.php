<section class="relative w-[1440px] pl-[127px] pt-[108px] pb-[35px] pr-[40px] mx-auto py-5">

    <!-- Background huge text layer -->
    <div class="absolute top-6 right-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20  w-full">
        <!-- left and right -->
        <div class="flex gap-[10px]">
            <!-- left side text -->
            <div class="relative about-left w-[624px] -mt-4 flex flex-col gap-3">
                <h2 class="body-heading">
                    <?php
                    $left_title = get_theme_mod("contact_form_title");
                    if ( ! empty( $left_title ) ) :
                        echo wp_kses_post( $left_title);
                     else :
                        echo ' Contact Us';
                     endif;
                    ?>
                   
                </h2>

                <p class="text-black font-jost pt-0.5 text-[18px] font-normal leading-normal tracking-[0.36px]">
                     <?php
                     $description = get_theme_mod('contact_form_description');
                        if ( ! empty( $description ) ) :
                            echo wp_kses_post( $description );
                        else :
                            echo 'We will reply as soon as possible';
                        endif;
                        ?>
                </p>

                <div class="pl-2 pt-7 flex flex-col gap-6">
                      <!-- email -->
                    <div class="w-[469px] h-[99px] flex-shrink-0 bg-[#FFF4EE] flex items-center justify-between">

                        <!-- email icon -->
                        <div class="w-[74px] h-[74px] flex-shrink-0 bg-[#16396F] flex items-center justify-center">
                              <?php get_template_part('svg/email_icon') ?>
                        </div>

                        <!-- email -->
                        <p class="text-[#16396F] font-bebas text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase -ml-[90px]">
                              <?php echo esc_html(get_theme_mod('company_email', 'smokenwingsbbq@gmail.com')); ?>
                            
                        </p>

                        <!-- Right shape -->
                         <?php get_template_part('svg/right_contact_svg') ?>

                    </div>
                      <!-- calender time -->
                    <div class="w-[469px] h-[99px] flex-shrink-0 bg-[#FFF4EE] flex items-center justify-between">

                        <!-- calender icon-->

                        <div class="w-[74px] h-[74px] flex-shrink-0 bg-[#16396F] flex items-center justify-center">
                           <?php get_template_part('svg/calender_icon');?>
                        </div>

                        <!-- calender date -->
                        <p class="text-[#16396F] font-bebas text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase -ml-[148px]">
                            <?php echo esc_html(get_theme_mod('service_time', 'Mon - Fri 09:00 - 18:00')); ?>
                        </p>

                        <!-- Right shape -->
                        <?php get_template_part('svg/right_contact_svg') ?>

                    </div>
                     <!-- contact number -->
                    <div class="w-[469px] h-[99px] flex-shrink-0 bg-[#FFF4EE] flex items-center justify-between">

                        <!-- contact icon -->
                        <div class="w-[74px] h-[74px] flex-shrink-0 bg-[#16396F] flex items-center justify-center">
                            <?php get_template_part('svg/contact_icon_svg') ?>
                        </div>

                        <!-- Ccontact text -->
                        <p class="text-[#16396F] font-bebas text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase -ml-[160px]">
                             <?php echo esc_html(get_theme_mod('company_phone', 'Call (800) 123 45 67')); ?>
                        </p>

                        <!-- Right shape -->
                         <?php get_template_part('svg/right_contact_svg') ?>

                    </div>


                </div>

            </div>

            <!-- right side image with SVG overlay -->
               <div class="-ml-12 pt-2 pl-[40px] w-[591px] h-[585px] flex-shrink-0 bg-white shadow-[-12px_49px_94px_0_rgba(85,89,90,0.05)]">
                <h2 class="text-[#16396F] font-bebas text-[38px] font-normal leading-[81px] tracking-[0.76px] uppercase">
                     <?php
                     $right_title = get_theme_mod('contact_form_right_title');
                        if ( ! empty( $right_title ) ) :
                            echo wp_kses_post( $right_title );
                         else :
                            echo 'Leave Us <span class="text-[#F65600]">Message</span>';
                         endif;
                        ?>
                    </h2>

                     <?php echo do_shortcode('[contact-form-7 id="7f08c2e" title="Contact Us"]'); ?>
                </div>
            </div>
        </div>
    </div>

</section>