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
  <meta property="og:title" content="タイトル">
  <meta property="og:description" content="ディスクリプション">
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
  <div class="top-page">
    <?php part("header"); ?>

    <main>
      <section class="splide" aria-label="Splideの基本的なHTML">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <figure>
                <img src="/assets/images/top/slide01.jpg" alt="" width="2508" height="1327" decoding="async">
              </figure>
            </li>
            <li class="splide__slide">
              <figure>
                <img src="/assets/images/top/slide02.jpg" alt="" width="2510" height="1327" decoding="async">
              </figure>
            </li>
            <li class="splide__slide">
              <figure>
                <img src="/assets/images/top/slide03.jpg" alt="" width="2508" height="1327" decoding="async">
              </figure>
            </li>
          </ul>
        </div>
      </section>
    </main>

    <?php part("footer"); ?>
  </div>

  <?php part("scripts"); ?>
</body>

</html>