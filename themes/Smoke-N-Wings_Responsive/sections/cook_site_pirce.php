
<section class=" pt-8 xl:pt-[46.60px] mb-0.5 pb-6 w-full px-[2.5%] md:px-[3.5%] lg:px-[7.5%] 2xl:px-[8.68%]">

  <div class="container mx-auto max-w-[1300px] flex flex-col gap-6 md:gap-7 xl:gap-[49px]">

    <?php
    /**
     * Proper & clean loop for 
     */

    $args = array(
        'post_type'      => 'cook_site',  
        'posts_per_page' => 3,   
        'status' => 'publish',        
        'orderby' => 'date',
        'order' => 'DESC',    
    );

    $hav_query = new WP_Query( $args );

    if ( $hav_query->have_posts() ) :
        while ( $hav_query->have_posts() ) :
           $hav_query->the_post();
         ?>

        <article class="w-full xl:max-w-[1176px] xl:max-h-[317px] flex flex-col items-center md:flex-row flex-shrink-0 border border-[#E7E7E7] bg-white dark:bg-gray-400">

            <!-- left image -->
             <?php 
             if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium', array(
                    'class' => 'w-full md:w-[50%] 2xl:w-[545px] h-auto md:h-[317px] flex-shrink-0 object-cover',
                    'alt'   => esc_attr( get_the_title() ),
                ) );
            }
            ?>

  <!-- Right Content -->
  <div class="flex flex-col justify-between pl-12 pr-14 pt-10 pb-12 w-full md:w-[50%]">
    <!-- First Row: Title & Price -->
    <div class="flex justify-between items-start -mt-0.5">
      <h2 class="text-black pt-2 font-bebas text-[34px] font-normal leading-[120%] not-italic">
        <?php echo esc_html( get_the_title() ); ?> 
      </h2>
      <?php $price = get_post_meta( get_the_ID(), '_price', true );
            if ( ! empty( $price ) ) :?>
      <p class="text-[#16396F] text-right pl-1 pt-[1px] font-bebas text-[44px] font-normal leading-[120%] not-italic">
            $<?php echo esc_html( $price ); ?>
      </p>
        <?php endif;?>
    </div>

    <!--Second Row: Description -->
    <h3 class="text-[#7C7C7C] dark:text-white font-jost text-[18px] font-normal leading-[120%] not-italic -pt-1 w-full xl:w-[470px]">
      <?php echo esc_html( the_content()); ?> 
    </h3>

    <!-- Button -->
    <a
      class="blue-btn mt-6 ">
      <span>
          <?php echo esc_html_e("Buy now", "smokeWings");?>
      </span>
      
    </a>
  </div>
</article>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;
?>
</div>
</section>
