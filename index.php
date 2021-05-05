<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>
  <header class="header__wrapper">
    <?php get_template_part('includes/header'); ?>

  </header>
  <main class="main">
    <section class="l-service__wrapper">
      <h2 class="section__title main__title">
        お知らせ一覧
      </h2>
      <section class="l-container">
        <p class="page__map">TOP > お知らせ一覧</p>
        <section class="l-info-page__wrapper">
          <?php if (have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
              <!-- 記事 -->
              <div class="c-info__news">
                <a href="#">
                  <figure class="info__img">
                    <?php thr_post_thumbnail(array('alt'=>'ニュース記事の画像')); ?>
                  </figure>
                  <dl class="news__content">
                    <dt class="news__date">
                      <?php the_time(get_option('date_format')); ?>
                      
                      <span class="news__bage">
                        お知らせ
                      </span>
                    </dt>
                    <dd class="news__title">
                      <?php the_title(); ?>
                    </dd>
                    <dd class="news__text">
                      <?php the_excerpt(); ?>
                    </dd>
                  </dl>
                </a>
              </div>
              <!-- 記事end -->
            <?php endwhile; ?>
          <?php else : ?>
            <!-- 記事 -->
            <div class="c-info__news">
              <figure class="info__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/blog1.jpg" alt="ニュース記事の画像">
              </figure>
              <dl class="news__content">
                <dt class="news__date">
                </dt>
                <dd class="news__title">
                  準備中です
                </dd>
                <dd class="news__text">
                  ただいま準備中です
                </dd>
              </dl>
            </div>
            <!-- 記事end -->
          <?php endif; ?>

          <section class="pagination__wrapper">
            <p class="page__item">1</p>
            <p class="page__item">2</p>
          </section>
        </section>
      </section>
      <!-- //l-container -->
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