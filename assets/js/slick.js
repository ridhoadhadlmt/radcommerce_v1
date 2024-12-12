$(document).ready(function(){
  $('.slick-flashsale').slick({
  	dots:false,
  	navs:false,	
  	infinite:false,
  	slidesToShow:5,
  	autoplay:false,
  	infinite:false,
  	autoplaySpeed:2000,
  	slidesToScroll:1,
    responsive: [
    {
      breakpoint:1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll:4,
        infinite:true,

      }
    },
    {
      breakpoint:600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint:480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });
});

$(document).ready(function(){
  $('.slick-kategori').slick({
    dots:false,
    navs:false, 
    infinite:false,
    slidesToShow:5,
    autoplay:false,
    infinite:false,
    autoplaySpeed:2000,
    slidesToScroll:1,
    responsive: [
    {
      breakpoint:1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll:4,
        infinite:true,

      }
    },
    {
      breakpoint:600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint:480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });
});

  