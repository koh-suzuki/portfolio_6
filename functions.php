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
