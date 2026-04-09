jQuery(document).ready(function($){
  
    /*----- menu icon toggle -----*/
   $("#menuBtn").click(function(){
        $("#navPhone").removeClass("translate-x-full").addClass("translate-x-0");
    });

    $("#menuClose").click(function(){
        $("#navPhone").removeClass("translate-x-0").addClass("translate-x-full");
    });

   $('.best-bbq-post-gallery').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        pauseOnHover: false,
        infinite: true,
        speed: 700,
        arrows: false,
        cssEase: 'linear',
        responsive: [
            { breakpoint: 640, settings: { slidesToShow: 1 } },   
            { breakpoint: 768, settings: { slidesToShow: 2 } },   
            { breakpoint: 1024, settings: { slidesToShow: 3 } },  
            { breakpoint: 1280, settings: { slidesToShow: 4 } },  
            { breakpoint: 1536, settings: { slidesToShow: 4 } }  
        ]
    });

    $('#best-bbq-prev').click(function() { 
        $('.best-bbq-post-gallery').slick('slickPrev'); 
    });
    $('#best-bbq-next').click(function() { 
        $('.best-bbq-post-gallery').slick('slickNext'); 
    });


 


  $(".faq-btn").click(function(){
    const content = $(this).next(".faq-content");


    $(".faq-content").not(content).slideUp(300);
    
    $(".faq-btn .icon").not($(this).find(".icon")).html(`
      <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
        <path d="M5.03468 13V7.91143H0V5.01429H5.03468V0H7.96532V5.01429H13V7.91143H7.96532V13H5.03468Z" fill="#591419"/>
      </svg>`);

    if(content.is(":visible")){
      content.slideUp(300);
      $(this).find(".icon").html(`
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
          <path d="M5.03468 13V7.91143H0V5.01429H5.03468V0H7.96532V5.01429H13V7.91143H7.96532V13H5.03468Z" fill="#591419"/>
        </svg>`);
    } else {
      content.slideDown(300);
      $(this).find(".icon").html(`
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="3" viewBox="0 0 13 3" fill="none">
          <path d="M6 2.91155H5.03468H0V0.0144043H5.03468H5.5L7 0.014286L7.96532 0.0144043H13V2.91155H7.96532H7H6Z" fill="#591419"/>
        </svg>`);
    }
  });

  console.log("Best Check");

  // handle troggle button

  const $tgBtn = $("#theme-toggle");
  const $header = $("#main-header");

  const $darksvg = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
</svg>`;

const $lightSvg = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
</svg>`


  if( 
    localStorage.getItem("theme") === "dark"
  ){
    $tgBtn.html($lightSvg);
    $("html").addClass("dark");
  } else{
     $("html").removeClass("dark");
     $tgBtn.html($darksvg);
  };

  // Troggle button
  $tgBtn.on("click", function(){
    $("html").toggleClass("dark");
    if($("html").hasClass("dark")){
      localStorage.setItem("theme", "dark");
      $(this).html($lightSvg);
    } else{
      localStorage.setItem("theme", "light");
      $(this).html($darksvg);
    }
  });

   $(window).on("scroll", function () {
    if ($(this).scrollTop() > 350) {
      $header
        .removeClass("opacity-100 bg-transparent")
        .addClass("opacity-100 fixed bg-gray-100 z-50 dark:bg-gray-800 shadow-md");
    } else {
      $header
        .removeClass("opacity-100 fixed bg-gray-100 dark:bg-gray-800 shadow-md")
        .addClass("opacity-100 bg-transparent");
    }
  });

});



