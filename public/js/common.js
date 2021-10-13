$('.content__list').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 900,
    infinite: true,
    dots: true,
    arrows: true,
    slidesToShow: 1,
		cssEase: 'ease-in-out',
    centerMode: true,
    centerPadding: '20%',
    focusOnSelect: true,
    responsive: [{
        breakpoint: 368,
            settings: {
                arrows: false,
                focusOnSelect: false,
        }
    }]
});

$('.production__content-list').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 900,
    infinite: true,
    arrows: false,
    dots: true,
    dotsClass: 'original-dots',
    responsive: [{
        breakpoint: 368,
            settings: {
                arrows: false,
        }
    }
    ]
});

$('.hamburger-menu__logo').hide();
$('.hamburger-menu__list').hide();

$('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    $('.hamburger-menu__logo').slideToggle();
    $('.hamburger-menu__list').slideToggle();
    return false;
});
