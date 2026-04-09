<?php 
$title = get_theme_mod('competition_rules_title', 'SMOKE-N-WINGS <span class="text-[#F65600]">2024</span> RULES');
$desc = get_theme_mod('competition_rules_description', 'As a KCBS sanctioned Master Series Contest, all KCBS rules will be followed. The event and the judging will be overseen by the KCBS Contest Representatives assigned to the event. Their decisions and interpretations are final.');
$rules_card_description = get_theme_mod('rules_card_description', 'As a Master Series Contest, teams will cook four meats: The Four KCBS Meat Categories are:');
?>

<section class="relative w-full mx-auto px-[3%] md:px-[5%] lg:px-[7.5%] xl:px-[8.68%] py-12 md:py-16 xl:py-[95px]">

  <!-- Background huge text layer -->
   <div class="absolute top-4 sm:top-5 md:top-6 left-1/2 -translate-x-1/2 md:left-[5%] lg:left-[7.5%] xl:left-[8.68%] md:translate-x-0 md:right-auto transition-all duration-300 z-10 opacity-100 w-[300px] sm:w-[350px] md:w-[400px] lg:w-[450px] h-auto xl:w-[530px] 2xl:w-[580px]">
        <?php get_template_part("svg/smoke_in_wings_svg"); ?>
    </div>

  <!-- Foreground content layer -->
  <div class="relative pt-3 z-20 w-full max-w-[1300px] mx-auto">

    <!-- heading -->
    <div class="flex flex-col items-center md:items-start text-center md:text-left gap-4 px-4">
      <h2 class="body-heading"><?php echo wp_kses_post($title); ?></h2>
      <p class="body-text max-w-[740px] text-[#555]"><?php echo wp_kses_post($desc); ?></p>
    </div>

    <!-- content section -->
    <div class="flex flex-col gap-6 mt-10 md:mt-14">

      <!-- heading -->
      <div class="text-black font-jost text-[18px] sm:text-[20px] md:text-[22px] lg:text-[24px] leading-7 sm:leading-12 lg:leading-normal tracking-[0.48px] text-center md:text-left">
        <h3><?php echo wp_kses_post(nl2br($rules_card_description)) ?></h3>
      </div>

      <!-- card wrapper -->
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-6 xl:gap-x-[46px] xl:gap-y-10 justify-items-center">

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

          <!-- single card -->
          <div class="w-full sm:w-[95%] md:w-[100%] 2xl:w-[588px] h-auto flex flex-col border border-[#E7E7E7] bg-[rgba(255,228,213,0.40)] rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">

            <!-- Image -->
            <?php if (has_post_thumbnail()): ?>
              <img 
                src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" 
                alt="<?php the_title_attribute(); ?>"
                class="w-full h-[260px] sm:h-[280px] md:h-[320px] object-cover"
              />
            <?php endif; ?>

            <!-- Content -->
            <div class="flex flex-col justify-between h-full py-6 md:py-8">

              <!-- Title & Time -->
              <div>
                <div class="px-1 sm:px-6 md:px-1.5 lg:px-6 flex flex-row md:flex-wrap items-center justify-between gap-2.5">
                  <h2 class="text-black font-bebas text-[26px] sm:text-[36px] md:text-[30px] lg:text-[38px] xl:text-[44px] font-normal leading-[1.2] tracking-tight">
                    <?php the_title(); ?>
                  </h2>
                  <div class="flex items-center gap-2">
                    <?php get_template_part('svg/clock_icon'); ?>
                    <?php $set_time_field = get_post_meta(get_the_ID(), '_set_time', true); ?>
                    <?php if (!empty($set_time_field)): ?>
                      <p class="text-black font-bebas text-[18px] sm:text-[20px] md:text-[18px] lg:text-[20px] leading-[1.2]"><?php echo esc_html($set_time_field); ?></p>
                    <?php endif; ?>
                  </div>
                </div>

                <!-- Description -->
                <p class="text-[#7C7C7C] mt-3 px-6 mx-auto font-jost text-[16px] sm:text-[18px] leading-[28px] line-clamp-4">
                  <?php echo wp_kses_post(get_the_excerpt()); ?>
                </p>
              </div>

              <!-- Button -->
              <div class="mt-3 md:mt-6 px-6 mx-auto">
                <a href="<?php echo get_permalink(get_page_by_path('enter')); ?>" class="blue-btn w-full sm:w-[270px] h-[56px] flex items-center justify-center text-[18px] font-bebas tracking-wide uppercase">
                  <span>
                     <?php echo esc_html_e('ENTER THE COMPETITION', 'smokeWings') ?>
                  </span>
                 
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
