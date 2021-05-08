<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <header class="header__wrapper">
    <?php get_template_part('includes/header'); ?>
  </header>
  <main class="main">
    <section class="l-service__wrapper">
      <h2 class="section__title main__title">
        学習コース
      </h2>
      <section class="l-container">
        <?php get_template_part('includes/breadcrumbs'); ?>
        <section class="l-service__inner">
          <section class="l-service__content" id="web">
            <div class="service__content__item">
              <h3 class="service__content__title">
                <?php
                //基本の出力方法
                the_field('coursename');
                ?>
              </h3>
              <p class="service__content__sub-title">コース説明</p>
              <p class="service__content__text">
                <?php the_field('coursediscription'); ?>
              </p>
            </div>
            <div class="service__page__img">

              <img src="<?php the_field('courseimg'); ?>" alt="Web制作マスターコースの画像">
            </div>
          </section>
          <section class="l-service__sub-content">
            <p class="service__content__sub-title">コース内容</p>
            <p class="service__content__text">
              <?php the_field('coursecontent'); ?>
            </p>
            <div class="btn btn__service">
              <a href="#" target="_blank" rel="noopener noreferrer">
                無料体験に申し込む
              </a>
            </div>
          </section>
        </section>
        <section class="l-service__inner">
          <section class="l-service__content" id="design">
            <div class="service__content__item">
              <h3 class="service__content__title">
                <?php the_field('coursename-2'); ?>
              </h3>
              <p class="service__content__sub-title">コース説明</p>
              <p class="service__content__text">
                <?php the_field('coursediscription-2'); ?>
              </p>
            </div>
            <div class="service__page__img">
              <img src="<?php the_field('courseimg-2'); ?>" alt="Webデザインマスターコースの画像">
            </div>
          </section>
          <section class="l-service__sub-content">
            <p class="service__content__sub-title">コース内容</p>
            <p class="service__content__text">
              <?php the_field('coursecontent-2'); ?>
            </p>
            <div class="btn btn__service">
              <a href="#" target="_blank" rel="noopener noreferrer">
                無料体験に申し込む
              </a>
            </div>
          </section>
        </section>
        <section class="l-service__inner">
          <section class="l-service__content" id="enginer">
            <div class="service__content__item">
              <h3 class="service__content__title"><?php the_field('coursename-3'); ?></h3>
              <p class="service__content__sub-title">コース説明</p>
              <p class="service__content__text">
                <?php the_field('coursediscription-3'); ?>
              </p>
            </div>
            <div class="service__page__img">
              <img src="<?php the_field('courseimg-3'); ?>" alt="エンジニア転職支援コースの画像">
            </div>
          </section>
          <section class="l-service__sub-content">
            <p class="service__content__sub-title">コース内容</p>
            <p class="service__content__text">
              <?php the_field('coursecontent-3'); ?>
            </p>
            <div class="btn btn__service">
              <a href="#" target="_blank" rel="noopener noreferrer">
                無料体験に申し込む
              </a>
            </div>
          </section>
        </section>
      </section>
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