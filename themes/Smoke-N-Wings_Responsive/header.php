<!DOCTYPE html>
<html style="scroll-behavior: smooth;" <?php language_attributes(); ?> class="no-js dark">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white m-0 p-0 dark:bg-[#1f1f1f]' ); ?>>

<?php wp_body_open(); ?>

<!-- Preloader -->
<div class="preloader bg-white fixed top-0 left-0 h-full w-full z-[20000] flex items-center justify-center bg-no-repeat bg-center"
     style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/loader.gif' ); ?>');">
</div>

<header id="main-header"
        class="relative w-full transition-all duration-500 ease-in-out bg-transparent px-[2.5%] md:px-[3%] lg:px-[4.5%] 2xl:px-[6.944%]
        <?php echo is_front_page() ? 'py-0' : 'py-1'; ?>">

    <div class="header-container mx-auto max-w-[1300px] flex items-center justify-between relative">

        <!-- Dark Mode Button -->
        <div class="fixed right-0 top-[50%] translate-y-[-50%] z-50 w-full flex justify-end px-[calc((100vw-1300px)/2+12px)]">
            <button id="theme-toggle"
                    class="px-3 py-3 rounded-full bg-gray-800 text-white dark:bg-[#e65314] transition-all duration-300">
            </button>
        </div>

        <!-- Logo -->
        <div class="logo w-[160px] h-[75px] lg:w-[210px] lg:h-[105px]">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
                <img
                    src="<?php echo esc_url(
                        get_theme_mod(
                            'header_logo',
                            get_template_directory_uri() . '/assets/images/logo.png'
                        )
                    ); ?>"
                    alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                    class="w-full h-full object-contain"
                >
            </a>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center gap-5 xl:gap-8" aria-label="Primary Menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'smokewings_header_menu',
                'container'      => false,
                'menu_class'     => 'pt-1.5 flex items-center gap-4 lg:gap-6 xl:gap-8 text-black dark:text-white menu-text',
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>

        <!-- Desktop Button -->
        <div class="hidden md:block pr-3.5">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'enter-competition' ) ) ); ?>"
               class="header-footer-btn">

                <span>
                    <?php echo esc_html(
                        get_theme_mod( 'header_button_text', 'Enter Competition' )
                    ); ?>
                </span>

            </a>
        </div>

        <!-- Mobile Toggle -->
        <button id="menuBtn" class="md:hidden z-30 cursor-pointer" aria-label="Open Menu">
            <?php get_template_part( 'svg/troggle_svg' ); ?>
        </button>

        <!-- Mobile Menu -->
        <nav id="navPhone"
             class="fixed top-0 right-0 h-full w-[260px] bg-white dark:bg-gray-800 shadow-lg transform translate-x-full transition-transform duration-500 z-40 flex flex-col p-4 gap-6"
             aria-label="Mobile Menu">

            <button id="menuClose" class="self-end cursor-pointer" aria-label="Close Menu">
                <?php get_template_part( 'svg/close_icon' ); ?>
            </button>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'smokewings_header_menu',
                'container'      => false,
                'menu_class'     => 'menu-text text-black dark:text-white flex flex-col gap-3',
                'fallback_cb'    => false,
            ) );
            ?>

            <!-- Mobile Button -->
            <div class="button pr-3.5">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'enter-competition' ) ) ); ?>"
                   class="header-footer-btn">

                    <span>
                        <?php echo esc_html(
                            get_theme_mod( 'header_button_text', 'Enter Competition' )
                        ); ?>
                    </span>

                </a>
            </div>

        </nav>

    </div>

</header>

<main>