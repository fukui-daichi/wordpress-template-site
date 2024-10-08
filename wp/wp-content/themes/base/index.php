<!DOCTYPE html>
<html lang="ja">

<?php $_SERVER["REQUEST_URI"] == "/" ? $og_type = "website" : $og_type =  "article"; ?>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo $og_type; ?>: http://ogp.me/ns/<?php echo $og_type; ?>#">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="">

  <!--=============== ▼DEFAULT OGP ===============-->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="<?php echo $og_type; ?>">
  <meta property="og:site_name" content="">
  <meta property="og:url" content="">
  <title>テンプレートサイト</title>
  <meta name="description" content="">
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
    <button>ボタン</button>

    <main>
      <?php echo do_shortcode('[bogo]'); ?>
      <p><?php esc_html_e('翻訳したいテキスト', 'base'); ?></p>
    </main>

    <?php part("footer"); ?>
  </div>

  <?php part("scripts"); ?>
</body>

</html>