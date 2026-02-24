<!-- TOPに戻るボタンのjsの修正をAIに依頼 -->
      <div class="p-top-btn">
        <div class="p-top-btn__bg">
          <a href="#" class="p-top-btn__arrow u-opacity " aria-label="ページ上部へ">
            <div class="p-top-btn__arrow-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon/goto-top.svg" alt="トップへ戻る">
            </div>
          </a>
          <?php if ( !is_page('contact') ) : ?>
            <a href="<?php echo esc_url(home_url('contact')); ?>" class="c-btn p-top-btn__contact">お問い合わせ</a>
           <?php endif; ?>
        </div>
      </div>