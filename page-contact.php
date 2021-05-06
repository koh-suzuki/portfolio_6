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
        <p class="page__map">TOP > お問い合せ</p>
        <form action="" class="form">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>

  <!-- <div class="form-group"> 
    <div class="form__wrap">
      <label for="" class="form__title">
        お名前
      </label>
      <span class="form__badge">必須</span>
    </div>
    [text* your-name class:form__text class:form-control placeholder "例）鈴木 太郎"]
  </div>
  <div class="form__wrap">
    <label for="" class="form__title">
      メールアドレス
    </label>
    <span class="form__badge">必須</span>
  </div>
  <div class="form-group">
    [email* email class:form__text class:form-control placeholder "例）sample@example.com"]
  </div>
  <div class="form__wrap">
    <label for="" class="form__title">
      お電話番号
    </label>
    <span class="form__badge">必須</span>
  </div>
  <div class="form-group">
    [tel* tel class:form__text class:form-control placeholder "例）123-4567-890"] 
  </div>
  <div class="form__wrap">
    <label for="" class="form__title">
      ご用件
    </label>
    <span class="form__badge">必須</span>
  </div>
  <div class="form-group">
    
  </div>
  <div class="form__wrap">
    <label for="" class="form__title">
      お問い合せ内容
    </label>
    [textarea message class:form-control class:textarea__bd]
  </div>
<section class="btn__form">
  [submit class:btn class:contact-button "送信"]
</section>
<p class="form__guid">ご不明な点がありましたらお気軽にご相談ください</p>
</section> -->
<!-- l-container -->
    </section>
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