    <?php
    $sponsor_title = get_theme_mod('sponsor_page_heading_title', 'our featured <span class="text-[#F65600]"> sponsors </span>');
    ?>


    <section class="w-full pt-10 sm:pt-13 md:pt-16 lg:pt-20 2xl:pt-[115px] pb-[34px] px-[5.83%] flex flex-col items-center gap-6 sm:gap-8 md:gap-10 lg:gap-12 2xl:gap-16">
        <!-- heading -->
        <div>
            <?php if ($sponsor_title) : ?>
                <h3 class="body-heading text-center">
                    <?php echo wp_kses_post($sponsor_title); ?>
                </h3>
            <?php endif; ?>
        </div>

        <!-- images gallery -->
        <div class="flex flex-wrap justify-center gap-x-5 gap-y-4 md:gap-x-8 md:gap-y-7 xl:gap-x-[67px] xl:gap-y-[44px]">
            <?php
            $latest_gallery = new WP_Query([
                'post_type'      => 'sponsor',
                'posts_per_page' => 1,
                'post_status'    => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
            ]);

            if ($latest_gallery->have_posts()):
                $latest_gallery->the_post();

                $galleries = get_post_galleries(get_the_ID(), false);
                if (!empty($galleries)) {
                    foreach ($galleries as $gallery) {
                        foreach ($gallery['src'] as $img_url) {
                            echo ' <div class="flex w-full sm:w-[313px] lg:h-[247px] p-[60px] md:p-[56px] xl:p-[66px] flex-col justify-center items-center gap-[10px] border-[5px] dark:bg-gray-300 border-[#FFE4D5] bg-white">';
                            echo '<img src="' . esc_url($img_url) . '" alt="' . esc_attr(get_the_title()) . '" class="w-full h-full object-contain">';
                            echo '</div>';
                        }
                    }
                }

                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>