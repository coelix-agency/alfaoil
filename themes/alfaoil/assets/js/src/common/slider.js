document.addEventListener('DOMContentLoaded', function() {
    $('.partners-slider').slick({
        prevArrow: $('.arrow-left'),
        nextArrow: $('.arrow-right'),
        dotsClass: 'slider-dots',
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false,
                    // prevArrow: false,
                    // nextArrow: false
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    prevArrow: false,
                    nextArrow: false
                }
            }
        ]
    });
});
