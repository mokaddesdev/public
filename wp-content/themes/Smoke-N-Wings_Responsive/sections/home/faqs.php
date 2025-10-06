  <?php
      // Hero image & button texts with default values
      $faq_image = get_theme_mod('faq_image', get_template_directory_uri() . '/assets/images/faqs.png');

      $faq_title = get_theme_mod('faqs_heading_title', 'Frequently <span class="text-[#F65600]"> Asked </span> Questions');
   ?>

<section class="w-full pt-3 px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%]">

<!-- max-w-1300px -->
 <div class="max-w-[1300px] mx-auto flex flex-col md:flex-row gap-[19.50px]">
  <!-- left image -->
  <div class="w-full md:w-1/2 relative">

    <div class="absolute w-full h-auto md:w-[344px] xl:w-[544px] xl:h-[495px] top-0 left-1 z-0">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" viewBox="0 0 544 495" fill="none">
        <path d="M448.5 495H0V0H543.5L448.5 495Z" fill="#591419" />
      </svg>

    </div>
    <!-- svg -->
    <div class="relative w-full md:w-[394px] xl:w-[574px] md:h-[360px] xl:h-[495px] top-0 -left-3 z-20">
      <!-- image -->
      <img src="<?php echo esc_url($faq_image); ?>"
        alt="<?php esc_attr(the_title()) ?>"
        class="w-full h-full object-cover z-20">
    </div>

  </div>

  <!-- right faqs -->
  <div class=" bg-white w-full md:w-1/2">

    <h2 class="home-heading text-right py-8">
      <?php echo wp_kses_post(nl2br($faq_title)); ?>
    </h2>

    <?php
    $faqs = new WP_Query(array(
      'post_type'      => 'faqs',
      'posts_per_page' => 4,
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
          <button class="faq-btn w-full flex justify-between items-center py-1.5 text-left text-black font-jost text-base xl:text-[19px] font-normal leading-normal tracking-[0.38px] focus:outline-none">

            <span><?php the_title(); ?></span>
            <span class="icon text-2xl text-gray-600">
              <?php if ($is_open): ?>
                <!-- minus icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="3" viewBox="0 0 13 3" fill="none">
                  <path d="M6 2.91155H5.03468H0V0.0144043H5.03468H5.5L7 0.014286L7.96532 0.0144043H13V2.91155H7.96532H7H6Z" fill="#591419" />
                </svg>
              <?php else: ?>
                <!-- plus icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                  <path d="M5.03468 13V7.91143H0V5.01429H5.03468V0H7.96532V5.01429H13V7.91143H7.96532V13H5.03468Z" fill="#591419" />
                </svg>
              <?php endif; ?>
            </span>
          </button>

          <div class="faq-content <?php echo $is_open ? '' : 'hidden'; ?> text-black font-jost text-[16px] font-normal leading-normal tracking-[0.32px] pb-4">
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