  <?php
      // Hero image & button texts with default values
      $faq_image = get_theme_mod('faq_image', get_template_directory_uri() . '/assets/images/faqs.png');

      $faq_title = get_theme_mod('faqs_heading_title', 'Frequently <span class="text-[#F65600]"> Asked </span> Questions');
   ?>

<section class="w-[1440px] pt-3 flex gap-[19.50px] px-[125px]">
  <!-- left image -->
  <div class="w-[626px] relative">
    <div class="absolute top-0 left-1 z-0">
      <svg xmlns="http://www.w3.org/2000/svg" width="544" height="495" viewBox="0 0 544 495" fill="none">
        <path d="M448.5 495H0V0H543.5L448.5 495Z" fill="#591419" />
      </svg>

    </div>
    <!-- svg -->
    <div class="relative top-0 -left-3 z-20">
      <!-- image -->
      <img src="<?php echo esc_url($faq_image); ?>"
        alt="<?php esc_attr(the_title()) ?>"
        class="w-[574px] h-[495px] object-cover z-20">
    </div>

  </div>

  <!-- right faqs -->
  <div class=" bg-white w-[626px]">

    <h2 class="text-[#16396F] text-right font-bebas-pro text-[78px] font-bold leading-[81px] tracking-[1.56px] uppercase py-8">
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
          <button class="faq-btn w-full flex justify-between items-center py-1.5 text-left text-black font-jost text-[19px] font-normal leading-normal tracking-[0.38px] focus:outline-none">

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
</section>