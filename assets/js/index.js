$('.mainSlider').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    nav: true,
    dots: true,
    autoplay: true,
    // center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        500: {
            items: 1,
            nav: false
        },
        768: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: true
        },
        1299: {
            items: 1,
            nav: true
        },
        1499: {
            items: 1,
            nav: true
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


$('.testimonial').owlCarousel({
    loop: true,
    items: 2,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        500: {
            items: 1,
            nav: false
        },
        768: {
            items: 2,
            nav: false
        },
        1000: {
            items: 2,
            nav: true
        },
        1299: {
            items: 2,
            nav: true
        },
        1499: {
            items: 2,
            nav: true
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

