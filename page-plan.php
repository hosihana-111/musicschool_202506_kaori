<?php get_header(); ?>

    <main>
      <!-- FV -->
      <div class="p-child-fv">
        <div class="p-child-fv__img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/plan/plan-fv.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/plan/plan-fv_sp.jpg" alt="プラン・料金">
          </picture>
          <h1 class="p-child-fv__title">プラン・料金</h1>
        </div>
      </div>

       <!-- パンくずリスト -->
      <?php get_template_part('template-parts/breadcrumbs'); ?>

      <!-- 料金 -->

      <!-- 料金体系 -->
      <section id="plan-pricing" class="p-plan-pricing p-pricing">
        <div class="l-inner">
          <h2 class="c-section-title">料金体系</h2>
          <div class="p-pricing__items">
            <p class="p-pricing__item is-entrance">入会金 39,000円</p>
            <span class="p-pricing__item-plus"></span>
            <p class="p-pricing__item is-monthly">月額料金</p>
          </div>
          <p class="p-pricing__description c-text">
            きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。
          </p>
        </div>
      </section>

      <!-- プラン内容・月額料金 -->
      <section id="plan-details" class="p-plan-details">
        <div class="l-inner">
          <h2 class="c-section-title">プラン内容・月額料金</h2>
          <div class="p-plan-details__container">

            <div class="p-plan-details__table-inner">
              <table class="p-plan-details__table p-plan-table">
                <thead class="p-plan-table__head">
                  <tr>
                    <th></th>
                    <th class="p-plan-table__blank"></th>
                    <th class="is-recommend" rowspan="2">
                      <div class="th-inner-red">
                        <p>
                          <span>おすすめ</span>
                          <br>スタンダード<br class="sp">プラン
                        </p>
                      </div>
                    </th>
                    <th class=" p-plan-table__blank"></th>
                  </tr>
                  <tr>
                    <th></th>
                    <th>
                      <div class="th-inner">
                        <p>ベーシック<br class="sp">プラン</p>
                      </div>
                    </th>
                    <th>
                      <div class="th-inner">
                        <p>プレミアム<br class="sp">プラン</p>
                      </div>
                    </th>
                  </tr>
                </thead>

                <tbody class="p-plan-table__body">
                  <tr class="p-plan-table__price">
                    <th>月額料金</th>
                    <td>39,000円</td>
                    <td><span class="red">59,000円</span></td>
                    <td>128,000円</td>
                  </tr>
                  <tr>
                    <th>マンツーマン授業</th>
                    <td>
                      <span class="c-circle"></span>
                      <p>週１回</p>
                    </td>
                    <td>
                      <span class="c-circle c-circle--red"></span>
                      <p>週２回</p>
                    </td>
                    <td>
                      <span class="c-circle"></span>
                      <p>無制限</p>
                    </td>
                  </tr>
                  <tr>
                    <th>ビジネス基本講座</th>
                    <td><span class="c-circle"></span></td>
                    <td><span class="c-circle c-circle--red"></span></td>
                    <td><span class="c-circle"></span></td>
                  </tr>
                  <tr>
                    <th>練習ROOM利用</th>
                    <td>
                      <span class="c-circle"></span>
                      <p>月10時間</p>
                    </td>
                    <td>
                      <span class="c-circle c-circle--red"></span>
                      <p>月20時間</p>
                    </td>
                    <td>
                      <span class="c-circle"></span>
                      <p>無制限</p>
                    </td>
                  </tr>
                  <tr>
                    <th>ビジネスコンサル</th>
                    <td>
                      <span class="hyphens"></span>
                    </td>
                    <td>
                      <span class="c-circle c-circle--red"></span>
                      <p>月２回</p>
                    </td>
                    <td><span class="c-circle"></span>
                      <p>月３回</p>
                    </td>
                  </tr>
                  <tr>
                    <th>コミュニティ<br class="sp">参加資格</th>
                    <td><span class="hyphens"></span></td>
                    <td><span class="hyphens"></span></td>
                    <td><span class="c-circle"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <p class="p-plan-details__pricing-text">※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。</p>
          </div>
        </div>
      </section>

    <?php get_template_part('template-parts/fix-area'); ?>
    </main>

<?php get_footer(); ?>

