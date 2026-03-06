<?php get_header(); ?>



    <main>
      <!-- FV -->
      <div class="p-child-fv">
        <div class="p-child-fv__img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/contact/contact_fv.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_fv-sp.jpg" alt="お問い合わせ">
          </picture>
          <h1 class="p-child-fv__title">お問い合わせ</h1>
        </div>
      </div>

      <!-- パンくずリスト -->
       <?php get_template_part('template-parts/breadcrumbs'); ?>

      <!-- コンタクトフォーム送信完了 -->
      <div id="contact-send" class="p-contact-send">
        <div class="l-inner">
          <div class="p-contact-send__container">
            <p class="c-text">
              お問い合わせいただきありがとうございました。<br>
              内容確認後、担当者よりメールにてご連絡いたします。
            </p>
            <div class="p-contact-send__btn">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="p-btn__main c-btn" >ホームへ戻る</a>
            </div>
          </div><!-- contact-send__container -->
        </div><!-- inner -->
      </div>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>