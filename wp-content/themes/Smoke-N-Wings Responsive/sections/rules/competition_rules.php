  <?php 
        $title   = get_theme_mod('competition_rules_title' , ' SMOKE-N-WINGS <span class="text-[#F65600]">2024</span> RULES' );
        $desc   = get_theme_mod('competition_rules_description' ,'As a KCBS sanctioned Master Series Contest, all KCBS rules will be followed. The event and the judging will be overseen by the KCBS Contest Representatives assigned to the event. Their decisions and interpretations are final.' );
        $rules_card_description    = get_theme_mod('rules_card_description' , 'As a Master Series Contest, teams will cook four meats:
        The Four KCBS Meat Categories are:');
    ?>



<section class="relative w-[1440px] mx-auto">

    <!-- Background huge text layer -->
    <div class="absolute top-[48px] left-[115px] z-10 opacity-100">
        <?php get_template_part("svg/smoke_in_wings_svg"); ?>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 px-[125px] pt-[95px] w-full">

        <!-- heading -->
        <div class="heading flex items-center justify-center flex-col gap-4">

            <h2 class="text-[#16396F] -mt-[2.66px] text-center font-bebas-pro text-[60px] font-normal leading-[81px] tracking-[1.2px] uppercase">
                <?php echo wp_kses_post($title); ?>
            </h2>

            <p class="text-black font-jost text-[18px] font-normal leading-normal tracking-[0.36px] w-[740px] text-center">
                 <?php echo wp_kses_post($desc); ?>
            </p>
        </div>

        <!-- content section -->
        <div class="div flex flex-col gap-5">

            <!-- heading -->
            <div class="top pt-[60px] -ml-3 text-black font-jost text-[24px] font-normal leading-normal tracking-[0.48px] flex flex-col gap-1">
                <h3 class="pt-0.5">
                    <?php echo wp_kses_post(nl2br($rules_card_description))?>
               </h3>
            </div>

            <!-- card wrapper -->
            <div class="card-wrapper -ml-3 pt-10 grid grid-cols-2 gap-x-[46px] gap-y-8 items-center justify-center">
                <?php
                $rules = new WP_Query([
                    'post_type'      => 'post',
                    'posts_per_page' => 4,
                    'post_status'    => 'publish',
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                ]);

                if ($rules->have_posts()):
                    while ($rules->have_posts()): $rules->the_post(); ?>

                        <div class="w-[590.47px] h-[660.814px] flex-shrink-0 border-[1.08px] border-[#E7E7E7] bg-[rgba(255,228,213,0.40)] overflow-hidden">

                            <!-- Image -->
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                                    alt="<?php the_title_attribute(); ?>"
                                    class="w-[590.47px] h-[321.769px] flex-shrink-0 object-cover">
                            <?php else: ?>
                                <img src="placeholder.jpg"
                                    alt="No Image"
                                    class="w-[588.47px] h-[321.769px] flex-shrink-0 object-cover">
                            <?php endif; ?>

                            <!-- Content -->
                            <div class="pl-[32.73px] pr-[26.50px] pt-[35px] pb-[30px] flex flex-col gap-4">

                                <!-- Line with left and right text & icon -->
                                <div class="flex items-center justify-between">
                                    <?php $title = get_the_title(); ?>
                                    <?php if (!empty($title)): ?>
                                        <h2 class="text-black font-bebas text-[44px] font-normal leading-[52.8px] tracking-normal">
                                            <?php echo esc_html($title); ?>
                                        </h2>
                                    <?php endif; ?>
                                    <div class="flex gap-[14px] -mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                                            <g clip-path="url(#clip0_2012_6)">
                                                <path d="M12.4088 22.7743C18.7491 22.7743 23.9088 17.8389 23.9088 11.7743C23.9088 5.70964 18.7492 0.774292 12.4088 0.774292C6.06843 0.774292 0.908813 5.70964 0.908813 11.7743C0.908813 17.8389 6.06849 22.7743 12.4088 22.7743ZM12.4088 2.24093C17.9058 2.24093 22.3755 6.51625 22.3755 11.7743C22.3755 17.0323 17.9059 21.3077 12.4088 21.3077C6.91177 21.3077 2.44212 17.0323 2.44212 11.7743C2.44212 6.51625 6.91184 2.24093 12.4088 2.24093Z" fill="#F65600" />
                                                <path d="M15.7629 15.2796C15.9048 15.3896 16.0734 15.441 16.2421 15.441C16.4682 15.441 16.6906 15.3457 16.84 15.166C17.1046 14.8507 17.0509 14.3887 16.7212 14.1356L13.1754 11.4223V5.90764C13.1754 5.5043 12.8304 5.17432 12.4087 5.17432C11.9871 5.17432 11.6421 5.5043 11.6421 5.90764V11.7743C11.6421 11.998 11.7494 12.207 11.9296 12.3463L15.7629 15.2796Z" fill="#F65600" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2012_6">
                                                    <rect width="23" height="22" fill="white" transform="translate(0.908813 0.774292)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <!-- Judging text -->
                                        <?php $set_time_field = get_post_meta(get_the_ID(), '_set_time', true);  ?>
                                        <?php if (!empty($set_time_field)): ?>
                                            <p class="text-black font-bebas -mt-[1px] text-[21px] font-normal leading-[25.2px]">
                                                <?php echo esc_html($set_time_field); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Description -->
                         <h3 class="text-[#7C7C7C] pb-2 font-jost text-[20px] font-normal leading-[28px] not-italic w-[520.5px] break-words">
                         <?php echo wp_kses_post( the_content() ); ?>
                                 </h3>
                                  
                            <div class="w-[273px] h-[60px]">
                     <a href="<?php echo get_permalink(get_page_by_path('enter')); ?>">
                                <!-- Button -->
                          <button class=" bg-[#16396F] cursor-pointer  w-full h-full text-white font-bebas text-[24px] font-normal leading-[30.233px] px-[30.50px] py-[15.30px]">
                                    ENTER THE COMPETITION
                                </button>
                                 </a>
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

    </div>
</section>
