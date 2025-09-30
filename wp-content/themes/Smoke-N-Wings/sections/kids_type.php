    <?php 

      $title   = get_theme_mod('kids_type_section_heading_title');
      $desc    = get_theme_mod('kids_type_section_heading_description');

    ?>

<section class="relative w-[1440px] mx-auto px-[125px] pt-[102px] flex flex-col gap-[52.50px] items-center">

    <!-- Background huge text layer -->
    <div class="absolute top-7 right-0 z-10 opacity-100">
        <?php get_template_part("svg/berbecue_svg"); ?>
    </div>

    <!-- section heading -->
    <div class="heading flex justify-between flex-col items-center gap-4">
        <h2 class="text-[#16396F] text-center font-['Bebas_Neue'] text-[60px] font-normal leading-[81px] tracking-[1.2px] uppercase">
             <?php
                    echo ! empty($title)
                        ? wp_kses_post($title)
                        : 'KIDS-<span class="text-[#F65600]">Q</span>';
                    ?>
            
        </h2> 
        <p class="text-black text-center font-['Jost'] text-[18px] font-normal leading-normal tracking-[0.36px]">
             <?php
                    echo ! empty($desc)
                        ? wp_kses_post($desc)
                        : 'The Kid’s Q will be divided into two divisions';
                    ?>
            
        </p>
    </div>

    <!-- kids card -->
    <div class="kids-card flex gap-[34.80px] items-center">

        <?php
        $latest_kids = new WP_Query([
            'post_type'      => 'kids',
            'posts_per_page' => 2,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ]);

        if ($latest_kids->have_posts()): 
            while($latest_kids->have_posts()): $latest_kids->the_post();
        ?>
            <div class="w-[545px] h-[833.063px] flex-shrink-0 border border-[#E7E7E7] bg-white">
                <?php if( has_post_thumbnail()) :?>
                    <div class="w-[545px] h-[590px] flex-shrink-0"
                        style="background:linear-gradient(0deg,rgba(0,0,0,0.04) 0%,rgba(0,0,0,0.04) 100%), 
                               url('<?php echo get_the_post_thumbnail_url(get_the_ID() ,'full'); ?>') lightgray 50% / cover no-repeat;">
                    </div>
                <?php endif; ?>

                <!-- card content -->
                <div class="flex flex-col gap-3 pl-[31.16px] pt-[24.50px] pr-[40.79px] pb-[21.56px]">
                    <div class="flex justify-between items-center">
                        <h2 class="text-[#000] font-bebas text-[34px] font-normal leading-[120%]">
                            <?php echo esc_html(get_the_title()); ?>
                        </h2>
                        <h3 class="text-[#16396F] font-bebas text-[44px] font-normal leading-[120%]">
                            $<?php 
                            $price = get_post_meta(get_the_ID(), '_price', true);
                            echo esc_html($price);
                            ?>
                        </h3>
                    </div>
                    <h3 class="text-[#7C7C7C] w-[394px] font-jost text-[18px] font-normal leading-[120%]">
                        <?php echo wp_kses_post(get_the_content()); ?>
                    </h3>

                    <!-- button -->
                    <div class="flex justify-center mt-[18px] ml-2">
                        <button class="flex w-[273px] h-[60px] px-[30.233px] py-[15.117px] justify-center items-center gap-[7.558px] flex-shrink-0 border-[1.08px] border-[#16396F] bg-[#16396F] text-white font-['Bebas_Neue'] text-[24px] font-normal leading-[30.233px]">
                            Buy now
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
</section>
