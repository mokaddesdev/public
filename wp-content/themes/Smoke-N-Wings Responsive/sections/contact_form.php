<section class="relative w-[1440px] pl-[127px] pb-[35px] pr-[40px] mx-auto py-5">

    <!-- Background huge text layer -->
    <div class="absolute top-6 right-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 pt-[108px] w-full">
        <!-- left and right -->
        <div class="flex gap-[10px]">
            <!-- left side text -->
            <div class="relative about-left w-[624px] -mt-4 flex flex-col gap-3">
                <h2 class="text-[#16396F] pl-0.5 font-bebas text-[60px] font-normal leading-[81px] tracking-[1.2px] uppercase">
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

                    <div class="w-[469px] h-[99px] flex-shrink-0 bg-[#FFF4EE] flex items-center justify-between">

                        <!-- Left icon box -->
                        <div class="w-[74px] h-[74px] flex-shrink-0 bg-[#16396F] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                <path d="M38.5 33.25V8.75H3.5V33.25H38.5Z" stroke="white" stroke-width="2.625" stroke-miterlimit="10" />
                                <path d="M5.25 9.625L21 24.5L36.75 9.625" stroke="white" stroke-width="2.625" />
                                <path d="M17.5 21L3.5 33.25" stroke="white" stroke-width="2.625" />
                                <path d="M24.5 21L38.5 33.25" stroke="white" stroke-width="2.625" />
                                <path d="M16.625 21L5.25 9.625L6.125 8.75H32.375L35.875 9.625L25.375 19.25L21.875 23.625L16.625 21Z" fill="white" />
                            </svg>
                        </div>

                        <!-- Center text -->
                        <p class="text-[#16396F] font-bebas text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase -ml-[90px]">
                              <?php echo esc_html(get_theme_mod('company_email', 'smokenwingsbbq@gmail.com')); ?>
                            
                        </p>

                        <!-- Right shape -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="85" viewBox="0 0 28 85" fill="none">
                            <path d="M28 0H0L28 85V0Z" fill="#591419" />
                        </svg>

                    </div>

                    <div class="w-[469px] h-[99px] flex-shrink-0 bg-[#FFF4EE] flex items-center justify-between">

                        <!-- Left icon box -->
                        <div class="w-[74px] h-[74px] flex-shrink-0 bg-[#16396F] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                <path d="M38.5 7H3.5V38.5H38.5V7Z" stroke="white" stroke-width="2.625" />
                                <path d="M12.25 3.5V10.5" stroke="white" stroke-width="2.625" />
                                <path d="M3.5 15.75H38.5V38.5H3.5V15.75Z" fill="white" />
                                <path d="M23.2685 22.75H18.7315M33.25 22.75H28.713M13.287 22.75H8.75" stroke="#16396F" stroke-width="2.625" />
                                <path d="M23.2685 31.5H18.7315M33.25 31.5H28.713M13.287 31.5H8.75" stroke="#16396F" stroke-width="2.625" />
                                <path d="M21 3.5V10.5" stroke="white" stroke-width="2.625" />
                                <path d="M29.75 3.5V10.5" stroke="white" stroke-width="2.625" />
                                <path d="M3.5 15.75H38.5" stroke="white" stroke-width="2.625" />
                            </svg>
                        </div>

                        <!-- Center text -->
                        <p class="text-[#16396F] font-bebas text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase -ml-[148px]">
                            <?php echo esc_html(get_theme_mod('service_time', 'Mon - Fri 09:00 - 18:00')); ?>
                        </p>

                        <!-- Right shape -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="85" viewBox="0 0 28 85" fill="none">
                            <path d="M28 0H0L28 85V0Z" fill="#591419" />
                        </svg>

                    </div>

                    <div class="w-[469px] h-[99px] flex-shrink-0 bg-[#FFF4EE] flex items-center justify-between">

                        <!-- Left icon box -->
                        <div class="w-[74px] h-[74px] flex-shrink-0 bg-[#16396F] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                <path d="M8.89327 20.555C10.4071 23.0489 12.2926 25.428 14.4323 27.5662C16.5702 29.7055 18.9491 31.5915 21.4425 33.1054L27.7038 26.3879L39.8105 33.2831C38.0535 36.5454 33.8393 40.7176 28.4854 39.6389C25.9552 39.1284 23.4583 38.2776 20.4391 36.5454C17.4001 34.8019 14.5307 32.575 11.9814 30.0239C9.43016 27.4745 7.19623 24.598 5.45265 21.559C3.7204 18.5397 2.86967 16.0429 2.35907 13.5127C1.28052 8.15874 5.45265 3.94464 8.71495 2.1875L15.6101 14.2943L8.89327 20.555Z" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.75 10.15V5.25H26.25V10.15H22.75ZM28.4606 11.0662L31.9254 7.60142L34.4003 10.0763L30.9354 13.5411L28.4606 11.0662ZM31.85 15.75H36.75V19.25H31.85V15.75Z" fill="white" />
                            </svg>
                        </div>

                        <!-- Center text -->
                        <p class="text-[#16396F] font-bebas text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase -ml-[160px]">
                             <?php echo esc_html(get_theme_mod('company_phone', 'Call (800) 123 45 67')); ?>
                        </p>

                        <!-- Right shape -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="85" viewBox="0 0 28 85" fill="none">
                            <path d="M28 0H0L28 85V0Z" fill="#591419" />
                        </svg>

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