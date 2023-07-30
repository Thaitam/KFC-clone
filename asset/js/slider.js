// Slider
// var sliderIndex = 0;

// function showSlider() {
//     var slides = document.getElementsByClassName("slider");
//     for (var i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     sliderIndex++
    
//     if (sliderIndex > slides.length) {
//         sliderIndex = 1;
//     }

//     slides[sliderIndex - 1].style.display = "block";
//     setTimeout(showSlider,3000);

//     if (sliderIndex === slides.length) {
//         sliderIndex = 0;
//     }
// }
// showSlider();
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
            items:3
        },
        1000:{
            items:5
        }
    }
})




