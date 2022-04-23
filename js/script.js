jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  // var topBtn = $('.pagetop');
  // topBtn.hide();

  // ボタンの表示設定
  // $(window).scroll(function () {
  //   if ($(this).scrollTop() > 70) {
  //     // 指定px以上のスクロールでボタンを表示
  //     topBtn.fadeIn();
  //   } else {
  //     // 画面が指定pxより上ならボタンを非表示
  //     topBtn.fadeOut();
  //   }
  // });

  // ボタンをクリックしたらスクロールして上に戻る
  // topBtn.click(function () {
  //   $('body,html').animate({
  //     scrollTop: 0
  //   }, 300, 'swing');
  //   return false;
  // });

  //ドロワーメニュー
  // $("#MenuButton").click(function () {
  //   // $(".l-drawer-menu").toggleClass("is-show");
  //   // $(".p-drawer-menu").toggleClass("is-show");
  //   $(".js-drawer-open").toggleClass("open");
  //   $(".drawer-menu").toggleClass("open");
  //   $("html").toggleClass("is-fixed");
  // });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });


  // ローディングアニメーション
  $(function(){
    var loader = $('.loading');
    //ページの読み込みが完了したらアニメーションを非表示
    $(window).on('load',function(){
      loader.fadeOut();
    });
    //ページの読み込みが完了してなくても3秒後にアニメーションを非表示にする
    // setTimeout(function(){
    //   loader.fadeOut();
    // },3000);
  });

  // ハンバーガーメニュー開閉
  $(function(){
    $('.js-header-fixed__bar').on('click',function(){
        $(this).toggleClass('open');
        $('.header-spnav').toggleClass('active');
    });
  });


  // カーテンアニメーション
  $(window).scroll(function () {
    $('.js-features__image, .js-card__figure, .article__image').each(function (){
      var imageOffset = $(this).offset().top;
      var scrollPoint = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scrollPoint > imageOffset - windowHeight) {
        $(this).addClass('c-open');
      } else {
        $(this).removeClass('c-open');
      }
    });
  });

  // おすすめプランのスライダー
  $('.js-plan__lists').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    swipe: true,
    dots: false,
    arrows: false,
    slidesToScroll: 1,
    slidesToShow: 4,
    pauseOnHover: false,//マウスホバーで一時停止
    responsive: [{
      breakpoint: 768,
        settings: {
          slidesToShow: 1,
      }
    }
    ]
  });

  // よくある質問のアコーディオン
  $(function () {
    $('.js-faq__question-wrap').click(function () {
      $(this).next('div').slideToggle();
      $(this).find(".faq__arrow").toggleClass('open');
    });
  });

});



