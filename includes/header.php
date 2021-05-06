<div class="header__inner">
  <h1 class="header__logo"><a href="<?php echo esc_url(home_url('/')); ?>">AOSHIRO TECH</a></h1>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'main-menu'
  ));
  ?>
  <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
    <span class="p-hamburger__line">
      <span class="u-visuallyHidden">
        メニューを開閉する
      </span>
    </span>
  </button>
</div>