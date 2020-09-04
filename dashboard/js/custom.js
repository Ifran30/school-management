$(document).ready(function(){

//owl.carosel


$('.slider_textt').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    autoplay:3000,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
})





	});










