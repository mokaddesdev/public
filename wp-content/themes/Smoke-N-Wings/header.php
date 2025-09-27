<!DOCTYPE html>
<html style="scroll-behavior: smooth;" <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="m-0 p-0 bg-[#FFFFFF]">

<header class="w-[1440px]">
    <div class="container mx-auto py-1.5 px-[100px] flex items-center justify-between">

    <!-- logo -->
    <div class="logo">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="" class="">
    </div>
    

               <nav class="flex items-center gap-8">
                <?php
                wp_nav_menu([
                    'theme_location' => 'smokeWings_header_menu',
                    'container' => false,
                    'menu_class' => 'flex items-center gap-6',
                    'fallback_cb' => false,
                ]);
                ?>
            </nav>
        </div>
</header>

<main>