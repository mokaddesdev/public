<?php 
$title   = get_theme_mod(
    'contestant_responsibility_title',
    'contestant\'s <span class="text-[#F65600]">responsibility</span>'
);

$desc    = get_theme_mod(
    'contestant_responsibility_description',
    'Neither the City of Blackfoot, McCarley Field nor the event organizers will be responsible for any injury, loss or damage that may occur to the contestants or the contestant’s property from any cause whatsoever. It is the contestant’s responsibility to protect equipment and space so that no injury will result to the public, visitors, guests or persons or property.Cancellation and Refunds – A team may cancel up to 1 month (May 28 th ) prior to the event with full refund of site fee. Cancellations after May 28 th fill forfeit fees paid.'
);

$image   = get_theme_mod(
    'contestant_responsibility_image',
    get_template_directory_uri() . '/assets/images/rule4.png'
);
?>


<section class="w-full pt-7 -mb-5 px-[2.5%] md:px-[4.5%] lg:px-[7%] xl:px-[7.291%]">

<!-- container -->
 <div class="flex flex-col lg:flex-row gap-[20px] w-full max-w-[1300px]">

  <!-- left image -->
  <div class="w-[562.293px] ml-[2.50px] relative">
    <div class="absolute top-0 -left-1 z-0">
       <svg xmlns="http://www.w3.org/2000/svg" width="563" height="464" viewBox="0 0 563 464" fill="none">
      <path d="M464.008 463.427H0V-6.10352e-05H562.293L464.008 463.427Z" fill="#591419"/>
     </svg>
    </div>

    <!-- image -->
    <div class="relative -top-3 -left-1 -mr-3 z-20">
      <img src="<?php echo esc_url($image); ?>"
     alt="<?php echo esc_attr(strip_tags($title)); ?>"
     class="w-[564.293px] h-[492.188px] object-cover z-20">
    </div>
  </div>

  <!-- right side text -->
  <div class="relative about-left py-7 pl-8 w-[600px] flex flex-col gap-[38px]">

    <!-- heading one line -->
    <h2 class="body-heading whitespace-nowrap">
        <?php echo wp_kses_post($title);?>
    </h2>

    <!-- paragraph -->
    <p class="w-[570px] body-text">
      <?php echo wp_kses_post($desc);?>
    </p>

  </div>
  </div>
</section>
