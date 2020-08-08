$('.slick-list').on('afterChange', function(event, slick, currentSlide) {
    if (currentSlide === 1) {
        $('.slick-prev').css("opacity", "1");
    }
    if (currentSlide === 3) {
        $('.slick-next').css("opacity", "0.5");
    } else {
        $('.slick-next').css("opacity", "1");
    }
    if (currentSlide === 0) {
        $('.slick-prev').css("opacity", "0.5");
    }

    console.log('afterChange, currentSlide: ', currentSlide);
});

$('.slick-list').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.slick-next'),
    prevArrow: $('.slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.image-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.slick-next-endow'),
    prevArrow: $('.slick-prev-endow'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.letgo-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.letgo-slick-next'),
    prevArrow: $('.letgo-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.row-letgo-danang').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.danang-slick-next'),
    prevArrow: $('.danang-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.row-letgo-top1000').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.top1000-slick-next'),
    prevArrow: $('.top1000-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.vinhomes-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.vinhomes-slick-next'),
    prevArrow: $('.vinhomes-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.row-item-top-places').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.slick-next-recommend'),
    prevArrow: $('.slick-prev-recommend'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.wrapper-hdsd').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.guide-slick-next'),
    prevArrow: $('.guide-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.letgo-wrapper').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.menu-toggle').click(function() {
    $('.menu-toggle').toggleClass('active')
    $('.navbar-collapse').toggleClass('active')
})