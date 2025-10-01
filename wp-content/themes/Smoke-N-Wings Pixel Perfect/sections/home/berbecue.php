<section class="relative w-[1440px] mx-auto">
  <?php 
     $best_bbq_title = get_theme_mod('best_bbq_gallery_heading_title', 'Smokin’ Highlights: The <span class="text-[#F65600]"> best bbq </span>in action');
 
  ?>
    <!-- Background huge text layer -->
    <div class="absolute right-10 top-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>

    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 px-[125px] pt-[50px] w-full flex flex-col gap-6">
        <!-- side right side button text -->
        <div class="relative w-full flex justify-between">
            <!-- left -->
            <div class="about-left w-[626px] flex flex-col pt-[22px] items-start gap-5">
                <h2 class="text-[#16396F]  font-bebas-pro text-[78px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                    <?php echo wp_kses_post(nl2br($best_bbq_title));?>
                </h2>
            </div>
            <!-- right -->
            <div class="button flex gap-2.5 items-center pt-24 justify-center">
                <button id="best-bbq-prev" class="w-[53px] h-[53px] flex-shrink-0 p-[17px] rounded-none bg-[#F8B895] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
                        <path d="M12 1.5L3 11.5L12 21.5" stroke="white" stroke-width="3" />
                    </svg>
                </button>
                <button id="best-bbq-next" class="w-[53px] h-[53px] flex-shrink-0 p-[17px] rounded-none bg-[#591419] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
                        <path d="M2 21.5L11 11.5L2 1.5" stroke="white" stroke-width="3" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- image gallery-->
    <div class="images best-bbq-post-gallery">
            <?php
            $latest_gallery = new WP_Query([
                'post_type'      => 'best_bbq',
                'posts_per_page' => 1,
                'post_status'    => 'publish',
                'orderby'=> 'date',
                'order'=> 'DESC',
            ]);

            if ($latest_gallery->have_posts()): while($latest_gallery->have_posts()): $latest_gallery->the_post();
                // get all galleries 
                $galleries = get_post_galleries(get_the_ID(), false);
                if (!empty($galleries)) {
                    foreach ($galleries as $gallery) {
                        foreach ($gallery['src'] as $img_url):
            ?>
            <div class="image w-[278px] h-[229px] flex-shrink-0">
                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover">
            </div>
            <?php
                  endforeach;
                    }
                } else {
                    echo '<p>No images found in gallery.</p>';
                }
             endwhile;
                wp_reset_postdata();
             endif;
             ?>
            </div>
    </div>
</section>