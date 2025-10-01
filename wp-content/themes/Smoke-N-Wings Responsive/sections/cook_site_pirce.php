
<section class="pt-[46.60px] mb-0.5 pb-6 w-[1440px] px-[126px] flex flex-col gap-[49px]">
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
        <article class="w-[1176px] h-[317px] flex flex-shrink-0 border border-[#E7E7E7] bg-white">
            <!-- left image -->
             <?php 
             if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium', array(
                    'class' => 'w-[545px] h-[317px] flex-shrink-0 object-cover',
                    'alt'   => esc_attr( get_the_title() ),
                ) );
            }
            ?>

  <!-- Right Content -->
  <div class="flex flex-col justify-between pl-12 pr-14 pt-10 pb-12 w-full">
    <!-- 1️First Row: Title & Price -->
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
    <h3 class="text-[#7C7C7C] font-jost text-[18px] font-normal leading-[120%] not-italic -pt-1 w-[470px]">
      <?php echo esc_html( the_content()); ?> 
    </h3>

    <!-- Button -->
    <button
      class="mt-6 flex justify-center items-center w-[273px] h-[60px] px-[30.233px] py-[15.117px] gap-[7.558px] flex-shrink-0 border-[1.08px] border-[#16396F] bg-[#16396F] text-white font-bebas text-[24px] font-normal leading-[30.233px] not-italic">
      <?php echo __("Buy now", "smokeWings");?>
    </button>
  </div>
</article>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;
?>
</section>
