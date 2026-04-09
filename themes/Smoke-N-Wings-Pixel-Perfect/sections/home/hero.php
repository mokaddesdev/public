<?php 
// Hero image & button texts with default values
$hero_image = get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/hero.png');
$hero_button_text_left = get_theme_mod('hero_button_text_left', 'Enter competition');
$hero_button_text_right = get_theme_mod('hero_button_text_right', 'Check Out The Rules');
?>

<section class="relative w-[1440px] h-[601px] overflow-hidden">
    <!-- Background color layer -->
    <div class="absolute inset-0 bg-[#F8B895] opacity-[0.75] z-0"></div>

    <!-- Background huge text layer -->
    <div class="absolute inset-0 flex flex-col gap-0 justify-between items-center z-10 opacity-100">
        <h1 class="text-[247px] font-bebas-pro font-extrabold uppercase leading-[0.85] text-[rgba(248,184,149,0.45)] text-center max-w-[1269px]">
            Smoke-N-Wings
        </h1>
        <h1 class="text-[247px] font-bebas-pro font-extrabold uppercase leading-[0.65] text-[rgba(248,184,149,0.45)] text-center max-w-[1269px]">
            Idaho State bbq
        </h1>
        <h1 class="text-[311px] font-bebas-pro font-extrabold uppercase leading-[0.85] text-[rgba(248,184,149,0.45)] text-center max-w-[1269px]">
            Competition
        </h1>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 flex">
        <!-- Left button -->
          <a href="<?php
            $enter_page = get_page_by_path('enter');
                if ($enter_page) {
                    $enter_link = get_permalink($enter_page);
                } else {
                    $enter_link = '#';
                }
                echo $enter_link;
                ?>">
            <div class="absolute top-[337px] left-0 transform translate-x-0 text-center z-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="514" height="88" viewBox="0 0 514 88" fill="none" class="mx-auto">
                    <path d="M0 0H514L490.703 88H0V0Z" fill="#F65600"/>
                </svg>
                <p class="absolute inset-0 flex pt-2.5 items-center justify-center heading-text">
                    <?php echo esc_html($hero_button_text_left); ?>
                </p>
            </div>
        </a>

        <!-- Right button -->
        <a href="<?php echo get_permalink(get_page_by_path('rules')); ?>">
            <div class="absolute top-[337px] right-0 transform text-center z-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="514" height="88" viewBox="0 0 514 88" fill="none">
                    <path d="M514 88H0L23.2974 0H514V88Z" fill="#591419"/>
                </svg>
                <p class="absolute inset-0 flex pt-2.5 pl-7 items-center justify-center heading-text">
                    <?php echo esc_html($hero_button_text_right); ?>
                </p>
            </div>
        </a>

        <!-- Hero Image -->
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 text-center z-10">
            <img src="<?php echo esc_url($hero_image); ?>" alt="hero image" class="object-contain">
        </div>
    </div>
</section>
