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
    $args['label'] = 'トピック';
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