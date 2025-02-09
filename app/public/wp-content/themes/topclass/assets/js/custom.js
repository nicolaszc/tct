jQuery(function ($) {

    // Do stuff here
    $(document).ready(function() {

        $('.owl-main-banner').owlCarousel({
          loop:false,
          autoplay:true,
          rewind:true,
          autoplayHoverPause:true,
          margin:10,
          nav:false,
          navText:["<div class='nav-btn prev-slide'><i class='fa-solid fa-chevron-left'></i></div>","<div class='nav-btn next-slide'><i class='fa-solid fa-chevron-right'></i></div>"],
          dots:true,
          dotsData:true,
          startPosition: 4,
          /*  dotsContainer: '.test', */
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
        })
      
        $('.owl-dot').click(function() {
          $('.owl-dot').trigger('to.owl.carousel', [$(this).index(), 1000]);
        }) 
        
        
      })

}); // jQuery End

