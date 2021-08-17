$('.recommend-user-content-item,.recommend-company-content-item').slick({
　autoplay: true,
　autoplaySpeed: 4000,
　fade: true,
　speed: 900,
　infinite: true,
  dots: true,
  arrows: false,
});


$('.result-content-item').slick({
　autoplay: true,
　autoplaySpeed: 4000,
　fade: true,
　speed: 900,
　infinite: true,
  arrows: false,
  dots: true,
  dotsClass: 'original-dots',
});

$('.home-img-responsive').hide();
$('.home-gnav-responsive').hide();

$('.home-btn-trigger').on('click', function() {
  $(this).toggleClass('active');
  $('.home-logo').toggle();
  $('.home-content-lead').toggle();
  $('.home-img-responsive').slideToggle();
  $('.home-gnav-responsive').slideToggle();
  return false;
});