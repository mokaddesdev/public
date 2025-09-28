<section class="relative w-[1440px] mx-auto">

    <!-- Background huge text layer -->
    <div class="absolute right-10 top-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>

    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 px-[125px] pt-[50px] w-full flex flex-col gap-6">
        <!-- side right side button text -->
        <div class="relative w-full flex justify-between">
            <!-- left -->
            <div class="about-left w-[626px] flex flex-col pt-[22px] pl-1.5 items-start gap-5">
                <h2 class="text-[#16396F]  font-bebas-pro text-[78px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                    Smokin’ Highlights: The <span class="text-[#F65600]">best bbq</span> in action

                </h2>
            </div>
            <!-- right -->
            <div class="button flex gap-2.5 items-center pt-24 justify-center">
                <button class="w-[53px] h-[53px] flex-shrink-0 p-[17px] rounded-none bg-[#F8B895] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
                        <path d="M12 1.5L3 11.5L12 21.5" stroke="white" stroke-width="3" />
                    </svg>
                </button>
                <button class="w-[53px] h-[53px] flex-shrink-0 p-[17px] rounded-none bg-[#591419] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
                        <path d="M2 21.5L11 11.5L2 1.5" stroke="white" stroke-width="3" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- image gallery-->
        <div class="images relative flex justify-between items-center">
            <?php
            $latest_gallery = new WP_Query([
                'post_type'      => 'best_bbq',
                'posts_per_page' => 1,
                'post_status'    => 'publish'
            ]);

            if ($latest_gallery->have_posts()):
                $latest_gallery->the_post();

                // get all galleries in this post
                $galleries = get_post_galleries(get_the_ID(), false); // false = return image URLs
                if (!empty($galleries)) {
                    foreach ($galleries as $gallery) {
                        foreach ($gallery['src'] as $img_url) {
                            echo '<div class="image w-[278px] h-[229px]">';
                            echo '<img src="' . esc_url($img_url) . '" alt="' . esc_attr(get_the_title()) . '" class="w-full h-full object-cover">';
                            echo '</div>';
                        }
                    }
                } else {
                    echo '<p>No images found in gallery.</p>';
                }

                wp_reset_postdata();
            else:
                echo '<p>No Blog Gallery found.</p>';
            endif;
            ?>
        </div>

    </div>
</section>