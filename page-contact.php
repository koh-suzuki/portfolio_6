<!DOCTYPE html>
<html lang="ja">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <?php get_header(); ?>
</head>

<body>
  <header class="header__wrapper">
    <?php get_template_part('includes/header'); ?>
  </header>
  <main class="main">
    <section class="l-service__wrapper">
      <h2 class="section__title  page__pt contact__title">
        お問い合せ
      </h2>
      <section class="l-container page__pb">
        <?php get_template_part('includes/breadcrumbs'); ?>
        <form action="" class="form">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile;
          endif; ?>
      </section>
    </section>
      <div id="page_top"><a href="#header"></a></div>
  </main>
  <footer class="footer">
    <p class="footer__logo">AOSHIRO TECH</p>
    <p class="copyright">
      <small>Ⓒ 2021 AOSHIRO TECH All rights reserved</small>
    </p>
  </footer>
  <?php get_footer(); ?>

</body>

</html>