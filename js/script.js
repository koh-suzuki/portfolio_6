/* FAQのアコーディオン
/*----------------------- */
$('.q__text').on('click', function () {
  $(this).toggleClass('active');
  $(this).next().slideToggle();
  if ($(this).hasClass('active')) {
    $(this).children('.qa__flag').html('-')
  } else {
    $(this).children('.qa__flag').html('+')
  }
});

/* スティッキーヘッダー
/*----------------------- */
$(function () {
  var navPos = $('.header__wrapper').offset().top;
  $(window).scroll(function () {
    if ($(window).scrollTop() > navPos) {
      $(".header__wrapper").css("position", "fixed");
    } else {
      $(".header__wrapper").css("position", "static");
    }
  });
});
