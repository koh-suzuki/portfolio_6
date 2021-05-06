<?php
add_action('init', function(){
  add_theme_support('post-thumbnails');
});
define('WP_SCSS_ALWAYS_RECOMPILE', true);

//category-label
function categories_label() {
    $cats = get_the_category();
    foreach($cats as $cat){
        echo '<a href="#" ';
        echo 'class="info info__'.esc_attr($cat->slug).'">';
        echo esc_html($cat->name);
        echo '</a>';
    }
}

function post_has_archive($args, $post_type) {
  if('post'== $post_type){
    $args['rewrite'] = true;
    $args['has_archive'] = 'topic';
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function column_posts($query) {
  if ($query -> is_archive()) {
    $query -> set('post_per_page', '10');
    return;
  }
}
add_action('pre_get_posts', 'column_posts');

function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'main-menu' => 'Main Menu',
    'footer-menu'  => 'Footer Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );



/* ===============================================*/
/* #thumbnail画像の出力
/*=============================================== */
function get_thumb_img($size = 'full') {
  
  $thumb_id = get_post_thumbnail_id();  // アイキャッチ画像のIDを取得
  
  $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得
  
  $thumb_src = $thumb_img[0];    // 画像のurlだけ取得
  
  $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています）

  return '<img src="'.$thumb_src.'" alt="'.$thumb_alt.'">';
}
/* =============================================== */ 



function pagenation($pages = '', $range = 2){
  $showitems = ($range * 1)+1;
  global $paged;
  if(empty($paged)) $paged = 1;
  if($pages == ''){
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages){
          $pages = 1;
      }
  }
  if(1 != $pages){
      // 画像を使う時用に、テーマのパスを取得
      //$img_pass = get_template_directory_uri();
      echo "<div class=\"m-pagenation\">";
      // 「1/2」表示 現在のページ数 / 総ページ数
      // echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
      // 「前へ」を表示
      // if($paged > 1) echo "<div class=\"m-pagenation__prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></div>";
      // ページ番号を出力
      echo "<ol class=\"pagination__wrapper\">\n";
      for ($i=1; $i <= $pages; $i++){
          if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
              echo ($paged == $i)? "<li class=\"page__current\">".$i."</li>": // 現在のページの数字はリンク無し
                  "<li class=\"page__item\"><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
          }
      }
      // [...] 表示
      // if(($paged + 4 ) < $pages){
      //     echo "<li class=\"notNumbering\">...</li>";
      //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
      // }
      echo "</ol>\n";
      // 「次へ」を表示
      //if($paged < $pages) echo "<div class=\"m-pagenation__next\"><a href='".get_pagenum_link($paged + 1)."'>次へ</a></div>";
      echo "</div>\n";
  }
}

