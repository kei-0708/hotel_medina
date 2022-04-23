<?php
/*
Template Name: お問い合わせ
*/
get_header(); ?>

  <main>
    <!-- トップ -->
    <div class="contact-top subpage-top">
      <div class="subpage-top__title-wrap">
        <p class="subpage-top__title1 js-top__title1">お問い合わせ</p>
        <p class="subpage-top__title2 js-top__title2">contact</p>
      </div>
    </div>

    <!-- 入力フォーム -->
    <div class="contact-form">
      <div class="contact-form__inner inner">
        <div class="contact-form__header section-header">
          <h2 class="section-header__title">お問い合わせフォーム</h2>
          <p class="section-header__subtitle">form</p>
        </div>
        <form action="">
          <ul class="contact-form__lists">
            <li class="contact-form__item">
              <div class="contact-form__title">
                <label for="name">氏名</label>
              </div>
              <input type="text" class="contact-form__box" placeholder="名前" id="name">
            </li>
            <li class="contact-form__item">
              <div class="contact-form__title">
                <label for="kana">ふりがな</label>
              </div>
              <input type="text" class="contact-form__box" placeholder="なまえ" id="kana">
            </li>
            <li class="contact-form__item">
              <div class="contact-form__title">
                <label for="kana">メールアドレス</label>
              </div>
              <input type="text" class="contact-form__box" placeholder="example@example.com" id="email">
            </li>
            <li class="contact-form__item">
              <div class="contact-form__title">
                <label for="kana">電話番号</label>
              </div>
              <input type="text" class="contact-form__box" placeholder="012-3456-789" id="number">
            </li>
            <li class="contact-form__item">
              <div class="contact-form__title">
                <label for="detail">お問い合わせ内容</label>
              </div>
              <textarea name="" id="" cols="30" rows="10" id="detail" class="contact-form__textarea" placeholder="お問い合わせ内容を入力して下さい。"></textarea>
            </li>
          </ul>
          <p class="contact-form__privacy"><a href="#">プライバシーポリシー</a>に同意の上、送信ください。</p>
          <p class="contact-form__confirm">
            <input type="checkbox" class="checkbox" id="check">
            <label for="check">プライバシーポリシーに同意する</label>
          </p>
          <div class="contact-form__btn-wrap">
            <div class="contact-form__btn link-btn">
              <input type="submit" value="送信する" class="contact-form__submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>


  <?php get_footer(); ?>