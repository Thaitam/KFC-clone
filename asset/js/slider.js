$('.owl-carousel').owlCarousel({
    nav:true,
    items:1,
    loop: true,
    autoplay:true,
    autoplayTimeout:4000,
    autoWidth:true,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            loop:true
        }
    }
})




