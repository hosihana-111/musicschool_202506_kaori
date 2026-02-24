<?php get_header(); ?>

    <main>
      <!-- FV -->
      <div class="p-child-fv p-child-fv--no-overlay">
        <div class="p-child-fv__img">
          <picture>
            <source media="(min-width: 768px)" srcset="./images/result_list/result-list_fv.jpg">
            <img src="./images/result_list/result-list_fv.jpg" alt="卒業実績">
          </picture>
          <h1 class="p-child-fv__title">卒業実績</h1>
        </div>
      </div>

    <!-- パンくずリスト -->
      <?php get_template_part('template-parts/breadcrumbs'); ?>


      <!-- 卒業実績-->
      <section id="result-list" class="p-result-list">
        <div class="l-inner">
          <h2 class="c-section-title">卒業実績一覧</h2>

          <div class="p-result-list__grid">
            <?php
            if (have_posts()):
              while (have_posts()):
                the_post();
            ?>
            <div class="p-result-list__item p-result-list-item">
              <a href="./result_details.html" class="u-opacity">
                <div class="p-result-list-item__img">
                  <span class="c-label c-label--lg">                  
                  <?php
                  $terms = get_the_terms(get_the_ID(), 'genre');
                 if (!empty($terms) && !is_wp_error($terms)) {
                  echo esc_html($terms[0]->name);
                 }?>
                </span>
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/blog01.jpg" alt="アコースティックギターを弾く人">
                 <?php endif; ?>
                </div>
                <div class="p-result-list-item__body">
                  <h3 class="p-result-list-item__title"><?php echo wp_trim_words(get_the_title(), 32, '...'); ?></h3>
                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
              </a>
            </div>
            <?php
          endwhile;
           endif;
           ?>       
         </div>

      </div>

   <!-- ページャー -->
        <div class="p-result-list__pagination c-pager" >
            <?php wp_pagenavi(); ?>
        </div>

        
      </section>

      <!-- TOPに戻るボタンのjsの修正をAIに依頼 -->
      <div class="p-top-btn">
        <div class="p-top-btn__bg">
          <a href="#" class="p-top-btn__arrow u-opacity " aria-label="ページ上部へ">
            <div class="p-top-btn__arrow-img">
              <img src="./images/icon/goto-top.svg" alt="トップへ戻る">
            </div>
          </a>
          <a href="./contact_form.html" class="c-btn p-top-btn__contact">お問い合わせ</a>
        </div>
      </div>
   <!-- TOPに戻るボタンのjsの修正をAIに依頼 -->
      
      <?php get_template_part('template-parts/fix-area'); ?>
    </main>

<?php get_footer(); ?>
