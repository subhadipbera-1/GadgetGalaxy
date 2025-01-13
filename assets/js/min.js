/*$(function () {
    $("#carousel-multiple").on("slide.bs.carousel", function (e) {
      var itemsPerSlide = parseInt($(this).attr('data-maximum-items-per-slide')),
        totalItems = $(".carousel-item", this).length,
        reserve = 1,//do not change
        $itemsContainer = $(".carousel-inner", this),
        it = (itemsPerSlide + reserve) - (totalItems - e.to);
  
      if (it > 0) {
        for (var i = 0; i < it; i++) {
          $(".carousel-item", this)
            .eq(e.direction == "left" ? i : 0)
            // append slides to the end/beginning
            .appendTo($itemsContainer);
        }
      }
    });
  });*/

  ////// Banner Silder

  /*$(".banner-slider").owlCarousel({
    responsiveClass: true,
    lazyLoad: true,
    loop: true,
    margin: 0,
    autoplay: true,
    dots: false,
    itemsScaleUp: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 1,
        nav: true,
      },
    },
  });

  $(".brand-carousel-slider").owlCarousel({
    responsiveClass: true,
    lazyLoad: true,
    loop: true,
    margin: 10,
    autoplay: true,
    dots: false,
    nav: false,
    itemsScaleUp: false,
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 5,
      },
    },
  });*/