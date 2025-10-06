<?php
// Get customizer values with default fallback
$about_title = get_theme_mod(
    'about_title',
    'Join us for the <span class="text-[#F65600]"> 2025 Smoke-N-Wings </span> BBQ Competition!'
);

$about_description = get_theme_mod(
    'about_description',
    'Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket. The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.'
);

$about_button_text = get_theme_mod('about_button_text', 'Enter the competition');

$about_left_image = get_theme_mod(
    'about_left_image',
    get_template_directory_uri() . '/assets/images/about.png'
);
?>

<section class="relative w-full mx-auto px-[3%] md:px-[5%] lg:px-[7%] xl:px-[8.5%] pt-10 sm:pt-14 md:pt-20 lg:pt-[90px] pb-10 overflow-hidden">

  <!-- Background Huge SVG Text -->
  <div class="absolute top-6 left-1/2 -translate-x-1/2 md:translate-x-0 md:left-[3%] xl:left-[2%] opacity-15 md:opacity-25 z-0">
    <?php get_template_part("svg/smoke_in_wings_svg"); ?>
  </div>

  <!-- Content Wrapper -->
  <div class="relative z-10 max-w-[1300px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">

    <!-- Left Side: Text -->
    <div class="flex flex-col items-center md:items-start gap-6 text-center md:text-left">
      <?php if (!empty($about_title)): ?>
      <h2 class="text-[28px] sm:text-[34px] md:text-[42px] lg:text-[48px] font-bebas-pro font-bold leading-snug max-w-[550px]">
        <?php echo wp_kses_post($about_title); ?>
      </h2>
      <?php endif; ?>

      <?php if (!empty($about_description)): ?>
      <p class="text-black font-jost text-[17px] sm:text-[18px] leading-relaxed max-w-[550px] mx-auto md:mx-0">
        <?php echo wp_kses_post(nl2br($about_description)); ?>
      </p>
      <?php endif; ?>
    </div>

    <!-- Right Side: Image & Shape -->
    <div class="relative w-full flex justify-center md:justify-end">
      <div class="relative w-full max-w-[600px]">

        <!-- Background Shape -->
        <div class="absolute inset-0 bg-[#591419] clip-path-custom hidden sm:block"></div>

        <?php if (!empty($about_left_image)): ?>
        <img 
          src="<?php echo esc_url($about_left_image); ?>"
          alt="about image"
          class="relative w-full h-auto object-cover z-10 rounded-none md:rounded-lg"
        >
        <?php endif; ?>

        <!-- Bottom Button Shape -->
        <a 
          href="<?php
            $enter_page = get_page_by_path('enter');
            echo $enter_page ? get_permalink($enter_page) : '#';
          ?>" 
          class="block absolute bottom-0 left-0 w-full"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 594 89" class="w-full h-auto">
            <path d="M593.5 89H0L17.6895 0H593.5V89Z" fill="#16396F"/>
          </svg>

          <?php if (!empty($about_button_text)): ?>
          <p class="absolute inset-0 flex items-center justify-center text-white font-bebas-pro text-[28px] sm:text-[36px] md:text-[44px] lg:text-[50px] font-bold uppercase tracking-wide">
            <?php echo esc_html($about_button_text); ?>
          </p>
          <?php endif; ?>
        </a>
      </div>
    </div>

  </div>
</section>

<style>
@layer utilities {
  .clip-path-custom {
    clip-path: polygon(0 0, 100% 0%, 100% 98%, 28% 100%);
  }
}
</style>
