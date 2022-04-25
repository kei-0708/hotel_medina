<?php
/*
Template Name: お問い合わせ
*/
get_header("sub"); ?>

  <main>
    <!-- トップ -->
    <div class="contact-top subpage-top">
      <div class="subpage-top__title-wrap">
        <p class="subpage-top__title1 js-top__title1">お問い合わせ</p>
        <p class="subpage-top__title2 js-top__title2">contact</p>
      </div>
    </div>

    <div class="breadcrumb">
      <div class="breadcrumb__inner inner">
        <?php
        if ( function_exists( 'bcn_display' ) ) {
          bcn_display();
        }
        ?>
      </div>
    </div>

    <!-- 入力フォーム -->
    <div class="contact-form">
      <div class="contact-form__inner inner">
        <div class="contact-form__header section-header">
          <h2 class="section-header__title">お問い合わせフォーム</h2>
          <p class="section-header__subtitle">form</p>
        </div>
        <form>
          <?php echo do_shortcode('[contact-form-7 id="41" title="お問い合わせフォーム"]'); ?>
        </form>
      </div>
    </div>
  </main>


  <?php get_footer(); ?>