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
  console.log($('.header__wrapper').scrollTop());
  
  $(window).scroll(function () {
    if ($(window).scrollTop() > (navPos-96)) {
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

  /* ===============================================*/
  /* /* smooth scroll */
  /*=============================================== */
  $(window).on('load',function(){
    var locUrl = location.href;
    var setHash = locUrl.split('#');
    //現在のページURLに#が含まれる場合はスクロール移動
    if(setHash[1]){
        hashMove("#"+setHash[1]);
    }
    //#pagetop
    $('#pagetop a').on('click',function() {
        var href = $(this).attr("href");
        var clkUrl = href.split('#');
        hashMove("#"+clkUrl[1]);
        return false;
    });
    //#から始まるリンクはスクロール
    $('a[href^="#"]').on('click',function() {
        var href = $(this).attr("href");
        var clkUrl = href.split('#');
        hashMove("#"+clkUrl[1]);
    });
    //#を含むリンクは、リンク先と現在のページのURLを比較して判断
    $('a[href*="#"]').on('click',function() {
        var href = $(this).attr("href");
        var pageURL = location.pathname;
        reg = new RegExp(pageURL);
        //ページ名が同じならスクロール移動
        if (href.match(reg)) {
            var clkUrl = href.split('#');
            hashMove("#"+clkUrl[1]);
        }
    });

    function hashMove(trg){
        var position = $(trg).offset().top;
        if($('body').hasClass('admin-bar')){
            position = position - 50;
        }else{
            position = position - 20;
        }
        if($('body').width() <= 980){
            position = position - 50; //見出しの文字が切れるのを防ぐ
        }else{
            position = position - 150; //見出しの文字が切れるのを防ぐ
        }
        $('body,html').animate({scrollTop:position}, '800', 'swing');
    }
  });

  /* ===============================================*/
  /* ハンバーガーボタン
  /*=============================================== */
  $('#js-buttonHamburger').click(function () {
    $('body').toggleClass('is-drawerActive');
    $('.menu-menu-container').fadeToggle(800);    
    $('body').toggleClass('noscroll');
    $('html').toggleClass('noscroll');

    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', true);
    } else {
      $(this).attr('aria-expanded', false);
    }
  });

  // $('#js-buttonHamburger').on('click',function(){
  // });

});