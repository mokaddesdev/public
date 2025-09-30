<?php 
   // Get values from customizer with default fallback
   $title       = get_theme_mod('child_entry_form_title', __('Welcome to Form Builder', 'smokeWings'));

   $desc        = get_theme_mod('child_entry_form_description', __('Each child needs a separate entry.', 'smokeWings'));

   $right_title = get_theme_mod('child_entry_form_right_title', __('This will be a fun and rewarding event. Space is limited so sign up now. To enter, fill out the form.', 'smokeWings'));

   $right_desc  = get_theme_mod('child_entry_form_right_description', __('Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.', 'smokeWings'));

   $btn_txt     = get_theme_mod('child_entry_form_right_button_text', __('Enter the competition', 'smokeWings'));
   
   $bg_image    = get_theme_mod('child_entry_form_image', get_template_directory_uri() . '/assets/images/formbg.png');

   // Button link fallback
   $enter_page  = get_page_by_path('enter');
   $enter_link  = $enter_page ? get_permalink($enter_page) : '#';
?>

<section class="relative w-[1440px] h-[905.494px] -mb-[91.80px] mt-[100px]"
    style="background: linear-gradient(0deg,rgba(0,0,0,0.50) 0%,rgba(0,0,0,0.50) 100%), 
           url('<?php echo esc_url($bg_image); ?>') lightgray 50% / cover no-repeat;">

    <!-- overlay -->
    <div class="absolute inset-0 bg-[#00000080] opacity-5"></div>

    <div class="relative z-20 content pt-[88.99px] pb-[88.99px] pl-[122.82px] pr-[62.81px] flex gap-[54px]">
        
        <!-- left card -->
        <div class="left">
            <div class="w-[591px] h-[727.523px] pt-[37.86px] pl-[39.50px] flex-shrink-0 bg-white shadow-[ -12px_49px_94px_0_rgba(85,89,90,0.05) ]">

                <h2 class="text-[#01112D] font-bebas text-[38px] font-normal leading-[45.6px]">
                    <?php echo esc_html($title); ?>
                </h2>
                <h3 class="text-[rgba(25,43,71,0.8)] font-dm-sans text-[16px] font-normal leading-[22.4px] mt-1.5">
                    <?php echo esc_html($desc); ?>
                </h3>

                <div class="form-data">
                    <?php echo do_shortcode('[contact-form-7 id="e131480" title="Child Entry Form"]'); ?>
                </div>
            </div>
        </div>

        <!-- right text and button -->
        <div class="right-text-button flex pt-[175px] w-[610px] flex-col gap-5">
            <h3 class="font-bebas w-[580px] text-white text-[40px] font-normal leading-[48px] tracking-[0.8px]">
                <?php echo esc_html($right_title); ?>
            </h3>

            <p class="text-white pt-2 font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">
                <?php echo wp_kses_post($right_desc); ?>
            </p>

            <div class="button pt-3">
                <a href="<?php echo esc_url($enter_link); ?>"
                   class="inline-block w-[273px] h-[60px] flex-shrink-0 bg-[#F65600]
                   text-white font-bebas text-[24px] font-normal leading-[30.233px] uppercase 
                   py-[15.25px] px-[30px] text-center">
                    <?php echo esc_html($btn_txt); ?>
                </a>
            </div>
        </div>
    </div>
</section>

