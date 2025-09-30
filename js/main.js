"use strict";
jQuery(function ($) {


  // function init() {
  // =============================
  // スライダー
  // =============================
  if (typeof Swiper !== "undefined" && document.querySelector(".swiper")) {


    // const swiper = 
    new Swiper(".swiper", {
      loop: true, // ループ
      speed: 1000, // 少しゆっくり(デフォルトは300)
      slidesPerView: 3, // 一度に表示する枚数  
      spaceBetween: 35,
      grabCursor: true,
      watchOverflow: true,
      // autoplay: { // 自動再生
      //   delay: 2000, // 2秒後に次のスライド
      //   disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
      // },

      // 前後の矢印
      navigation: {
        nextEl: ".p-voice__swiper-button-next",
        prevEl: ".p-voice__swiper-button-prev",
      },

      // スライド内の<a>をクリックできるように
      preventClicks: true,
      preventClicksPropagation: true,

      // 画面幅ごとの設定
      breakpoints: {
        // 767px以下（SP）の場合
        0: {
          slidesPerView: 1,
          spaceBetween: 20 // SP用の余白
        },
        // 768px以上（PC・タブレット）
        768: {
          slidesPerView: 3,
          spaceBetween: 35
        }
      }
    });
  }

  // =============================
  // アコーディオン
  // =============================

  // $(function () {
    $(".p-faq__answer").hide();
    $(".p-faq__item").on("click", function () {
      $(this).find(".p-faq-item__img").toggleClass("is-active");
      $(this).find(".p-faq__answer").slideToggle(400).toggleClass("u-flex");
    });

  // });



  // =============================
  // topに戻るボタン
  // =============================
  // $(function () {
  // const fixArea = $(".p-top-btn");
  // $(window).on("scroll", function () {
  //   if ($(this).scrollTop() > 100) {
  //     fixArea.fadeIn();
  //   } else {
  //     fixArea.fadeOut();
  //   }
  // });
   const $fab = $(".p-top-btn");
  $(window).on("scroll", function () {
    $fab.toggle($(this).scrollTop() > 100);
  });
  $(".p-top-btn__arrow").on("click", function (e) {
    e.preventDefault();
    // 好みでanimateでもOK
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  // 画面の高さまで表示領域を広げる
  const $footer = $(".l-footer");
  if (window.innerHeight > $footer.offset().top + $footer.outerHeight()) {
    console.log($footer.offset().top);
    $footer.attr({
      style:
        "position:fixed; width:100%; top:" +
        (window.innerHeight - $footer.outerHeight()) +
        "px;",
    });
  }







  // =============================
  // ハンバーガーメニュー操作
  // =============================
  {
    const $btn = $('.l-header__hamburger');
    const $menu = $('.l-header__items');           // ← HTML/CSSと同じクラスに
    const $links = $('.l-header__link');

    // 初期A11y属性（任意）
    $btn.attr({ 'aria-controls': 'global-nav', 'aria-expanded': 'false' });

    $btn.on('click', function (e) {
      e.preventDefault();
      const open = $(this).toggleClass('active').hasClass('active');
      $menu.toggleClass('active', open);
      $('body').toggleClass('is-menu-open', open);
      $btn.attr('aria-expanded', open);
    });

    // メニュー内のリンククリックで閉じる
    $links.on('click', function () {
      $btn.removeClass('active').attr('aria-expanded', 'false');
      $menu.removeClass('active');
      $('body').removeClass('is-menu-open');
    });
  }
})

// $(init);



