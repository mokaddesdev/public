    <?php

    $title   = get_theme_mod('kids_type_section_heading_title');
    $desc    = get_theme_mod('kids_type_section_heading_description');

    ?>


    <section class="relative w-full mx-auto px-[2.5%] md:px-[3.5%] lg:px-[7.5%] 2xl:px-[8.68%] pt-12 sm:pt-14 md:pt-16 lg:pt-20 2xl:pt-[102px] flex flex-col gap-6 sm:gap-7 md:gap-8 lg:gap-10 2xl:gap-[52.50px] items-center">

        <div class="max-w-[1340px] mx-auto relative">
            <!-- Background huge text layer -->
            <div class="absolute -top-7 sm:-top-9 lg:-top-11 2xl:-top-20 right-0 z-10 animate-pulse">
                <?php get_template_part("svg/berbecue_svg"); ?>
            </div>

            <!-- section heading -->
            <div class="heading flex justify-between flex-col items-center gap-3 lg:gap-4">
                <h2 class="body-heading">
                    <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : 'KIDS-<span class="text-[#F65600]">Q</span>';
                    ?>

                </h2>
                <p class="body-text text-center pb-5">
                    <?php
                    echo ! empty($desc)
                        ? wp_kses_post($desc)
                        : 'The Kid’s Q will be divided into two divisions';
                    ?>

                </p>
            </div>

            <!-- kids card -->
            <div class="kids-card flex flex-col flex-wrap items-center md:flex-row gap-3.5 sm:gap-5 md:gap-6 2xl:gap-[34.80px]">

                <?php
                $latest_kids = new WP_Query([
                    'post_type'      => 'kids',
                    'posts_per_page' => 2,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ]);

                if ($latest_kids->have_posts()):
                    while ($latest_kids->have_posts()): $latest_kids->the_post();
                ?>
         <div class="w-full md:w-[48%]
            h-auto flex-shrink-0 border border-[#E7E7E7] dark:bg-gray-400 bg-white mx-auto">



                            <?php if (has_post_thumbnail()) : ?>
                                <div class="w-full md:h-[450px] lg:h-[520px] xl:h-[590px] flex-shrink-0 relative overflow-hidden">
                                    <img
                                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                        alt="<?php the_title_attribute(); ?>"
                                        class="w-full h-full object-contain md:object-cover" />
                                    <div class="absolute inset-0 bg-[rgba(0,0,0,0.04)]"></div>
                                </div>
                            <?php endif; ?>


                            <!-- card content -->
                            <div class="flex flex-col gap-3 sm:pl-4 sm:pr-4 md:pl-[25px] md:pr-[30px] lg:pl-[31.16px] lg:pr-[40.79px] pt-[24.50px] pb-[21.56px]">
                                <div class="flex justify-between items-center flex-wrap gap-2">
                                    <h2 class="text-[#000] font-bebas text-[22px] sm:text-[26px] md:text-[30px] lg:text-[34px] font-normal leading-[120%]">
                                        <?php echo esc_html(get_the_title()); ?>
                                    </h2>
                                    <h3 class="text-[#16396F] font-bebas text-[30px] sm:text-[36px] md:text-[40px] lg:text-[44px] font-normal leading-[120%]">
                                        $<?php
                                            $price = get_post_meta(get_the_ID(), '_price', true);
                                            echo esc_html($price);
                                            ?>
                                    </h3>
                                </div>

                                <h3 class="body-text dark:text-white w-full sm:w-[280px] md:w-[340px] lg:w-[394px]">
                                    <?php echo wp_kses_post(get_the_content()); ?>
                                </h3>

                                <!-- button -->
                                <div class="flex justify-center mt-[18px]">
                                    <button class="blue-btn">
                                        <span>
                                            <?php echo esc_html_e("Buy now", "smokeWings"); ?>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </section>