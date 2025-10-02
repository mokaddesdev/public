<!DOCTYPE html>
<html style="scroll-behavior: smooth;" <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="m-0 p-0 bg-[#FFFFFF]">

<header class="w-full px-[2.5%] md:px-[3%] lg:px-[4.5%] 2xl:px-[6.944%] mx-auto <?php echo is_front_page() ? 'py-0' : 'py-1'; ?>">
<!-- header-container -->
<div class="header-container mx-auto max-w-[1300px] flex items-center justify-between relative">

    <!-- logo -->
    <div class="logo w-[160px] h-[75px] sm:w-[150px] sm:h-[75px] lg:w-[210px] lg:h-[105px]">
        <a href="<?php echo home_url(); ?>" class="text-white hover:underline">
            <img 
                src="<?php echo esc_url( get_theme_mod(
                    'header_logo',
                    get_template_directory_uri() . '/assets/images/logo.png' 
                ) ); ?>" 
                alt="<?php bloginfo('name'); ?>" 
                class="w-full h-full object-contain"
            >
        </a>
    </div>

    <!-- menu for desktop -->
    <nav class="flex items-center gap-4 xl:gap-8 hidden md:flex">
        <?php
        wp_nav_menu([
            'theme_location' => 'smokeWings_header_menu',
            'container'      => false,
            'menu_class'     => 'pt-1.5 flex items-center gap-3 lg:gap-6 xl:gap-[31px] text-black font-bebas-pro font-extrabold text-base lg:text-[18px] xl:text-[20px] leading-[1] tracking-[0.4px] uppercase',
            'fallback_cb'    => false,
        ]);
        ?>
    </nav>

     <!-- desktop button -->
    <div class="button pr-3.5 hidden md:block">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('enter') ) ); ?>" 
           class="w-[150px] lg:w-[186px] xl:w-[196px] h-[45px] bg-[#F65600] text-white font-bebas-pro font-extrabold text-base xl:text-[20px] uppercase flex items-center justify-center">
            <?php echo esc_html( get_theme_mod(
                'header_button_text',
                'Enter Competition' 
            ) ); ?>
        </a>
    </div>

    <!-- mobile toggle button -->
    <div id="menuBtn" class="md:hidden z-30 cursor-pointer">
        <?php get_template_part('svg/troggle_svg'); ?>
    </div>

    <!-- mobile menu -->
    <nav id="navPhone" class="fixed top-0 right-0 h-full px-[7.5%] bg-white shadow-lg transform translate-x-full transition-transform duration-500 ease-in-out z-40 flex flex-col p-4 gap-6">
        <div id="menuClose" class="self-end cursor-pointer">
            <?php get_template_part('svg/close_icon'); ?>
        </div>

        <?php
        wp_nav_menu([
            'theme_location' => 'smokeWings_header_menu',
            'container'      => false,
            'menu_class'     => 'flex flex-col items-start gap-3 text-black font-bebas-pro font-extrabold text-[18px] leading-[1] tracking-[0.4px] uppercase',
            'fallback_cb'    => false,
        ]);
        ?>

         <!-- mobile button -->
    <div class="button pr-3.5">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('enter') ) ); ?>" 
           class="w-[146px] h-[45px] bg-[#F65600] text-white font-bebas-pro font-extrabold text-[18px] uppercase flex items-center justify-center">
            <?php echo esc_html( get_theme_mod(
                'header_button_text',
                'Enter Competition' 
            ) ); ?>
        </a>
    </div>
    </nav>

</div>

</header>

<main>