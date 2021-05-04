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
        <p class="page__map">TOP > 学習コース</p>
        <section class="l-service__inner">
          <section class="l-service__content" id="web">
            <div class="service__content__item">
              <h3 class="service__content__title">Web制作マスターコース</h3>
              <p class="service__content__sub-title">コース説明</p>
              <p class="service__content__text">
                本コースはプログラミングに興味がある方、初めてプログラミングに触れる方などを対象にWeb制作に使用される様々な言語の習得を目的とした講義を行います
              </p>
            </div>
            <div class="service__page__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/course1.jpg" alt="Web制作マスターコースの画像">
            </div>
          </section>
          <section class="l-service__sub-content">
            <p class="service__content__sub-title">コース内容</p>
            <p class="service__content__text">
              HTML・CSS・JavaScript・jQuery・PHP・WordPress、営業方法、案件対応の流れの習得
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
              <h3 class="service__content__title">Webデザインマスターコース</h3>
              <p class="service__content__sub-title">コース説明</p>
              <p class="service__content__text">
                本コースはWebデザインに興味がある方を対象にWebデザインに必要なデザインの知識・デザインソフトの使い方等の習得を目的とした講義を行います
              </p>
            </div>
            <div class="service__page__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/course2.jpg" alt="Webデザインマスターコースの画像">
            </div>
          </section>
          <section class="l-service__sub-content">
            <p class="service__content__sub-title">コース内容</p>
            <p class="service__content__text">
              配色・心理現象などのデザインに通ずる基礎知識、Adobe系のデザインソフトの使い方の習得
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
              <h3 class="service__content__title">エンジニア転職支援コース</h3>
              <p class="service__content__sub-title">コース説明</p>
              <p class="service__content__text">
                本コースは既にエンジニアとしてのスキルをお持ちの方を対象に、エンジニア転職に必要な知識やポートフォリオの作成などエンジニア転職を最終目標としたコースとなります
              </p>
            </div>
            <div class="service__page__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/course3.jpg" alt="エンジニア転職支援コースの画像">
            </div>
          </section>
          <section class="l-service__sub-content">
            <p class="service__content__sub-title">コース内容</p>
            <p class="service__content__text">
              転職先の斡旋、ポートフォリオ作成、面接練習
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