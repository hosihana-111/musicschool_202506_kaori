<form class="p-sidebar__search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <input type="search" aria-label="ブログ内検索" name="s" placeholder="検索ワード">
    <button type="submit" class="u-opacity">
        <span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/blog_details/icon-search.svg" alt="検索">
        </span>
    </button>
</form>