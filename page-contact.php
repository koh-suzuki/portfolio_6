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
      <h2 class="section__title main__title page__pt">
        お問い合せ
      </h2>
      <section class="l-container page__pb">
        <p class="page__map">TOP > お問い合せ</p>
        <form action="" class="form">
          <div class="form-group">
            <label for="" class="form__title">
              お名前
            </label>
            <span class="form__badge">必須</span>
            <input type="text" class="form__text form-control" name="" id="" placeholder="例）鈴木 太郎">
          </div>
          <div class="form-group">
            <label for="" class="form__title">
              メールアドレス
            </label>
            <span class="form__badge">必須</span>
            <input type="email" class="form__text form-control" name="" id="" placeholder="例）sample@example.com">
          </div>
          <div class="form-group">
            <label for="" class="form__title">
              お電話番号
            </label>
            <span class="form__badge">必須</span>
            <input type="tel" class="form__text form-control" name="" id="" placeholder="例）123-4567-890">
          </div>
          <div class="form-group">
            <label for="" class="form__title">
              ご用件
            </label>
            <span class="form__badge">必須</span>
            <div class="form-check">
              <input type="radio" class="form-check-input form__radio" name="" id="">
              <label class="form-check-label form__label" for="">
                サービスに関するお問い合せ
              </label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input form__radio" name="" id="">
              <label class="form-check-label form__label" for="">
                資料請求の申し込み
              </label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input form__radio" name="" id="">
              <label class="form-check-label form__label" for="">
                無料体験の申し込み
              </label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input form__radio" name="" id="">
              <label class="form-check-label form__label" for="">
                その他
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="form__title">
              お問い合せ内容
            </label>
            <textarea name="" id="" class="form-control textarea__bd" cols="30" rows="15"></textarea>
          </div>
        </form>
        <section class="btn__form">
          <button type="submit" class="btn contact-button">送信</button>
        </section>
        <p class="form__guid">ご不明な点がありましたらお気軽にご相談ください</p>
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