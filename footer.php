  <footer class="footer">
    <div class="footer__inner">
      <ul class="footer__lists">
        <li class="footer__item">
          <a href="#" >利用規約</a>
        </li>
        <li class="footer__item">
          <a href="#" >プライバシーポリシー</a>
        </li>
        <li class="footer__item">
          <a href="#" >個人商取引法に基づく表記</a>
        </li>
        <li class="footer__item">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" >お問い合せ</a>
        </li>
      </ul>
      <figure class="footer__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_theme_file_uri("./images/common/logo.png"); ?>" alt="フッターロゴ">
        </a>
      </figure>
      <p class="footer__copyright">&copy;2021 Hotel Medina All Rights Reserved.</p>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>