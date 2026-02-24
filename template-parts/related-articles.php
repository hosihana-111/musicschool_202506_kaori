<?php 
            $post_type = get_post_type();
            $post_id = get_the_ID();
          

            $taxonomy_map = [
              'blog' => 'blog_cate',
            ];

            if (!isset($taxonomy_map[$post_type])) {
             return;
            }
                $taxonomy = $taxonomy_map[$post_type];
                $terms = get_the_terms($post_id, $taxonomy);

            if (!empty($terms)):
              $term_ids = wp_list_pluck( $terms,'term_id');

              $args = [
                'posts_per_page' => 3,
                'post_type' => $post_type,
                'post__not_in' => [$post_id],
                'orderby' => 'date',
                'order' => 'DESC',
                'tax_query' => [
                  [
                    'taxonomy' => $taxonomy,
                    'field' => 'term_id',
                    'terms' => $term_ids,
                  ],
                ],
              ];

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()):
            ?>
            
             <div class="p-blog-details__related-posts p-related-posts">
              <div class="p-related-posts__title">
                <h2>関連記事</h2>
              </div>
              
              <div class="p-related-posts__items">
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <?php
                 
                $post_terms = get_the_terms(get_the_ID(), $taxonomy);
                $term_name = (!empty($post_terms))? $post_terms[0]->name : '';
                ?>
                
                  <a href="<?php the_permalink(); ?>" class="u-opacity">
                    <div class="p-related-posts__item p-related-posts-item">
                    <div class="p-related-posts__img">
                      <span class="c-label"><?php echo esc_html($term_name); ?></span>
                      <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(); ?>
                       <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog_list/blog03-sp.jpg" alt="マイクで熱唱する女性">
                      <?php endif; ?>
                    </div>
                    <div class="p-related-posts__body">
                      <div class="p-related-posts__text"> 
                        <h3><?php echo wp_trim_words(get_the_title(), 32, '...'); ?></h3>
                      </div>
                      <div class="p-related-posts__date">
                        <time  datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                      </div>
                      
                    </div>
                    </div>
                  </a>
                  <?php endwhile;
                   wp_reset_postdata(); ?>
                         

                
              </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>