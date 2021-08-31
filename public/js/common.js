$('.recommend-user__content-item,.recommend-company__content-item').slick({
　autoplay: true,
　autoplaySpeed: 4000,
　fade: true,
　speed: 900,
　infinite: true,
  dots: true,
  arrows: false,
});


$('.result__content-item').slick({
　autoplay: true,
　autoplaySpeed: 4000,
　fade: true,
　speed: 900,
　infinite: true,
  arrows: false,
  dots: true,
  dotsClass: 'original-dots',
});

$('.logo__responsive').hide();
$('.top__gnav-responsive').hide();

$('.btn-trigger').on('click', function() {
  $(this).toggleClass('active');
  $('.home__logo').toggle();
  $('.user-top-img-responsive').toggle();
  $('.company-top').toggle();
  $('.home__content-lead').toggle();
  $('.logo__responsive').slideToggle();
  $('.top__gnav-responsive').slideToggle();
  return false;
});