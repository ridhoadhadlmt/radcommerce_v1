
var owl = $('.owl-carousel');

owl.owlCarousel({
    items:2,
    center:true,
    loop:true,
    margin:20,
    autoplay:false,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
    	0:{
    		items:1
    	},
    	1000:{
    		items:2
    	}
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})