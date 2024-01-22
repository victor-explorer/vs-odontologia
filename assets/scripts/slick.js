$(window).on('load resize orientationchange', function () {
    // $('.carousel-avatar').each(function () {
    //     let $carousel = $(this);

    //     if ($(window).width() > 768) {
    //         if ($carousel.hasClass('slick-initialized')) {
    //             $carousel.slick('unslick');
    //         }
    //     }

    //     else {
    //         if (!$carousel.hasClass('slick-initialized')) {
    //             $carousel.slick({
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1,
    //                 arrows: true,
    //                 infinite: false
    //             });
    //         }
    //     }
    // });

    // $('.carousel-products-slick').each(function () {
    //     let $carousel = $(this);

    //     $carousel.slick({
    //         dots: true,
    //         arrows: true,
    //         centerMode: true,
    //         centerPadding: '30px',
    //         slidesToShow: 3,
    //         responsive: [
    //             {
    //                 breakpoint: 768,
    //                 settings: {
    //                     arrows: false,
    //                     centerMode: false,
    //                     slidesToShow: 1
    //                 }
    //             }
    //         ]
    //     });


    // });

    // $('.carousel-gallery').each(function () {
    //     let $carousel = $(this);

    //     if ($(window).width() > 768) {
    //         if ($carousel.hasClass('slick-initialized')) {
    //             $carousel.slick('unslick');
    //         }
    //     }

    //     else {
    //         if (!$carousel.hasClass('slick-initialized')) {
    //             $carousel.slick({
    //                 dots: true,
    //                 mobileFirst: true,
    //                 arrows: false
    //             });
    //         }
    //     }
    // });

    // $('.carousel-topics').each(function () {
    //     let $carousel = $(this);

    //     $carousel.slick({
    //         dots: true,
    //         arrows: false,
    //         adaptiveHeight: true,
    //         arrows: true,
    //         centerMode: true,
    //         centerPadding: '30px',
    //         slidesToShow: 3,
    //         responsive: [
    //             {
    //                 breakpoint: 768,
    //                 settings: {
    //                     arrows: false,
    //                     centerMode: false,
    //                     slidesToShow: 1
    //                 }
    //             }
    //         ]
    //     });


    // });
})


$(function () {
    $('.carousel-tratamentos').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.carousel-avatar').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.vs-gallery-carousel').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.carousel-testimonial').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            },
        ]
    });
});