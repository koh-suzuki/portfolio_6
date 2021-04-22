$(function () {
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
  var navPos = $('.header__wrapper').offset().top;
  $(window).scroll(function () {
    if ($(window).scrollTop() > navPos) {
      $('.header__wrapper').addClass('sticky');
    } else {
      $('.header__wrapper').removeClass('sticky');
    }
  });

  $(window).scroll(function () {
    var now = $(window).scrollTop();    
    if (now > $('.mv__bg').height()) {
      $('#page_top').fadeIn("slow");
    } else {
      $('#page_top').fadeOut('slow');
    }
  });
});
