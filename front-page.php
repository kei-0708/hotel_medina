<?php get_header(); ?>

  <main>
    <!-- トップ -->
    <div class="top">
        <div class="top__title-wrap">
          <p class="top__title1 js-top__title1">青き迷宮に隠された</p>
          <p class="top__title2 js-top__title2">北アフリカの楽園</p>
        </div>
    </div>

    <!-- 本館の特徴 -->
    <section class="features">
      <div class="features__inner">
        <div class="features__header section-header">
          <h2 class="section-header__title">リアドの特徴</h2>
          <p class="section-header__subtitle">features</p>
        </div>
        <ul class="features__lists">
          <li class="features__item">
            <figure class="features__image js-features__image">
              <img src="<?php echo get_theme_file_uri("/images/common/feature-item01.jpg"); ?>" alt="特徴1">
            </figure>
            <div class="features__content">
              <h3 class="features__title">モロッコ伝統の邸宅ホテル<br class="u-desktop">「リアド」でラグジュアリーなひと時を。</h3>
              <p class="features__text">リアドはアラビア語で「植物のある庭」を指す言葉です。古い邸宅を改装し、現在ではモロッコ特有の宿泊施設として知られています。もともと住まいとして建てられた家なので、中庭を取り囲んだ小さめの宿であることが特徴です。中庭には花や植物、噴水や水場などがあり、歴史的建造物の優雅さと近代的な快適さの融合を味わうことができます。</p>
              <div class="features__btn">
                <a href="#" class="link-btn">お部屋の詳細</a>
              </div>
            </div>
          </li>
          <li class="features__item">
            <figure class="features__image js-features__image">
              <img src="<?php echo get_theme_file_uri("/images/common/feature-item02.jpg"); ?>" alt="特徴1">
            </figure>
            <div class="features__content">
              <h3 class="features__title">土地ならではの味覚をみなさまに。<br class="u-desktop">本場モロッコ料理に舌鼓。</h3>
              <p class="features__text">タジン鍋やクスクスで有名なモロッコ料理は、北西アフリカ地方とアラブ人の食文化が混ざって形成されました。スパイスをたっぷり使った料理が特徴的で、スパイスの刺激と、香味食材の組み合わせがモロッコ料理に深みを与えています。パティオ(中庭の吹き抜け空間)での優雅なお食事をお楽しみ頂けます。</p>
              <div class="features__btn">
                <a href="#" class="link-btn">料理の詳細</a>
              </div>
            </div>
          </li>
          <li class="features__item">
            <figure class="features__image js-features__image">
              <img src="<?php echo get_theme_file_uri("/images/common/feature-item03.jpg"); ?>" alt="特徴1">
            </figure>
            <div class="features__content">
              <h3 class="features__title">邸宅ホテルのゴージャス空間で<br class="u-desktop">リフレッシュを。</h3>
              <p class="features__text">中庭の中央にはスイミングプールを備えており、グリーンとブルーのモザイク模様がモロッコ独特のエキゾチックな雰囲気を作り出しています。また、屋上にはラウンジとテラスがあり、シャウエンの街並みを望みながらのんびり過ごすこともできます。客室以外でもリラックススペースが充実した宿です。</p>
              <div class="features__btn">
                <a href="#" class="link-btn">施設の詳細</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- プラン -->
    <section class="plan" id="plan">
      <div class="plan__inner inner">
        <div class="plan__header section-header">
          <h2 class="section-header__title">おすすめプラン</h2>
          <p class="section-header__subtitle">recommend plan</p>
        </div>
        <div class="plan__wrap">
          <ul class="plan__lists js-plan__lists">
            <li class="plan__item">
              <figure class="plan__image">
                <img src="<?php echo get_theme_file_uri("/images/common/rec-plan01.jpg"); ?>" alt="プラン1">
              </figure>
              <div class="plan__content">
                <h3 class="plan__title">リーズナブルなスタンダードプラン＜朝選択可＞</h3>
                <p class="plan__price">お値段：5000円 / 人</p>
              </div>
            </li>
            <li class="plan__item">
              <figure class="plan__image">
                <img src="<?php echo get_theme_file_uri("/images/common/rec-plan02.jpg"); ?>" alt="プラン1">
              </figure>
              <div class="plan__content">
                <h3 class="plan__title">リアドでゆったり、ロングステイプラン＜朝食選択可＞</h3>
                <p class="plan__price">お値段：6000円 / 人</p>
              </div>
            </li>
            <li class="plan__item">
              <figure class="plan__image">
                <img src="<?php echo get_theme_file_uri("/images/common/rec-plan03.jpg"); ?>" alt="プラン1">
              </figure>
              <div class="plan__content">
                <h3 class="plan__title">【2部屋限定】スイートルームプラン</h3>
                <p class="plan__price">お値段：8000円 / 人</p>
              </div>
            </li>
            <li class="plan__item">
              <figure class="plan__image">
                <img src="<?php echo get_theme_file_uri("/images/common/rec-plan04.jpg"); ?>" alt="プラン1">
              </figure>
              <div class="plan__content">
                <h3 class="plan__title">【10組限定】屋上ラウンジでのディナープラン</h3>
                <p class="plan__price">お値段：7000円 / 人</p>
              </div>
            </li>
            <li class="plan__item">
              <figure class="plan__image">
                <img src="<?php echo get_theme_file_uri("/images/common/rec-plan05.jpg"); ?>" alt="プラン1">
              </figure>
              <div class="plan__content">
                <h3 class="plan__title">【数量限定】ラム肉のステーキプラン</h3>
                <p class="plan__price">お値段：8000円 / 人</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- サービス -->
    <section class="service">
      <div class="service__inner inner">
        <ul class="service__lists">
          <li class="service__item">
            <figure class="service__image">
              <img src="<?php echo get_theme_file_uri("/images/common/service-item01.png"); ?>" alt="サービス1">
            </figure>
            <div class="service__body">
              <h3 class="service__title">最低価格保証</h3>
              <p class="service__text">Hotel Medinaの公式ホームページでのご予約料金は、他の予約サイトよりも最低価格であることをお約束します。</p>
            </div>
          </li>
          <li class="service__item">
            <figure class="service__image">
              <img src="<?php echo get_theme_file_uri("/images/common/service-item02.png"); ?>" alt="サービス1">
            </figure>
            <div class="service__body">
              <h3 class="service__title">全客室Wi-Fi無料</h3>
              <p class="service__text">中庭及び・各フロアに無線LANを設置し、各客室内でWi-Fi接続によるインターネットを利用できる環境を構築しています。</p>
            </div>
          </li>
          <li class="service__item">
            <figure class="service__image">
              <img src="<?php echo get_theme_file_uri("/images/common/service-item03.png"); ?>" alt="サービス1">
            </figure>
            <div class="service__body">
              <h3 class="service__title">会員様限定料金</h3>
              <p class="service__text">会員の方は、会員料金でご宿泊頂ける他、オンラインクーポンなどの限定メニ ューもご利用頂けます。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- ブログ -->
    <section class="blog" id="blog">
      <div class="blog__inner inner">
        <div class="blog__header section-header">
          <h2 class="section-header__title">ブログ</h2>
          <p class="section-header__subtitle">blog</p>
        </div>
        <div class="blog__lists">

          <?php $args = array(
            'posts_per_page' => 3, //表示する記事の数
            );
            $customPosts = get_posts($args);
            if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
          ?>
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
          <?php endforeach; ?>
          <?php else : //記事が無い場合 ?>
          <p>このカテゴリーにはまだ記事がありません。</p>
          <?php endif; wp_reset_postdata(); //クエリのリセット ?>

        </div>
        <div class="blog__btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog" class="link-btn">記事一覧を見る</a>
        </div>
      </div>
    </section>

    <!-- よくある質問 -->
    <section class="faq" id="faq">
      <div class="faq__inner inner">
        <div class="faq__header section-header">
          <h2 class="section-header__title">よくある質問</h2>
          <p class="section-header__subtitle">F&Q</p>
        </div>
        <ul class="faq__lists">
          <li class="faq__item">
            <div class="faq__question-wrap js-faq__question-wrap">
              <div class="faq__question-info">
                <span class="faq__q">Q</span>
                <p class="faq__question">チェックイン、チェクアウトの時間は何時ですか？</p>
              </div>
              <div class="faq__arrow">
                <span></span>
              </div>
            </div>
            <div class="faq__answer-wrap">
              <div class="faq__answer-body">
                <span class="faq__a">A</span>
                <p class="faq__answer">チェックインの時間は14:00～22:00です。22:00を過ぎる場合は、ご一報を入れて頂くようお願いしております。チェックアウトの時間は翌朝10:00でございます。</p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__question-wrap js-faq__question-wrap">
              <div class="faq__question-info">
                <span class="faq__q">Q</span>
                <p class="faq__question">プールがついたお部屋はありますか？</p>
              </div>
              <div class="faq__arrow">
                <span></span>
              </div>
            </div>
            <div class="faq__answer-wrap">
              <div class="faq__answer-body">
                <span class="faq__a">A</span>
                <p class="faq__answer">スイミングプール付きのお部屋はスイートルームのみ(2部屋)ございます。</p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__question-wrap js-faq__question-wrap">
              <div class="faq__question-info">
                <span class="faq__q">Q</span>
                <p class="faq__question">ペットを連れて行きたいのですが可能ですか？</p>
              </div>
              <div class="faq__arrow">
                <span></span>
              </div>
            </div>
            <div class="faq__answer-wrap">
              <div class="faq__answer-body">
                <span class="faq__a">A</span>
                <p class="faq__answer">申し訳ございませんが、ペット同伴のご宿泊はお断りさせて頂いております。</p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__question-wrap js-faq__question-wrap">
              <div class="faq__question-info">
                <span class="faq__q">Q</span>
                <p class="faq__question">キャスター付きのスーツケースで行っても大丈夫ですか？</p>
              </div>
              <div class="faq__arrow">
                <span></span>
              </div>
            </div>
            <div class="faq__answer-wrap">
              <div class="faq__answer-body">
                <span class="faq__a">A</span>
                <p class="faq__answer">スーツケースのご利用は特に問題ございません。エレベーターはございませんので、お荷物は係りの者がお部屋までお持ち致します。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>