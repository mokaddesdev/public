<section class="w-[1440px] pt-[115px] pb-[34px] px-[84px] flex flex-col items-center gap-16">
    <!-- heading -->
    <div>
       <?php
            $sponsor_title = get_theme_mod('sponsor_section_title', 'our featured sponsors are amazing');

            $words = explode(' ', trim($sponsor_title));
            $first_two = array_slice($words, 0, 2);
            $first_two_string = implode(' ', $first_two);

            $remaining = array_slice($words, 2);
            $remaining_string = implode(' ', $remaining);
         ?>

        <h3 class="text-[#16396F] text-center font-bebas text-[60px] font-normal leading-[81px] tracking-[1.2px] uppercase self-stretch">
            <?php echo $first_two_string;?> <span class="text-[#F65600]"> <?php echo $remaining_string;?> </span>
        </h3>
    </div>

    <!-- images gallery -->
    <div class="flex flex-wrap justify-center gap-x-[67px] gap-y-[44px]">
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
                        echo ' <div class="flex w-[313px] h-[247px] p-[66px] flex-col justify-center items-center gap-[10px] border-[5px] border-[#FFE4D5] bg-white">';
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