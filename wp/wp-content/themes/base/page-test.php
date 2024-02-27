<!DOCTYPE html>
<html lang="ja">

<?php $_SERVER["REQUEST_URI"] == "/" ? $og_type = "website" : $og_type =  "article"; ?>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo $og_type; ?>: http://ogp.me/ns/<?php echo $og_type; ?>#">
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="">

  <!--=============== ▼DEFAULT OGP ===============-->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="<?php echo $og_type; ?>">
  <meta property="og:site_name" content="">
  <meta property="og:url" content="">
  <title>designground55 大阪の設計・インテリアデザイン事務所</title>
  <meta name="description" content="デザイナー隈元誠司率いる大阪を拠点とする設計・インテリアデザイン事務所。designground55はインテリア・住宅・建築・都市・プロダクトなど幅広いコンテンツのデザインを手掛けています。" />
  <meta property="og:image" content="絶対パスで指定　W1200px×H630pxがベスト">

  <!--=============== ▼TWITTER OGP ===============-->
  <meta name="twitter:site" content="@アカウント名">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="タイトル">
  <meta property="twitter:description" content="ディスクリプション">
  <meta property="twitter:image" content="絶対パスで指定　W1200px×H630pxがベスト">

  <?php part("links"); ?>
  <?php part("analytics"); ?>
</head>

<body>
  <div class="test-page">
    <?php part("header"); ?>

    <main>
      <div class="mv">
        <h1>
          <img src="/assets/images/common/logo.svg" alt="designground 55" width="59" height="392" decoding="async">
        </h1>
        <div class="splide-wrapper">
          <div class="splide" aria-label="Splideの基本的なHTML">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <figure>
                    <div class="image-inner">
                      <img src="/assets/images/top/slide01.jpg" alt="" width="2508" height="1327" decoding="async">
                    </div>
                    <div class="caption-inner">
                      <figcaption class="slide-caption js-slide-caption">
                        <a href="#">
                          Japanese Restaurant<br>
                          Bettei-nakago
                          <small>[ SHINSAIBASHI _ OSAKA ]</small>
                        </a>
                      </figcaption>
                    </div>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="slide-counter">
              <output class="current-slide"></output><span class="slide-divider"></span><span class="total-slides"></span>
            </div>
          </div>
        </div>
        <div class="bg">
          <img src="/assets/images/top/slide01.jpg" alt="" width="2508" height="1327" decoding="async">
        </div>
      </div>
    </main>

    <?php part("footer"); ?>
  </div>

  <?php part("scripts"); ?>
</body>

</html>