<?php get_header(); ?>


    <main>
      <!-- パンくずリスト -->
       <?php get_template_part('template-parts/breadcrumbs'); ?>

      <!-- キーワード」の検索結果 -->
      <section id="search" class="p-search">
        <div class="l-inner">
         <?php if (!empty(get_search_query())): ?>
        <?php
        if (have_posts()):
          $total_posts = $wp_query->found_posts;
        ?>
          <div class="p-search__header">            
            <p>「<span class="p-search__keyword"><?php echo get_search_query(); ?></span>」の検索結果</p>
            <!-- 件数-->
            <p class="p-search__count"><?php echo $total_posts; ?>件</p>
          </div>

          <div class="p-search__items">
            <?php
            while (have_posts()):
              the_post();
            ?>


            
              <a href="<?php the_permalink(); ?>" class="p-search__item u-opacity">
                <div class="p-search__img">
                  <span class="c-label"><?php
                      $terms = get_the_terms(get_the_ID(), 'blog_cate');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        echo esc_html($terms[0]->name);
                      }
                      ?>
                    </span>
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog_list/blog01.jpg" alt="アコースティックギターを弾く人">
                  <?php endif; ?>
                </div>
                <div class="p-search__body">
                  <h2 class="p-search__heading">
                    <?php echo wp_trim_words(get_the_title(), 26, '...'); ?>
                  </h2>                 
                   <time class="p-search__date"  datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <p class="p-search__text c-text">
                   <?php echo wp_trim_words(get_the_content(), 120, '...'); ?></p>
                </div>
              </a>  
              <?php
              endwhile;
              ?>     

          </div>

          <div class="p-search__pagination  c-pager">
             <?php wp_pagenavi(); ?>
          </div>
          <?php else: ?>
           <div class="p-search__no-result">
            <p>検索されたキーワードにマッチする<br class="sp">記事はありませんでした。</p>
            <a onclick="history.back()" class="p-btn__main c-btn">戻る</a>
          </div>
          <?php endif; ?>
          <?php else: ?>
           <div class="p-search__no-keyword">
            <p>検索キーワードが入力されていません。</p>
            <a onclick="history.back()" class="p-btn__main c-btn">戻る</a>
          </div>
          <?php endif; ?> 
          
            
          
        </div>
      </section>

      <!-- TOPに戻るボタンのjsの修正をAIに依頼 -->
        <?php get_template_part('template-parts/fix-area'); ?>
    </main>

<?php get_footer(); ?>