<?php get_header(); ?>

  <main>

    <!-- 個別記事 -->
    <div class="article">
      <div class="article__inner inner">
        <div class="article__wrap">

          <div class="article__flex">
            <div class="article__contents">

              <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <div class="article__category">
                <span><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
              </div>
              <p class="article__title"><?php the_title(); ?></p>
              <div class="article__info">
                <div class="article__sns-wrap">
                  <a class="article__sns" href="#"><i class="fa-brands fa-twitter fa-lg fa-shake"></i>tweet</a>
                </div>
                <time class="article__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              </div>
              <figure class="article__image">
                <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
              </figure>
              <?php the_content(); ?>
              <?php endwhile; endif; ?>
              <!-- <h2 class="article__header1">見出し2（h2）</h2>
              <p class="article__text1">テキストテキストテキストテキストテキ スト。テキストテキストテキストテキス ト。テキストテキストテキストテキスト テキストテキストテキストテキスト。 テキストテキストテキストテキストテキ ストテキストテキストテキストテキスト テキストテキストテキストテキストテキ スト</p>
              <h2 class="article__header2">見出し3（h3）</h2>
              <p class="article__text2">テキストテキストテキストテキストテキ スト。テキストテキストテキストテキス ト。テキストテキストテキストテキスト テキストテキストテキストテキスト。 テキストテキストテキストテキストテキ ストテキストテキストテキストテキスト テキストテキストテキストテキストテキ スト</p>
              <h2 class="article__header2">見出し3（h3）</h2>
              <p class="article__text2">テキストテキストテキストテキストテキ スト。テキストテキストテキストテキス ト。テキストテキストテキストテキスト テキストテキストテキストテキスト。 テキストテキストテキストテキストテキ ストテキストテキストテキストテキスト テキストテキストテキストテキストテキ スト</p>
              <h2 class="article__header1">見出し2（h2）</h2>
              <p class="article__text1">テキストテキストテキストテキストテキ スト。テキストテキストテキストテキス ト。テキストテキストテキストテキスト テキストテキストテキストテキスト。 テキストテキストテキストテキストテキ ストテキストテキストテキストテキスト テキストテキストテキストテキストテキ スト</p> -->
            </div>


            <div class="article__sidebar">
              <!-- 関連記事 -->
              <div class="article__related related">
                <h3 class="related__header">関連記事</h3>
                <div class="related__lists">
                  <a href="#" class="related__item">
                    <figure class="related__image">
                      <img src="/images/blog/AdobeStock_193751905.jpeg" alt="">
                    </figure>
                    <p class="related__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                  </a>
                  <a href="#" class="related__item">
                    <figure class="related__image">
                      <img src="/images/blog/AdobeStock_193751905.jpeg" alt="">
                    </figure>
                    <p class="related__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                  </a>
                  <a href="#" class="related__item">
                    <figure class="related__image">
                      <img src="/images/blog/AdobeStock_193751905.jpeg" alt="">
                    </figure>
                    <p class="related__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                  </a>
                </div>
              </div>
              <!-- おすすめ記事 -->
              <div class="article__recommend recommend">
                <h3 class="recommend__header">おすすめ記事</h3>
                <div class="recommend__lists">
                  <a href="#" class="recommend__item">
                    <figure class="recommend__image">
                      <img src="/images/blog/AdobeStock_193751905.jpeg" alt="">
                    </figure>
                    <p class="recommend__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                  </a>
                  <a href="#" class="recommend__item">
                    <figure class="recommend__image">
                      <img src="/images/blog/AdobeStock_193751905.jpeg" alt="">
                    </figure>
                    <p class="recommend__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                  </a>
                  <a href="#" class="recommend__item">
                    <figure class="recommend__image">
                      <img src="/images/blog/AdobeStock_193751905.jpeg" alt="">
                    </figure>
                    <p class="recommend__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php the_post_navigation( array(
      'prev_text' => '前のページへ',
      'next_text' => '次のページへ'
      ) );
    ?>

  </main>

  <?php get_footer(); ?>