<?php get_header(); ?>

    <main>
      <!-- FV -->
      <div class="p-child-fv">
        <div class="p-child-fv__img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/404/404_fv.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/404/404_fv-sp.jpg" alt="404ページ">
          </picture>
          <h1 class="p-child-fv__title">404 not fonud</h1>
        </div>
      </div>



      <!-- 404-->
      <div id="404" class="p-404">
        <div class="l-inner p-404__text">
          <p class=" c-text">
            申し訳ございませんが、お探しのページが見つかりませんでした。<br>お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。
          </p>
          <div class="p-404__btn-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-btn__main c-btn" >ホームへ戻る</a>
          </div>
        </div><!-- inner -->
      </div>

    </main>
<?php get_footer(); ?>