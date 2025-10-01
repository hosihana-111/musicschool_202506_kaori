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
  $(".p-faq__answer").hide();
  $(".p-faq__item").on("click", function () {
    $(this).find(".p-faq-item__img").toggleClass("is-active");
    $(this).find(".p-faq__answer").slideToggle(400).toggleClass("u-flex");
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

  fixArea.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500 // 500ミリ秒かけてページトップに戻る
    );
    return false;
  });

  
// フッター上に停止する挙動
  const $fab = $(".p-top-btn").hide();
  const $footer = $(".l-footer");
  const BASE = 0; // ふだんの下余白(px)

  function update() {
    const st = window.pageYOffset || document.documentElement.scrollTop;
    const vh = window.innerHeight;
    const ftTop = $footer[0].getBoundingClientRect().top; // フッターの画面上端
    const overlap = Math.max(0, vh - ftTop);              // かぶり量（マイナスは0に）
    $fab.css("bottom", BASE + overlap).toggle(st > 100);
  }

  $(window).on("scroll resize", () => requestAnimationFrame(update));
  $(".p-top-btn").on("click", ".p-top-btn__arrow", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 500);
  });

  update(); // 初期実行

  // =============================
  // ハンバーガーメニュー操作
  // =============================
  $('.l-header__hamburger').on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $('.l-header__items').removeClass("open");
    } else {
      $(this).addClass("active");
      $('.l-header__items').addClass("open");
    }

  });

});

// $(init);



