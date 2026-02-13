<?php
// -----------------------
// 最初の設定
// -----------------------
function custom_theme_setup(){
    add_theme_support('title-tag'); // (title-tag)
    add_theme_support('post-thumbnails'); // (post-thumbnails)
    add_theme_support('automatic-feed-links'); // (automatic-feed-links)
    add_theme_support(
        'html5',
         array(
            'comment-list',
             'comment-form',
              'search-form',
              'gallery',
               'caption',
               'style',
                'script')); // (html5)
    add_theme_support('wp-block-styles'); // (custom-logo)
    add_theme_support('responsive-embeds'); // (align-wide    
}
add_action('after_setup_theme', 'custom_theme_setup');


// --------------------------------------------------
//ファイル読み込み
// --------------------------------------------------
function add_files(){

    $now = date('YmdHis');

    // css
    wp_register_style('common-style', get_theme_file_uri('/css/style.css'),array(), $now);

    // 共通css
    wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), NULL);
    wp_enqueue_style('common-style');

    // WordPress提供のiquery.jsを読み込まない
    wp_deregister_script('jquery'); 
    
    
    // jqueryの読み込み
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', "",NULL,false); 

    // JS登録
    wp_register_script('common-script', get_theme_file_uri('/js/script.js'), array('jquery'), $now, true);


    // 共通のJS
    wp_enqueue_script('slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), NULL, true);
    wp_enqueue_script( 'common-script' );

    if (is_front_page()) {
        wp_enqueue_script('top-script', get_theme_file_uri('/js/top.js'), array('jquery'), $now, true);
       
    }
}
add_action('wp_enqueue_scripts', 'add_files');