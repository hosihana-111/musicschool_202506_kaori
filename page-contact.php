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

      <!-- コンタクトフォーム -->
      <!--Contact-->
      <div id="contact" class="p-contact">
        <div class="l-inner">
          <div class="p-contact__container">
            <p class="p-contact__container-text c-text">当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>
              通常３営業日以内にメールにてご連絡させていただきます。</p>
            <div class="p-contact__form p-contact-form">
              <?php 
              // Contact Form 7表示
              if (have_posts()) :
                while (have_posts()) : the_post();
                 remove_filter('the_content','wpautop');
                  the_content();
                endwhile;
              endif;
              ?>
          
            </div><!-- contact-form -->
          </div><!-- contact__container -->

          <!-- TOPに戻るボタンのjsの修正をAIに依頼 -->
           <?php get_template_part('template-parts/fix-area'); ?>

        </div><!-- inner -->
      </div>
    </main>

   <?php get_footer(); ?>