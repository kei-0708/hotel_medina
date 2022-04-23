<?php get_header(); ?>

  <main>
    <!-- トップ -->
    <div class="blog-top subpage-top">
      <div class="subpage-top__title-wrap">
        <p class="subpage-top__title1 js-top__title1">ブログ</p>
        <p class="subpage-top__title2 js-top__title2">blog</p>
      </div>
    </div>

    <!-- パンくずリスト -->
    <div class="breadcrumb">
      <?php
        if ( function_exists( 'bcn_display' ) ) {
          bcn_display();
        }
      ?>
    </div>


    <!-- 記事一覧 -->
    <section class="blog-archives">
      <div class="blog-archives__inner inner">
        <div class="blog-archives__header section-header">
          <h2 class="section-header__title">ブログ記事一覧</h2>
          <p class="section-header__subtitle">archives</p>
        </div>
        <div class="blog-archives__lists">

          <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <a class="blog__item card" href="<?php the_permalink(); ?>">
            <figure class="card__figure js-card__figure">
              <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
              <span class="card__category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
            </figure>
            <div class="card__body">
              <time class="card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h3 class="card__title"><?php the_title(); ?></h3>
              <p class="card__copy"><?php the_excerpt(); ?></p>
            </div>
          </a>
          <?php endwhile; endif; ?>

        </div>
        <div class="pagenavi">
          <div class="wp-pagenavi">
            <?php the_posts_pagination( array(
              'prev_text' => '前のページへ',
              'next_text' => '次のページへ'
              ) );
            ?>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>