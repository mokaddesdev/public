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
            { breakpoint: 1536, settings: { slidesToShow: 5 } }  
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
});



