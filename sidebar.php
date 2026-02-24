<!-- サイドバー -->
            <aside class="p-blog-details__aside p-sidebar">
              <!-- 無料メールマガジン -->
              <div class="p-sidebar__box">
                <p class="p-sidebar__title">無料メールマガジン</p>
                <div class="p-sidebar__magazine">

                  <a href="" class="u-opacity">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/magazine.jpg" alt="無料メールマガジン">
                    <p>バナー広告</p>
                  </a>

                </div>
              </div>
              <!-- ブログ内を検索 -->
              <div class="p-sidebar__box">
                <p class="p-sidebar__title">ブログ内を検索</p>
                <div class="p-sidebar__search">
                  <form class="p-sidebar__search-form" action="./search.html" method="get">
                    <input type="text" aria-label="ブログ内検索" name="s" placeholder="検索ワード">
                    <button type="submit" class="u-opacity">
                      <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/icon-search.svg" alt="検索">
                      </span>
                    </button>
                  </form>
                </div>
              </div>

              <!-- おすすめの記事投稿 -->
              <div class="p-sidebar__box">
                <p class="p-sidebar__title">おすすめの記事</p>

                <div class="p-sidebar__recommendation-items">
                  
                   <?php
                    $args = array(
                      'posts_per_page' => 3,
                      'post_type' => 'blog',
                     'taxonomy' => 'blog_recommend',
                     'term' => 'recommend',
                      'orderby' => 'date',
                      'order' => 'DESC'
                    );
                     $the_query = new WP_Query($args);
                    if ($the_query->have_posts()):
                    while ($the_query->have_posts()): $the_query->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" class="p-sidebar__recommendation-item u-opacity">
                      <div class="p-sidebar__recommendation-item__img">
                        <?php if (has_post_thumbnail()) : ?>
                       <?php the_post_thumbnail(); ?>
                       <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/blog01.jpg" alt="アコースティックギターを弾く人">
                      <?php endif; ?>
                      </div>
                      <p class="p-sidebar__recommendation-text"><?php echo wp_trim_words(get_the_title(), 15, '...'); ?></p>
                    </a>
                     <?php
                       endwhile;
                       wp_reset_postdata();
                      endif;
                       ?>
                                
                  
                </div>
              </div>

              <!-- カテゴリ -->
              <div class="p-sidebar__box">
                <p class="p-sidebar__title">カテゴリー</p>
                <ul class="p-sidebar__category">
                  <?php
                  $terms = get_terms([
                    'taxonomy' => 'blog_cate',
                    'hide_empty' => true,
                  ]);
                  if (!is_wp_error( $terms)&& !empty($terms)) :
                    foreach ($terms as $term) :
                     $term_link = get_term_link($term->term_id);
                    ?>
                  
                  <li>
                    <a href="<?php echo esc_url($term_link); ?>" class="u-opacity"><?php echo esc_html($term->name); ?>
                    </a>
                  </li>
                  <?php
                    endforeach;
                    endif;
                  ?>
                  </ul>
              </div>
            </aside>