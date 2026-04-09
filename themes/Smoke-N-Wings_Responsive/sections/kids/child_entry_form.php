        <?php
            // Get values from customizer with default fallback
            $title       = get_theme_mod('child_entry_form_title', __('Welcome to Form Builder', 'smokeWings'));

            $desc        = get_theme_mod('child_entry_form_description', __('Each child needs a separate entry.', 'smokeWings'));

            $right_title = get_theme_mod('child_entry_form_right_title', __('This will be a fun and rewarding event. Space is limited so sign up now. To enter, fill out the form.', 'smokeWings'));

            $right_desc  = get_theme_mod('child_entry_form_right_description', __('Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.', 'smokeWings'));

            $btn_txt     = get_theme_mod('child_entry_form_right_button_text', __('Enter the competition', 'smokeWings'));

            $bg_image    = get_theme_mod('child_entry_form_image', get_template_directory_uri() . '/assets/images/formbg.png');

            $enter_page  = get_page_by_path('enter');
            $enter_link  = $enter_page ? get_permalink($enter_page) : '#';
        ?>

    <section class="relative w-full max-w-[1440px] -mb-10 mt-6 sm:mt-8 md:mt-12 lg:mt-14 xl:mt-20 2xl:mt-[100px]" style="background: linear-gradient(0deg,rgba(0,0,0,0.50) 0%,rgba(0,0,0,0.50) 100%), url('<?php echo esc_url($bg_image); ?>') center/cover no-repeat;">

        <div class="absolute inset-0 bg-[#00000080] opacity-5"></div>

        <div class="relative z-20 content px-[5%] sm:px-[7%] md:px-[4%] lg:px-[5%] xl:pl-[6.5%] py-10 sm:py-14 md:py-16 lg:py-20 flex flex-col lg:flex-row gap-10 sm:gap-12 lg:gap-[54px] max-w-[1330px] mx-auto">

            <!-- left card -->
            <div class="left w-full lg:w-[60%] xl:w-[49.2%]">
                <div class="w-full h-auto lg:h-[727.523px] pt-6 sm:pt-8 lg:pt-[37.86px] pl-5 sm:pl-6 lg:pl-[39.50px] dark:bg-gray-300 bg-white shadow-[ -12px_49px_94px_0_rgba(85,89,90,0.05) ] rounded-lg flex flex-col items-center justify-center mx-auto">
                    <h2 class="text-[#01112D] font-bebas text-[28px] sm:text-[34px] md:text-[36px] lg:text-[38px] leading-[1.2]">
                        <?php echo esc_html($title); ?>
                    </h2>
                    <h3 class="text-[rgba(25,43,71,0.8)] font-dm-sans text-[14px] sm:text-[15px] md:text-[16px] leading-[22.4px] mt-1.5">
                        <?php echo esc_html($desc); ?>
                    </h3>

                    <div class="form-data mt-4 sm:mt-5 pr-4 sm:pr-5 md:pr-6">
                        <?php echo do_shortcode('[contact-form-7 id="e131480" title="Child Entry Form"]'); ?>
                    </div>
                </div>
            </div>

            <!-- right text and button -->
            <div class="right-text-button flex w-full lg:w-[40%] xl:w-[50.8%] flex-col gap-5 justify-center pt-10 sm:pt-14 md:pt-20 lg:pt-[175px] text-center lg:text-left max-w-[70%] lg:max-w-[100%] mx-auto pr-3">
                <h3 class="font-bebas text-white w-full sm:w-[90%] lg:w-full text-[26px] sm:text-[32px] md:text-[36px] lg:text-[40px] leading-[1.2] tracking-[0.8px]">
                    <?php echo esc_html($right_title); ?>
                </h3>

                <p class="text-white font-jost text-[16px] sm:text-[17px] md:text-[18px] leading-relaxed tracking-[0.38px]">
                    <?php echo wp_kses_post($right_desc); ?>
                </p>

                <div class="button pt-2 sm:pt-3 max-w-[50%] lg:max-w-full mx-auto lg:w-full">
                    <a href="<?php echo esc_url($enter_link); ?>" class="red-btn inline-block">
                        <span><?php echo esc_html($btn_txt); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>