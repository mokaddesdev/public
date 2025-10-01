    <?php 
    $title = get_theme_mod('enter_competition_title');
    $desc  = get_theme_mod('enter_competition_description');
    $form  = get_theme_mod('enter_competition_form_title');

    ?>


<section class="relative w-[1440px] pl-[127px] pb-[66px] pr-[40px] mx-auto py-5">

    <!-- Background huge text layer -->
    <div class="absolute top-6 right-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 pt-[100px] gap-[68px] w-full flex">
            <!-- left side text -->
       <div class="w-[522px] flex-shrink-0">
          <div class="relative sticky top-1 right-0 -mt-2 w-[522px] flex flex-col gap-3">
                <h2 class="text-[#16396F] font-bebas text-[60px] font-normal leading-[81px] tracking-[1.2px] uppercase">
                 <?php
                    if ( ! empty( $title ) ) {
                        echo wp_kses_post( $title );
                    } else {
                        echo 'Enter Competition';
                    }
                    ?>
                </h2>

                <p class="text-black font-jost text-[18px] font-normal leading-normal tracking-[0.36px] pt-0.5">
              <?php
                    if ( ! empty( $desc ) ) {
                        echo wp_kses_post( $desc );
                    } else {
                        echo 'We are excited to welcome your team to the 2024 SMOKE-N-WINGS BBQ CONTEST. Put your skills to the test for your chance to win cash prizes and be crowned the SMOKE-N-WINGS Grand Champion and the Idaho State Champion.<br><br>This KCBS sanctioned competition will be held June 28-29, 2024. Winning will make your team eligible for the American Royal and the Jack Daniels World Championship.';
                    }
                ?>
                </p>

                <div class="pl-4 pt-4 flex flex-col gap-9">

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
                        <p class="text-[#16396F] font-bebas text-[23px] pt-1 font-normal leading-[81px] tracking-[0.46px] uppercase -ml-[153px]">
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
       </div>

            <!-- right side image with SVG overlay -->
               <!-- right -->
 <div class="w-[591px] h-[1397px] -ml-1 flex-shrink-0 bg-white pt-4 px-[39.5px] mx-auto" style="box-shadow: -12px 49px 94px 0 rgba(85,89,90,0.05);">
                <h2 class="text-[#16396F] font-bebas text-[38px] font-normal leading-[81px] tracking-[0.76px] uppercase"> 
             <?php
                if ( ! empty( $form ) ) {
                    echo wp_kses_post( $form );
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