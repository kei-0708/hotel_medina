<?php
/*
Template Name: 送信完了
*/
get_header("sub"); ?>

  <main>
    <!-- トップ -->
    <div class="thanks-top subpage-top">
      <div class="subpage-top__title-wrap">
        <p class="subpage-top__title1 js-top__title1">送信完了</p>
        <p class="subpage-top__title2 js-top__title2">complete</p>
      </div>
    </div>

    <!-- パンくずリスト -->
    <div class="breadcrumb">
      <div class="breadcrumb__inner inner">
        <?php
        if ( function_exists( 'bcn_display' ) ) {
          bcn_display();
        }
        ?>
      </div>
    </div>

    <div class="thanks">
      <div class="thanks__inner inner">
        <p class="thanks__text">お問い合わせいただきありがとうございます。 内容を確認した後に、担当者よりご連絡を差し上げます。</p>
        <div class="thanks__btn">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link-btn">TOPに戻る</a>
        </div>
      </div>
    </div>

  </main>


  <?php get_footer(); ?>