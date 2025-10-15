"use strict";
$(document).ready(function () {


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

      // クリックを防がない（行自体を消してもOK）
      preventClicks: false,
      preventClicksPropagation: false,

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
  $(".p-faq__answer-bg").hide();
  $(".p-faq__item").on("click", function () {
    $(this).find(".p-faq-item__img").toggleClass("is-active");
    $(this).find(".p-faq__answer-bg").slideToggle(400).toggleClass("u-flex");
  });

  // });



  // =============================
  // topに戻るボタン
  // ============================= 
  const fixArea = $(".p-top-btn");
  fixArea.hide();
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 100) {
      fixArea.fadeIn();
    } else {
      fixArea.fadeOut();
    }
  });

  //画面の高さまで表示領域を広げる
  const $footer = $(".p-footer");
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
  $('.p-header__hamburger').on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $('.p-header__nav').removeClass("open");
    } else {
      $(this).addClass("active");
      $('.p-header__nav').addClass("open");
    }

  });

});

// $(init);



