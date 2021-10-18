
// スライダー

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
        breakpoint: 376,
            settings: {
                centerMode: false,
                centerPadding: '0',
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
        breakpoint: 376,
            settings: {
                arrows: false,
        }
    }]
});

// ハンバーガーメニュー
$('.hamburger-menu__list').hide();

$('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    $('.hamburger-menu__list').slideToggle();
    return false;
});

// ページネーション
$(function() {
    $('.news__content-item-list').pagination({
        itemElement              : 'li',
        displayItemCount         : 6,
        paginationClassName      : 'news__pagination',
        paginationInnerClassName : 'news__pagination-number',
    });
});
