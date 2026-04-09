  <?php
        $footer_logo_title = get_theme_mod('footer_title', 'Smoke-N-Wings <span class="text-[#F65600]"> BBQ </span> Competition');

        $footer_button_text = get_theme_mod('footer_button_title', 'Enter Competition');
        ?>


<footer class="w-full max-w-[1440px] mx-auto pt-6 md:pt-8 lg:pt-10 2xl:pt-14 pb-3 sm:pt-5 sm:pb-4 lg:pb-6  2xl:pb-8 px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%] mt-3 sm:mt-5 md:mt-7 lg:mt-10 2xl:mt-[92px] bg-[#16396F]">

    <!-- footer-content -->
    <div class="footer-content mx-auto max-w-[1300px] flex flex-col md:flex-row items-center justify-start md:justify-between">

        <!-- footer left -->
        <div class="footer-text text-center md:text-start w-full md:w-6/12">
            <a href="<?php echo home_url();?>">
            <h3 class="text-[#FFE4D5] font-bebas-pro text-[50px] sm:text-[56px] md:text-[80px] lg:text-[90px] 2xl:text-[115px] font-bold leading-[58px] sm:leading-[62px] md:leading-[85px] xl:leading-[95px] 2xl:leading-[102px] tracking-[2.3px] uppercase">
                <?php echo wp_kses_post($footer_logo_title); ?> 
            </h3>
            </a>
        </div>
        <!-- footer right -->
        <div class="footer-right flex flex-col items-center pt-3.5 md:pt-0 md:items-end w-full md:w-5/12 lg:w-4/12">
            <!-- footer button -->
            <div class="button">
                <a href="<?php
                     $enter_page = get_page_by_path('enter');
                        if ($enter_page) {
                            $enter_link = get_permalink($enter_page);
                        } else {
                            $enter_link = '#';
                        }
                        echo $enter_link;
                        ?>" class="w-[250px] sm:w-[300px] md:w-[367px] header-footer-btn">
                        <span>
                              <?php echo $footer_button_text; ?>
                        </span>
                    
                </a>

            </div>

            <!-- footer menu -->
            <div class="foote-menu w-full px-[12%] sm:px-[18%] md:px-0 flex items-center justify-between pt-5 md:pt-9">
                <nav>
                    <?php
                    wp_nav_menu(array(
                        "theme_location" => "smokeWings_footer_menu1",
                        'container' => false,
                        'menu_class' => 'menu-text text-[#FFE4D5] flex flex-col gap-3',
                        'fallback_cb' => false,
                    )); ?>
                </nav>

                <nav class="-mt-8">

                    <?php
                    wp_nav_menu(array(
                        "theme_location" => "smokeWings_footer_menu2",
                        'container' => false,
                        'menu_class' => 'flex flex-col gap-3 menu-text text-[#FFE4D5]',
                        'fallback_cb' => false,
                    )); ?>

                </nav>
            </div>

        </div>
    </div>

    <!-- footer buttom -->
    <!-- divider and text -->
    <div class="divider-text mx-auto lg:-mx-10 flex flex-col gap-5 pt-5">

        <div class="mx-auto w-full scroll-px-5 max-w-[1400px] h-[2px] bg-[#FFFFFF]">
        </div>

        <p class="text-[#FFE4D5] font-jost text-sm md:text-[15px] font-normal leading-normal tracking-[0.3px] uppercase text-center">
            &copy; <?php echo esc_html__('Copyright', 'smokeWings'); ?>
            <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
            <?php echo esc_html__('All rights reserved', 'smokeWings'); ?>
        </p>


    </div>
</footer>

<?php wp_footer(); ?>
</main>
</body>

</html>