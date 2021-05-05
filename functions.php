<?php
add_action('init', function(){
  add_theme_support('post-thumbnails');
});
define('WP_SCSS_ALWAYS_RECOMPILE', true);