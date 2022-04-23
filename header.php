<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>Hotel Medina</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>

  <!-- Loading Animation -->
  <div class="loading">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>

  <!-- ヘッダー -->
  <header class="header">
    <div class="header-fixed">
        <h1 class="header-fixed__logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_theme_file_uri("./images/common/logo.png"); ?>" alt="企業ロゴ">
          </a>
        </h1>
        <div class="header-fixed__btn">
          <button class="header-fixed__bar js-header-fixed__bar" type="button" aria-label="メニュー">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <p class="header-fixed__menu">menu</p>
        </div>
    </div>
    <!-- sp版 -->
    <div class="header-spnav nav">
        <nav class="header-spnav__wrap">
            <ul class="header-spnav__lists">
                <li class="header-spnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#plan">おすすめプラン</a></li>
                <li class="header-spnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#blog">最新情報</a></li>
                <li class="header-spnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#faq">よくあるご質問</a></li>
                <li class="header-spnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
    <!-- pc版 -->
    <div class="header-pcnav nav">
      <nav class="header-pcnav__wrap">
          <ul class="header-pcnav__lists">
              <li class="header-pcnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#plan">おすすめプラン</a></li>
              <li class="header-pcnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#blog">最新情報</a></li>
              <li class="header-pcnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#faq">よくあるご質問</a></li>
              <li class="header-pcnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a></li>
          </ul>
      </nav>
  </div>
  </header>