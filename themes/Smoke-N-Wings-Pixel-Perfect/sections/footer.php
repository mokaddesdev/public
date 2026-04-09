  <?php
        $footer_logo_title = get_theme_mod('footer_title', 'Smoke-N-Wings <span class="text-[#F65600]"> BBQ </span> Competition');

        $footer_button_text = get_theme_mod('footer_button_title', 'Enter Competition');
        ?>


<footer class="w-[1440px] h-[341px] mt-[92px] bg-[#16396F] ">
    <!-- footer-content -->
    <div class="footer-content mx-auto px-[125px] pt-[60px] flex justify-between">

        <!-- footer left -->
        <div class="footer-text w-7/12">
            <a href="<?php echo home_url();?>">
            <h3 class="text-[#FFE4D5] font-bebas-pro text-[115px] font-bold leading-[102px] tracking-[2.3px] uppercase">
                <?php echo  wp_kses_post($footer_logo_title); ?>
            </h3>
            </a>
        </div>
        <!-- footer right -->
        <div class="footer-right flex flex-col items-end w-5/12">
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
                        ?>" class="inline-block w-[367px] h-[45px] flex-shrink-0 bg-[#F65600] text-white font-bebas-pro font-extrabold text-[20px] leading-[1] tracking-[0.4px] uppercase py-[13.99px] px-[48px] text-center">
                    <?php echo $footer_button_text; ?>
                </a>

            </div>

            <!-- footer menu -->
            <div class="foote-menu flex gap-24 pt-9">
                <nav>
                    <?php
                    wp_nav_menu(array(
                        "theme_location" => "smokeWings_footer_menu1",
                        'container' => false,
                        'menu_class' => 'flex flex-col gap-3 text-[#FFE4D5] font-bebas-pro text-[20px] font-bold leading-normal tracking-[0.4px] uppercase',
                        'fallback_cb' => false,
                    )); ?>
                </nav>

                <nav>

                    <?php
                    wp_nav_menu(array(
                        "theme_location" => "smokeWings_footer_menu2",
                        'container' => false,
                        'menu_class' => 'flex flex-col gap-3 text-[#FFE4D5] font-bebas-pro text-[20px] font-bold leading-normal tracking-[0.4px] uppercase',
                        'fallback_cb' => false,
                    )); ?>

                </nav>
            </div>

        </div>
    </div>

    <!-- footer buttom -->
    <!-- divider and text -->
    <div class="divider-text flex flex-col gap-5 pt-5 mx-auto">

        <div class=" ml-13 w-[1334px] h-[2px] bg-[#FFFFFF]">
        </div>

        <p class="text-[#FFE4D5] font-jost text-[15px] font-normal leading-normal tracking-[0.3px] uppercase text-center">
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