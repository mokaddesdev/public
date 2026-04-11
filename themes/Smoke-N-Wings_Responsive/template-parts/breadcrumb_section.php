<?php
/**
 * Template Name: Breadcrumb Section
 * 
 * @package smokewings
 */

$title = get_the_title();
$desc  = get_the_excerpt();
?>

<section class="relative max-w-[1440px] mx-auto w-full h-[100px] md:h-[220px] mt-1 sm:mt-2 md:mt-3 flex items-center justify-center overflow-hidden bg-[url('./assets/images/hero/img/hero.jpg')]">

    <div class="relative pt-3 md:pt-6 z-10 text-center text-white flex flex-col items-center">

        <div class="font-bebas text-[18px] sm:text-[20px] md:text-[24px] flex items-center gap-3 leading-[34px]">

            <a href="<?php echo esc_url( home_url() ); ?>" class="text-white hover:underline">
                <?php esc_html_e( 'Home', 'smokewings' ); ?>
            </a>

            <div class="w-[1px] h-[17.076px] bg-white"></div>

            <?php if ( ! empty( $title ) ) : ?>
                <p><?php echo esc_html( $title ); ?></p>
            <?php endif; ?>

        </div>

        <?php if ( ! empty( $desc ) ) : ?>
            <p class="pt-0 md:pt-3 font-bebas text-[26px] sm:text-[34px] md:text-[48px] uppercase md:tracking-[0.96px]">
                <?php echo esc_html( $desc ); ?>
            </p>
        <?php endif; ?>

    </div>

</section>