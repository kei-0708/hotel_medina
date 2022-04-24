<?php
  function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));
  }
  add_action('after_setup_theme', 'my_setup');
?>

<?php
  /* CSSとJavaScriptの読み込み */
  function my_script_init()
  { // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', "", "1.0.1");
    wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js', "", "1.0.1");
    wp_enqueue_script( 'scrolltrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js', "", "1.0.1");
    wp_enqueue_script( 'fontawesome', '//kit.fontawesome.com/ae7a692fdb.js', "", "1.0.1");
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/js/gsap.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_style( 'styles-css', get_template_directory_uri() . '/css/styles.css', array(), '1.0.1' );
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css', array(), '1.0.1' );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.0.1' );
  }
  add_action('wp_enqueue_scripts', 'my_script_init');
?>

<?php
  // 文字数調整
  function my_excerpt_length($length) {
    return 50; //制限したい文字数
  }
  add_filter('excerpt_length', 'my_excerpt_length');
?>