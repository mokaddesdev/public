<?php
/**
 * FAQ Section Template Part
 *
 * @package smokewings
 */

$default_image = THEME_DIR_URI . '/assets/images/faqs-left.png';

$faq_image = get_theme_mod( 'faq_image', $default_image );

$faq_title  = get_theme_mod(
    'faqs_heading_title',
    'Frequently <span class="text-[#F65600]">Asked</span> Questions'
);
?>

<section class="w-full py-6 px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%]">

    <div class="max-w-[1300px] mx-auto flex flex-col md:flex-row items-center lg:items-center gap-5">

        <!-- LEFT IMAGE -->
        <div class="w-full md:w-1/2 relative overflow-hidden rounded-lg">

            <?php if ( ! empty( $faq_image ) ) : ?>
                <img 
                    src="<?php echo esc_url( $faq_image ); ?>" 
                    alt="<?php echo esc_attr( wp_strip_all_tags( $faq_title ) ); ?>" 
                    class="w-full h-full object-cover"
                >
            <?php endif; ?>

            <div class="absolute inset-0 bg-white/10"></div>

        </div>

        <!-- RIGHT CONTENT -->
        <div class="w-full md:w-1/2 bg-white dark:bg-[#1f1f1f]">

            <?php if ( ! empty( $faq_title ) ) : ?>
                <h2 class="home-heading text-center md:text-right py-6">
                    <?php echo wp_kses_post( $faq_title ); ?>
                </h2>
            <?php endif; ?>

            <?php
            $faq_query = new WP_Query(
                array(
                    'post_type'      => 'faqs',
                    'posts_per_page' => 5,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'no_found_rows'  => true,
                )
            );

            if ( $faq_query->have_posts() ) :

                $index = 0;

                while ( $faq_query->have_posts() ) :
                    $faq_query->the_post();
                    $index++;

                    $is_open   = ( 2 === $index );
                    $border_top = ( 1 === $index ) ? 'border-t' : '';
                    ?>

                    <div class="faq-item border-b <?php echo esc_attr( $border_top ); ?> border-[#F8B895] pl-6 pr-4">

                        <!-- BUTTON -->
                        <button
                            class="faq-btn w-full flex justify-between items-center py-3 text-left text-black dark:text-white font-jost text-base xl:text-lg tracking-wide focus:outline-none"
                            aria-expanded="<?php echo esc_attr( $is_open ? 'true' : 'false' ); ?>"
                        >

                            <span>
                                <?php echo esc_html( get_the_title() ); ?>
                            </span>

                            <span class="icon text-xl text-gray-600">
                                <?php
                                get_template_part(
                                    'svg/' . ( $is_open ? 'minus_icon' : 'plus_icon' )
                                );
                                ?>
                            </span>

                        </button>

                        <!-- CONTENT -->
                        <div class="faq-content <?php echo $is_open ? '' : 'hidden'; ?> pb-4 text-black dark:text-white text-base leading-relaxed">

                            <?php echo wp_kses_post( get_the_content() ); ?>

                        </div>

                    </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <p class="text-center text-gray-500">
                    <?php esc_html_e( 'No FAQs found.', 'smokewings' ); ?>
                </p>

            <?php endif; ?>

        </div>
    </div>
</section>