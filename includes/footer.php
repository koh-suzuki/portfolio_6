<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bgswitcher.js"></script>
<script>
  jQuery(function($) {
    $('.l-mv-wrapper').bgSwitcher({
      images: ['<?php echo get_template_directory_uri(); ?>/img/mv.jpg', '<?php echo get_template_directory_uri(); ?>/img/slider1.jpg', '<?php echo get_template_directory_uri(); ?>/img/slider-blog3.jpg'], // 切替背景画像を指
      interval: 4000, // 背景画像を切り替える間隔を指定 3000=3秒
      loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
      shuffle: true, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
      effect: "slide", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
      duration: 700, // エフェクトの時間を指定します。
      easing: "linear" // エフェクトのイージングをlinear,swingから指定
    });
  });
</script>