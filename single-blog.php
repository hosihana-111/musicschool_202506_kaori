<?php get_header(); ?>

    <main>
      <!-- パンくずリスト -->
      
      <?php get_template_part('template-parts/breadcrumbs'); ?>

      <!-- ブログ -->
      <div class="p-blog-details l-inner">

        <div class="p-blog-details__main">

        <?php
         if (have_posts()):
         while (have_posts()):
         the_post();
        ?>
          <!-- メイン記事 -->
          <article id="article" class="p-blog-details__article">

            <!-- ブログ詳細 -->
            <div class="p-blog-details__box">
              <!-- 記事01 -->
              <div class="p-blog-details__img">
                <span class="c-label">
                  <?php
                  $terms = get_the_terms(get_the_ID(), 'blog_cate');
                 if (!empty($terms) && !is_wp_error($terms)) {
                  echo esc_html($terms[0]->name);
                 }?>
                </span>
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/blog01.jpg" alt="アコースティックギターを弾く人">
              <?php endif; ?>
              </div>
              <h1 class="p-blog-details__title"><?php the_title(); ?></h1>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>

              <!--  SNSボタン -->
              <div class="p-blog-details__sns">
                <?php
                $url = urldecode(get_permalink());
                $title = urldecode(get_the_title());
                ?>
                <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url); ?>" target="_blank" rel="noopener noreferrer"  class="p-blog-details__sns-btn p-blog-details__sns-btn--fb u-opacity">
                  <span class="p-blog-details__sns-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/icon-share-facebook.svg" alt="facebook">
                  </span>
                  <span class="p-blog-details__sns-name sp-none">Facebook</span>                  
                </a>
                <a href="<?php echo esc_url('https://x.com/share?url=' . $url . '&text=' . $title); ?>"  target="_blank" rel="noopener noreferrer" class="p-blog-details__sns-btn p-blog-details__sns-btn--tw u-opacity">
                  <span class="p-blog-details__sns-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/icon-share-twitter.svg" alt="twitter">
                  </span>
                  <span class="p-blog-details__sns-name sp-none">Twitter</span>                  
                </a>
                <a href="<?php echo esc_url('http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title); ?>" target="_blank" rel="noopener noreferrer" class="p-blog-details__sns-btn p-blog-details__sns-btn--hatena u-opacity">
                  <span class="p-blog-details__sns-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/icon-share-hatena.svg" alt="hatena">
                  </span>
                  <span class="p-blog-details__sns-name sp-none">Hatena</span>                  
                </a>
                <a href="<?php echo esc_url('https://social-plugins.line.me/lineit/share?url=' . $url); ?>" target="_blank" rel="noopener noreferrer" class="p-blog-details__sns-btn p-blog-details__sns-btn--line u-opacity">
                  <span class="p-blog-details__sns-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/icon-share-line.svg" alt="line">
                  </span>
                  <span class="p-blog-details__sns-name sp-none">Line</span>                  
                </a>
                <a href="<?php echo esc_url('https://getpocket.com/edit?url=' . $url . '&title=' . $title); ?>" target="_blank" rel="noopener noreferrer" class="p-blog-details__sns-btn p-blog-details__sns-btn--pocket u-opacity">
                  <span class="p-blog-details__sns-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/icon-share-pocket.svg" alt="pocket">
                  </span>
                  <span class="p-blog-details__sns-name sp-none">Pocket</span>                  
                </a>

              </div>

              <!-- 記事本文 -->
               <div class="p-blog-details__content">
              
                <?php the_content(); ?>             

              </div>

              <!-- 前後記事ナビ -->
               
                <?php get_template_part('template-parts/single-pagination'); ?>
            </div>
            <!-- 関連記事 -->
             
            <?php get_template_part('template-parts/related-articles'); ?>
            
          </article>

        <?php
        endwhile;
        endif;
        ?>

          <!-- サイドバー -->
            <?php get_sidebar(); ?>
          
        </div>
      </div>

    <?php get_template_part('template-parts/fix-area'); ?>
    </main>

<?php get_footer(); ?>

