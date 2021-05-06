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
        <?php get_template_part('includes/breadcrumbs'); ?>

        <section class="l-info-page__wrapper">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <!-- 記事 -->
              <div class="c-info__news">
                <a href="#">
                  <?php if (has_post_thumbnail()) : ?>
                    <figure class="info__img">
                      <?php echo get_thumb_img('large'); ?>
                    </figure>
                  <?php else : ?>
                    <figure class="info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/blog5.jpg" alt="無題の画像">
                    </figure>
                  <?php endif; ?>
                  <dl class="news__content">
                    <dt class="news__date">
                      <?php the_time(get_option('date_format')); ?>
                      <span class="news__bage">
                        <?php
                        $category = get_the_category();
                        if ($category[0]) {
                          echo $category[0]->cat_name;
                        }
                        ?>
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
                  準備中...
                </dd>
                <dd class="news__text">
                  ただいま準備中です
                </dd>
              </dl>
            </div>
            <!-- 記事end -->
          <?php endif; ?>
        </section>
        <!-- ページネーション  -->
        <div class="pagination__wrapper">
          <?php if (function_exists('wp_pagenavi')):?>
          <?php wp_pagenavi(); ?>
          <?php else: ?>
          <?php endif; ?>
        </div>
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