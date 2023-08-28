 $(document).jquery(function() {
        $('.main-carousel').slick({
            arrows: true,
            autoplay:true,
            prevArrow: '<button type="button" class="slick-prev z-40  absolute top-1/2  transform -translate-x-1/2 -translate-y-1/2 "> <span class="text-lg  p-4 cursor-pointer font-semibold bg-orange-500 w-12 h-12 rounded text-white"> < </span>  </button>',
            nextArrow: '<button type="button" class="slick-prev z-40  absolute top-1/2 right-0 transform -translate-x-1/ -translate-y-1/2 "> <span class="text-lg  p-4 cursor-pointer font-semibold bg-orange-500 w-12 h-12 rounded text-white"> > </span>  </button>',
            slidesToShow: 1,

        });
    });