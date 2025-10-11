<?php
/*
Template Name: Tailwind Breadcrumb Page
*/
get_header(); 
?>

<section class="relative max-w-[1440px] mx-auto w-full h-[100px] md:h-[220px] mt-1 sm:mt-2 md:mt-3 flex items-center justify-center bg-[#591419] flex-shrink-0 overflow-hidden">
    
    <!-- SVG Background -->
    <svg class="absolute top-0 right-0 w-36 max-w-80 h-auto z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 322 220" fill="none">
        <path d="M0.012207 0.395004H322V219.09L0.012207 0.395004Z" fill="#F65600"/>
    </svg>

    <!-- Breadcrumb Content -->
    <div class="relative pt-3 md:pt-6 z-10 text-center text-white flex flex-col items-center">
        <div class="font-bebas text-[18px] sm:text-[20px] md:text-[24px] flex items-center gap-3 leading-[34px] ">
            <a href="<?php echo home_url(); ?>" class="text-white hover:underline">Home </a>
            <div class="w-[1px] h-[17.076px] bg-white"></div> 
            <?php the_title(); ?>
        </div>

        <?php
        // Page-specific default descriptions
        $defaults = array(
            'page-contact-us' => 'Contact Us',
            'page-enter' => 'Enter Competition',
            'page-bingham-mayors-scholarship' => 'BINGHAM MAYORS SCHOLORSHIP',
            'page-kids-q' => 'The Kid’s Q divisions',
            'page-sponsors' => 'Our sponsors partner',
            'page-rules' => 'The Gaming rules',
        );

        // Check if excerpt exists
        if ( get_the_excerpt() ) {
            $desc = get_the_excerpt();
        } else {
            $slug = 'page-' . get_post_field( 'post_name', get_post() ); 
            $desc = isset($defaults[$slug]) ? $defaults[$slug] : '';
        }
        ?>

        <?php if( $desc ): ?>
            <h2 class=" pt-0 md:pt-3 font-bebas text-[26px] sm:text-[34px] md:text-[48px] uppercase md:tracking-[0.96px]"><?php echo esc_html($desc); ?></h2>
        <?php endif; ?>
    </div>
</section>

