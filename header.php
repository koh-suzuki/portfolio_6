<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <title>AOSHIRO TECH</title> -->
<title>
  <?php if (is_front_page() || is_home()) : ?>
    HOME | <?php bloginfo('name'); ?>
  <?php elseif (is_page()): ?>
    <?php the_title(); ?> | <?php bloginfo('name'); ?>
  <?php elseif (is_page('contact')): ?>
    <?php the_title(); ?> | <?php bloginfo('name'); ?>
  <?php elseif (home_url('topic')): ?>
    お知らせ一覧 | <?php bloginfo('name'); ?>
  <?php else: ?>
    <?php bloginfo('name'); ?>
  <?php endif; ?>
</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php wp_head(); ?>