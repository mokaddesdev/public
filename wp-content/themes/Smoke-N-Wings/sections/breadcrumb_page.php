<?php
/*
Template Name: Tailwind Breadcrumb Page
*/
get_header(); 
?>

<section class="relative w-[1440px] h-[220px] mt-3 flex items-center justify-center bg-[#591419] flex-shrink-0 overflow-hidden">
    
    <!-- SVG Background -->
    <svg class="absolute top-0 right-0 h-full z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 322 220" fill="none">
        <path d="M0.012207 0.395004H322V219.09L0.012207 0.395004Z" fill="#F65600"/>
    </svg>

    <!-- Breadcrumb Content -->
    <div class="relative pt-6 z-10 text-center text-white flex flex-col items-center">
        <div class="font-bebas text-[24px] flex items-center gap-3 leading-[34px] ">
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
            <h2 class="pt-3 font-bebas text-[48px] uppercase tracking-[0.96px]"><?php echo esc_html($desc); ?></h2>
        <?php endif; ?>
    </div>
</section>

