<?php get_header(); ?>

    <main>
      <!-- パンくずリスト -->
      <?php get_template_part('template-parts/breadcrumbs'); ?>

      <!-- メイン記事 -->
      <?php
      if (have_posts()):
        while (have_posts()): 
          the_post();
      ?>

      <div class="p-result-details">
        <div class="l-inner">
          <article class="p-result-details__article">
            <div class="p-result-details__card p-result-card">
              <div class="p-result-card__img">
                <span class="c-label c-label--lg">
                   <?php
                    $terms = get_the_terms(get_the_ID(), 'genre');
                    if (!empty($terms) && !is_wp_error($terms)) {
                     echo $terms[0]->name;
                    }
                    ?>
                </span>
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                  <img src="./images/result_details/result01.jpg" alt="マイクを持って歌う男性の写真">
                <?php endif; ?>
              </div>
              <div class="p-result-details-card__body">
                <h1 class="p-result-details-card__text"><?php the_title(); ?></h1>
                <div  class="p-result-details-card__date">
                  <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d'); ?></time>
                </div>
                
              </div>
            </div>

            <!-- プロフィール -->
            <div class="p-result-details__profile p-result-profile">
              <table class="p-result-profile__table">
                <tr>
                  <th scope="row">名前</th>
                  <td><?php the_field('name'); ?></td>
                </tr>
                <tr>
                  <th scope="row">職業</th>
                  <td><?php the_field('job'); ?></td>
                </tr>
                <tr>
                  <th scope="row">ジャンル</th>
                  <td><?php
                      $terms = get_the_terms(get_the_ID(), 'genre');
                     echo $terms[0]->name;
                     ?>
                     </td>
                </tr>
                <tr>
                  <th scope="row">実績</th>
                  <td><?php the_field('achievements'); ?></td>
                </tr>
                <tr>
                  <th scope="row">SNS</th>
                  <td><?php the_field('sns'); ?></td>
                </tr>

              </table>
              <div class="p-result-profile__text">
                <p><?php the_content(); ?></p>
              </div>
            </div>

            <!-- 前後記事ナビ -->
            <div class="p-result-details__nav p-article-nav">           
               <?php get_template_part('template-parts/single-pagination'); ?>
            </div>

            <!-- 関連記事 -->
            <div class="p-result-details__related-posts p-related-posts">
              <?php get_template_part('template-parts/related-articles'); ?>              
            </div>
          </article>
        </div>
      
      <?php
        endwhile;
      endif;
      ?>

      <!-- TOPに戻るボタンのjsの修正をAIに依頼 -->
      
      <?php get_template_part('template-parts/fix-area'); ?>
      </div>
    </main>

<?php get_footer(); ?>

