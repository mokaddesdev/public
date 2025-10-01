<!DOCTYPE html>
<html style="scroll-behavior: smooth;" <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="m-0 p-0 bg-[#FFFFFF]">

<header class="w-[1440px] mx-auto <?php echo is_front_page() ? 'py-0' : 'py-1'; ?> px-[100px] flex items-center justify-between">

    <!-- logo -->
    <div class="logo">
        <a href="<?php echo home_url(); ?>" class="text-white hover:underline">
            <img 
                src="<?php echo esc_url( get_theme_mod(
                    'header_logo',
                    get_template_directory_uri() . '/assets/images/logo.png' 
                ) ); ?>" 
                alt="<?php bloginfo('name'); ?>" 
            >
        </a>
    </div>

    <nav class="flex items-center gap-8">
        <?php
        wp_nav_menu([
            'theme_location' => 'smokeWings_header_menu',
            'container'      => false,
            'menu_class'     => 'pt-1.5 flex items-center gap-[31px] text-black font-bebas-pro font-extrabold text-[20px] leading-[1] tracking-[0.4px] uppercase',
            'fallback_cb'    => false,
        ]);
        ?>
    </nav>

    <div class="button pr-3.5">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('enter') ) ); ?>" 
           class="inline-block w-[196px] h-[45px] flex-shrink-0 bg-[#F65600] text-white 
                  font-bebas-pro font-extrabold text-[20px] leading-[1] tracking-[0.4px] uppercase 
                  py-[13.99px] px-[24px] text-center">

            <?php echo esc_html( get_theme_mod(
                'header_button_text',
                'Enter Competition' 
            ) ); ?>
        </a>
    </div>

</header>

<main>