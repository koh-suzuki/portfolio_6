<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body id="header">
  <header class="header__wrapper">
    <?php get_template_part('includes/header'); ?>
  </header>
  <main class="main">
    <!-- main view -->
    <?php get_template_part('includes/main'); ?>
    <!-- service  -->
    <!-- service end -->
    <?php get_template_part('includes/service'); ?>
    <!-- work -->
    <?php get_template_part('includes/work'); ?>
    <!-- work end -->
    <!-- FAQ -->
    <?php get_template_part('includes/faq'); ?>
    <!-- FAQ end -->
    <!-- INFO -->
    <?php get_template_part('includes/info'); ?>
    <!-- INFO end -->
    <!-- CONTACT -->
    <?php get_template_part('includes/contact'); ?>
    <!-- CONTACT end -->
    <div id="page_top"><a href="#header"></a></div>
  </main>
  <footer class="footer">
    <p class="footer__logo">AOSHIRO TECH</p>
    <p class="copyright">
      <small>Ⓒ 2021 AOSHIRO TECH All rights reserved</small>
    </p>
  </footer>
  <?php get_footer(); ?>
  
  <!-- includes/footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- includes/footer end -->
</body>

</html>