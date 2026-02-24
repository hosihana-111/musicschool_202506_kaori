
<?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();

                if (is_singular('result')) {
               $add_class_result = 'p-article-nav';
               }
               ?>

                
              <div class="p-blog-details__article-nav p-article-nav <?php echo $add_class_result; ?>">
                <div class="p-article-nav__item-prev">
                  <?php if (!empty($prev_post)): ?>
                  <a href="<?php echo get_permalink($prev_post->ID); ?>" class="u-opacity">
                    <div class="p-article-nav__heading-prev">
                      <span>◀︎</span>
                      <p>前の記事</p>
                    </div>
                    <div class="p-article-nav__box">
                      <div class="p-blog-details__box-img p-article-nav__box-img">
                        <?php if (has_post_thumbnail($prev_post->ID)): ?>
                        <?php echo get_the_post_thumbnail($prev_post->ID); ?>
                        <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/article.jpg" alt="マイクで熱唱する女性">
                      <?php endif; ?>
                      </div>
                      <p class="p-article-nav__box-text"><?php echo wp_trim_words($prev_post->post_title, 25, '...'); ?></p>
                    </div>
                  </a>
                  <?php endif; ?>
                </div>
                <div class="p-article-nav__item-next">
                  <?php if (!empty($next_post)): ?>
                  <a href="<?php echo get_permalink($next_post->ID); ?>" class="u-opacity">
                    <div class="p-article-nav__heading-next">                
                      <p>次の記事</p>
                      <span>▶︎</span>
                    </div>
                    <div class="p-article-nav__box">
                      <div class="p-blog-details__box-img p-article-nav__box-img">
                        <?php if (has_post_thumbnail($next_post->ID)): ?>
                        <?php echo get_the_post_thumbnail($next_post->ID); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/article.jpg" alt="マイクで熱唱する女性">
                         <?php endif; ?></div>
                      <p class="p-article-nav__box-text"><?php echo wp_trim_words($next_post->post_title, 25, '...'); ?></p>
                    </div>
                  </a>
                  <?php endif; ?>
                </div>
              </div>