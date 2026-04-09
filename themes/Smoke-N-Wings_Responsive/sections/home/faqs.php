    <?php
    // Hero image & button texts with default values
    $faq_image = get_theme_mod('faq_image', get_template_directory_uri() . '/assets/images/faqs.png');

    $faq_title = get_theme_mod('faqs_heading_title', 'Frequently <span class="text-[#F65600]"> Asked </span> Questions');
    ?>


  <section class="w-full pt-3 px-[2.5%] py-5 md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%]">

    <!-- max-w-1300px -->
    <div class="max-w-[1300px] mx-auto flex flex-col items-center lg:items-start lg:flex-row gap-[19.50px]">

      <!-- left image -->
      <div class="w-full md:w-1/2 relative">
        <!-- background SVG shape -->
        <div class="faqs-image-left-svg"
          style="clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);">
        </div>
        <div class="faqs-image-right">
          <img src="<?php echo esc_url($faq_image); ?>"
            alt="<?php esc_attr(the_title()) ?>"
            class="w-full h-full object-cover">
        </div>

      </div>

      <!-- right faqs -->
      <div class=" bg-white dark:bg-[#1f1f1f] w-full md:w-1/2">

        <h2 class="home-heading text-center md:text-right py-8">
          <?php echo wp_kses_post(nl2br($faq_title)); ?>
        </h2>

        <?php
        $faqs = new WP_Query(array(
          'post_type'      => 'faqs',
          'posts_per_page' => 5,
          'post_status'    => 'publish',
          'orderby' => 'date',
          'order' => 'DESC',
        ));

        if ($faqs->have_posts()):
          $count = 0;
          while ($faqs->have_posts()): $faqs->the_post();
            $count++;

            $is_open = ($count === 2);
            $extra_border = ($count === 1) ? 'border-t' : '';
        ?>
            <div class="faq-item border-b <?php echo $extra_border; ?> border-[#F8B895] pl-8 pr-6">
              <button class="faq-btn w-full flex justify-between items-center py-1.5 text-left text-black dark:text-white font-jost text-base xl:text-[19px] font-normal leading-normal tracking-[0.38px] focus:outline-none">

                <span><?php the_title(); ?></span>
                <span class="icon text-2xl text-gray-600">
                  <?php if ($is_open) {
                    get_template_part("svg/minus_icon");
                  } else {
                    get_template_part("svg/plus_icon");
                  }

                  ?>

                </span>
              </button>

              <div class="faq-content <?php echo $is_open ? '' : 'hidden'; ?> text-black dark:text-white font-jost text-[16px] font-normal leading-normal tracking-[0.32px] pb-4">
                <?php the_content(); ?>
              </div>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        else:
          echo '<p class="text-center text-gray-500">No FAQs found.</p>';
        endif;
        ?>
      </div>
    </div>
  </section>