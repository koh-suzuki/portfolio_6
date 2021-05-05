<section class="l-info__wrapper" id="info">
  <h2 class="section__title">
    お知らせ
  </h2>
  <ul class="info__list">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>


        <li class="info__item__wrapper">
          <div class="info__item">
            <span class="info__day">
              <?php the_time(get_option('date_format')); ?>
            </span>
            <?php categories_label(); ?>
            <p class="info__content">
              <?php the_title(); ?>
            </p>
          </div>
          <div class="info__border"></div>
        </li>
      <?php endwhile; ?>
    <?php else : ?>
      <li class="info__item__wrapper">
        <div class="info__item">
          <p class="info__content">
            準備中
          </p>
        </div>
        <div class="info__border"></div>
      </li>
    <?php endif; ?>
  </ul>
</section>