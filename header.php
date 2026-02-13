<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>きたむらミュージックスクール</title>
  <meta name="description" content="「音楽で生きる」を叶えるミュージックスクール"> 
<!-- icon -->
 <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icon/favicon.svg" id="favicon" type="image/x-icon" sizes="32x32">
 <!-- font -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
  <div id="container">
    <!-- ヘッダー -->
    <header id="header" class="p-header l-header">
      <div class="p-header__inner">
        <?php if (is_front_page() || is_search()): ?>
        <h1 class="p-header__logo p-header-logo">
        <?php else: ?>
        <div class="p-header__logo p-header-logo">
        <?php endif; ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="u-opacity">
            <span class="p-header-logo__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/header/header-logo.svg" alt="きたむらミュージックスクール">
            </span>
            <span class="p-header-logo__text">きたむら<br class="pc">
              <span class="p-header-logo__text-small">ミュージックスクール</span>
            </span>
          </a>
          <?php if (is_front_page() || is_search()): ?>
        </h1>
        <?php else: ?>
        </div>
        <?php endif; ?>

        <button class="c-hamburger sp" aria-controls="global-nav" aria-expanded="false" aria-label="メニューを開閉">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <div class="p-header__right">
          <nav class="p-header__nav" id="global-nav" aria-label="グローバルナビゲーション">
            <ul class="p-header__items">
              <li class="p-header__item"><a href="./plan.html"><span>料金</span></a></li>
              <li class="p-header__item"><a href="./blog_list.html"><span>ブログ</span></a></li>
              <li class="p-header__item"><a href="./result_list.html"><span>卒業実績</span></a></li>
            </ul>
          </nav>
          <div class="pc">
            <a href="./contact_form.html" class="c-btn c-btn--head">お問い合わせ</a>
          </div>
        </div>
      </div>
      <?php wp_head(); ?>
    </header>
