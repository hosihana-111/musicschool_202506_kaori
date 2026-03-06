    <!-- フッター -->
    <footer class="p-footer">
      <div class="p-footer__inner">
        <nav class="p-footer__nav" aria-label="フッターナビゲーション">
          <?php
            wp_nav_menu(array(
              'menu_class' => 'p-footer__nav ul',  
              'theme_location' => 'footer',
              'container' => false,
                         
            ));
            ?>
        </nav>
        <div class="p-footer__logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="u-opacity">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon/logo-white.svg" alt="きたむらミュージックスクール">
          </a>
        </div>
        <p class="p-footer__copyright">Copyright&nbsp;&copy;&nbsp;0000 KITAMURA music school Inc. All Rights</p>
        <div class="p-footer__sns">
          <ul>
            <li>
              <a href="" target="_blank" class="u-opacity">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-twitter.svg" alt="twitterを開く">
              </a>
            </li>
            <li>
              <a href="" target="_blank" class="u-opacity">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-facebook.svg" alt="facebookを開く">
              </a>
            </li>
            <li>
              <a href="" target="_blank" class="u-opacity">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-youtube.svg" alt="youtubeを開く">
              </a>
            </li>
            <li>
              <a href="" target="_blank" class="u-opacity">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-instagram.svg" alt="instagramを開く">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>

 

<?php wp_footer(); ?>
</body>

</html>