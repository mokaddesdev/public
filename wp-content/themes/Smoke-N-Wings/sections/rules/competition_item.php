  <?php 
        $title   = get_theme_mod('competition_item_title' );
        $image   = get_theme_mod('competition_item_image');
    ?>

<section class="relative w-[1440px] px-[125px] mx-auto pt-[38px] pb-6">

    <!-- Foreground content layer -->
    <div class="relative z-20 flex gap-16 w-full">
            <!-- left side text -->
            <div class="relative about-left pt-16 w-[569px] flex flex-col gap-5">
                <h2 class="text-[#16396F] font-bebas text-[60px] font-normal leading-[60px] tracking-[1.2px] uppercase">
                  <?php echo !empty($title) ?
                   $title : ' <span class="text-[#F65600]">The items </span> they are looking for are'?>
                </h2>
               <!-- item content  -->
                <div class="w-[498.464px] flex flex-col gap-2">
                    <ul class=" flex flex-col gap-[21px]">
                     <?php
                      $competition_rules = new WP_Query([
                          'post_type'      => 'competition_rules',
                          'posts_per_page' => 8,
                          'post_status'    => 'publish',
                          'orderby'        => 'date',
                          'order'          => 'DESC',
                      ]);

                      if ($competition_rules->have_posts()): 
                          while($competition_rules->have_posts()): $competition_rules->the_post();
                      ?>
                        <li class="flex -mt-1 gap-5 items-center">
                        <div class="w-[22px] h-[22px]">
                        <?php get_template_part('svg/checkicon'); ?>
                       </div>

                                <p class="text-black font-jost text-[16px] font-normal leading-normal tracking-[0.32px]">
                                   <?php echo esc_html(the_title()); ?>
                                </p>
                        </li>
                     <?php
                     endwhile;
                     wp_reset_postdata();
                    endif;
                        ?>
                    </ul>

                </div>
            </div>
        <!-- right side image with SVG overlay -->
        <div class="relative  w-[593px]">
            <div class="relative w-full h-[495px]">
                <div class="-ml-5">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="594" height="495" viewBox="0 0 594 495" fill="none">
                    <path d="M95 495H593.5V0H0L95 495Z" fill="#591419"/>
                </svg> 
                </div>

                <div class="absolute -top-3 -left-9 -mr-4">
                    <img src="<?php echo !empty($image) 
                        ? esc_url($image) 
                        : esc_url(get_template_directory_uri() . '/assets/images/rule3.png'); ?>"
                        alt="<?php echo esc_attr($title); ?>"
                        class="w-[623px] h-[517px]">
                </div>

            </div>
        </div>
        </div>
    </div>

</section>