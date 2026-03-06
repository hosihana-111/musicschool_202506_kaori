<?php get_header(); ?>

    <main>
      <!-- FV -->
      <div id="fv" class="p-fv">
        <div class="p-fv__img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/fv/fv_pc.jpg" media="(min-width: 768px)" type="image/jpeg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/fv/fv_sp.jpg" alt="「音楽で生きる」を叶えるミュージックスクール">
          </picture>
        </div>
        <div class="p-fv__contents">
          <h2 class="p-fv__contents-text">
            「音楽で生きる」<br class="sp"> を叶える<br>ミュージックスクール
          </h2>
        </div>
      </div>

      <!-- ビジョン -->
      <section id="vision" class="p-top-vision p-vision">
        <div class="p-vision__inner l-inner">
          <div class="p-vision__contents">
            <h2 class="p-vision__title">全人類、<br class="sp">ミュージシャン計画。</h2>
            <p class="p-vision__subtitle">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
          </div>
          <div class="p-vision__diagram p-diagram">
            <div class="p-diagram-img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/vision/semicircle.jpg" media="(min-width: 768px)" type="image/jpeg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/vision/semicircle-sp.jpg" alt="半円の図に『Enthusiasm・Envision・Effulgent』の3語が並ぶビジョン図">
              </picture>
            </div>

            <div class="p-diagram__items">
              <div class="p-diagram__item p-diagram-item">
                <div class="p-diagram-item__en">Enthusiasm</div>
                <div class="p-diagram-item__dot"></div>
                <div class="p-diagram-item__jp">熱狂し</div>
              </div>
              <div class="p-diagram__item p-diagram-item">
                <div class="p-diagram-item__en">Envision</div>
                <div class="p-diagram-item__dot"></div>
                <div class="p-diagram-item__jp">想像し</div>
              </div>
              <div class="p-diagram__item p-diagram-item">
                <div class="p-diagram-item__en">Effulgent</div>
                <div class="p-diagram-item__dot"><span></span></div>
                <div class="p-diagram-item__jp">輝く存在へ</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- message-->
      <section id="message" class="p-message section-bg">
        <div class=" l-inner">
          <h2 class="c-top-title c-top-title--white">音楽業界初！<br><span class="u-br">収益化までサポートする</span>
            <span class="u-br">ミュージックスクール</span>
          </h2>
          <p class="p-message__text">
            楽器や作詞作曲などの<span class="u-br">技術・知識はもちろんのこと</span><br>
            <span class="u-br">自分で稼ぎつづけるための</span><span class="u-br">ビジネス面もサポートします！</span>
          </p>
        </div>
      </section>

      <!-- 選ばれる理由-->
      <section id="reason" class="p-top-reason">
        <div class="l-inner">
          <h2 class="c-top-title">きたむらミュージック<br class="sp">スクールが選ばれる理由</h2>
          <div class="p-top-reason__items">
            <div class="p-top-reason__item p-reason-item">
              <div class="p-reason-item__image">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason/reason01-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/reason/reason01-sp.jpg" alt="ピアノを演奏する講師と犬">
                </picture>
              </div>
              <div class="p-reason-item__content">
                <h3 class="p-reason-item__title">
                  技術面はプロによるマンツーマン授業！
                </h3>
                <p class="p-reason-item__text c-text">
                  第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。
                </p>
              </div>
            </div>
            <div class="p-top-reason__item p-reason-item">
              <div class="p-reason-item__image">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason/reason02-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/reason/reason02-sp.jpg" alt="丁寧に収益化の方法を説明する女性スタッフ">
                </picture>
              </div>
              <div class="p-reason-item__content">
                <h3 class="p-reason-item__title">
                  収益化するためのビジネスサポート！
                </h3>
                <p class="p-reason-item__text c-text">
                  コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。
                </p>
              </div>
            </div>
            <div class="p-top-reason__item p-reason-item">
              <div class="p-reason-item__image">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason/reason03-pc.jpg" media="(min-width: 768px)" type="image/jpeg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/reason/reason03-sp.jpg" alt="ギターと鍵盤を使った作曲練習">
                </picture>
              </div>
              <div class="p-reason-item__content">
                <h3 class="p-reason-item__title">
                  24時間365日使える練習ROOMを完備！
                </h3>
                <p class="p-reason-item__text c-text">
                  一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。　（アプリで予約が必要です）
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 生徒さんたちの声 -->
      <section id="voice" class="p-top-voice  section-bg">
        <div class="p-top-voice__inner">
          <h2 class="c-top-title c-top-title--white">生徒さんたちの声</h2>

          <div class="p-top-voice__container p-voice__container">
            <div class="p-voice__swiper swiper">
              <div class="p-voice__swiper-wrapper swiper-wrapper">
                <?php
                // カスタム投稿タイプ「result」の最新6件を取得
                $args = array(
                    'post_type' => 'result',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="p-voice__swiper-item p-voice-item swiper-slide">
               
                  <div class="p-voice-item__img">
                     <?php if (has_post_thumbnail()) : ?>
                     <?php the_post_thumbnail(); ?>
                     <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice01.jpg" alt="証券会社勤務　丸山さん">
                        <?php endif; ?>
                  </div>
                  <div class="p-voice-item__body">
                    <h3 class="p-voice-item__title"><?php the_field('job'); ?>&emsp;<?php the_field('name'); ?>さん</h3>
                    <p class="p-voice-item__desc">
                      <?php echo wp_trim_words(get_the_content(), 42, '...'); ?>
                    </p>
                  </div>
                </a>
              <?php
                endwhile;
                endif;
                wp_reset_postdata();
                ?>             
                   
              </div>
            </div>
            <button class="p-voice__swiper-button-prev">
              <img src="<?php echo get_template_directory_uri(); ?>/images/voice/arrow-left.svg" alt="矢印">
            </button>
            <button class="p-voice__swiper-button-next">
              <img src="<?php echo get_template_directory_uri(); ?>/images/voice/arrow-right.svg" alt="矢印">
            </button>
          </div>
        </div>
      </section>

      <!-- ご利用の流れ -->

      <section id="flow" class="p-top-flow">
        <div class="l-inner">
          <h2 class="c-top-title">ご利用の流れ</h2>
          <div class="p-top-flow__items p-flow__items">
            <div class="p-flow__item p-flow-item">
              <div class="p-flow-item__label">
                <h3>お問い合わせ</h3>
              </div>
              <div class="p-flow-item__desc">
                <p class="c-text">まずはフォームまたはメールにてお問い合わせください。<br>ヒアリングの日程を調整します。</p>
              </div>
            </div>

            <div class="p-flow__item p-flow-item">
              <div class="p-flow-item__label">
                <h3>ヒアリング</h3>
              </div>
              <div class="p-flow-item__desc">
                <p class="c-text">現在の技術面や将来の目標などをお伺いします。<br>
                  悩みや不安な事もお気軽にご相談ください。
                </p>
              </div>
            </div>

            <div class="p-flow__item p-flow-item">
              <div class="p-flow-item__label">
                <h3>プランのご提案</h3>
              </div>
              <div class="p-flow-item__desc">
                <p class="c-text">
                  ライフスタイルや目標によって最適なプランをご提案します。<br>
                  継続できるようサポートいたします。
                </p>
              </div>
            </div>

            <div class="p-flow__item p-flow-item">
              <div class="p-flow-item__label">
                <h3>ご入学</h3>
              </div>
              <div class="p-flow-item__desc">
                <p class="c-text">
                  お申し込み完了後、レッスンがスタートします。<br>
                  マンツーマン指導なので、いつからでもスタートが可能です。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- よくあるご質問 -->
      <section id="faq" class="p-top-faq p-faq">
        <div class="l-inner">
          <h2 class="c-top-title">よくあるご質問</h2>
          <div class="p-faq__container">
            <div class="p-faq__accordion p-faq-accordion ">
              <div class="p-faq-accordion__items">

                <dl class="p-faq-accordion__item p-faq-item  js-faq">
                  <dt class="p-faq-item__question">
                    <p class="p-faq-item__text">どのような生徒さんがどれぐらいの期間で稼いでいますか？</p>
                  </dt>
                  <dd class="p-faq-item__answer js-faq-answer">
                    <p class="p-faq-item__text">コンテンツが入ります。</p>
                  </dd>
                </dl>

                <dl class="p-faq-accordion__item p-faq-item  js-faq">
                  <dt class="p-faq-item__question">
                    <p class="p-faq-item__text">途中でプランを変更することは可能ですか？</p>
                  </dt>
                  <dd class="p-faq-item__answer js-faq-answer">
                    <p class="p-faq-item__text">途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。</p>
                  </dd>
                </dl>

                <dl class="p-faq-accordion__item p-faq-item  js-faq">
                  <dt class="p-faq-item__question">
                    <p class="p-faq-item__text">入学金などの分割払いはできますか？</p>
                  </dt>
                  <dd class="p-faq-item__answer js-faq-answer">
                    <p class="p-faq-item__text">コンテンツが入ります。</p>
                  </dd>
                </dl>

                <dl class="p-faq-accordion__item p-faq-item  js-faq">
                  <dt class="p-faq-item__question">
                    <p class="p-faq-item__text">休学することも可能ですか？</p>
                  </dt>
                  <dd class="p-faq-item__answer js-faq-answer">
                    <p class="p-faq-item__text">コンテンツが入ります。</p>
                  </dd>
                </dl>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ブログ -->
      <section id="blog" class="p-top-blog">
        <div class="l-inner">
          <h2 class="c-top-title">ブログ</h2>
          <div class="p-top-blog__items">

            <!-- <div class="p-top-blog__item p-blog-item"> -->
                <?php
                // カスタム投稿タイプ「blog」の最新3件を取得
                $args = array(
                    'post_type' => 'blog',
                    'taxonomy' => 'blog_recommend', 
                    'term' => 'recommend', 
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()):
                while ($the_query->have_posts()): $the_query->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="u-opacity">
                  <div class="p-blog-item__img">
                     <span class="c-label">
                      <?php
                        $terms = get_the_terms(get_the_ID(), 'blog_cate');
                        if (!empty($terms) && !is_wp_error($terms)) {
                         echo esc_html($terms[0]->name);
                          }
                          ?>
                  </span>
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/blog01.jpg" alt="アコースティックギターを弾く人">
                    <?php endif; ?>
                  </div>
                  <div class="p-blog-item__body">
                    <h3 class="p-blog-item__title"><?php echo wp_trim_words(get_the_title(), 15, '...'); ?></h3>
                    <time class="p-blog-item__date" datetime="0000-00-00">0000.00.00</time>
                  </div>
                </a>
                <?php
                endwhile;
                endif;                
                wp_reset_postdata();
                ?>
            <!-- </div>            -->
          
          </div>
          <div class="p-top-blog__more">
            <a href="<?php echo esc_url(home_url('blog')); ?>" class="u-opacity">ブログ一覧へ</a>
          </div>
        </div>
      </section>

    <?php get_template_part('template-parts/fix-area'); ?>
    </main>

<?php get_footer(); ?>

