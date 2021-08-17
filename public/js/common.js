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

$('.logo-responsive').hide();
$('.top-gnav-responsive').hide();

$('.btn-trigger').on('click', function() {
  $(this).toggleClass('active');
  $('.home-logo').toggle();
  $('.user-top-img-responsive').toggle();
  $('.company-top').toggle();
  $('.home-content-lead').toggle();
  $('.logo-responsive').slideToggle();
  $('.top-gnav-responsive').slideToggle();
  return false;
});