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
      spaceBetween: 35, // スライド間の余白
      grabCursor: false, // カーソルがつかむ形に
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
          spaceBetween: 35 // PC用の余白
        }
      }
    });
  }

  // =============================
  // アコーディオン
  // =============================

  // $(function () {
  $(".js-faq-answer").hide();
  $(".js-faq").on("click", function () {
    $(this).toggleClass("is-active");
    $(this).find(".js-faq-answer").slideToggle(400);
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

    // --- footerに被ったらborder-bottomを消す---
    const $footer = $(".p-footer");
    const $contactBtn = $(".p-top-btn__contact");
    if ($footer.length && $contactBtn.length) {
      const scrollBottom = $(this).scrollTop() + $(this).height();
      const footerTop = $footer.offset().top;
      if (scrollBottom >= footerTop) {
        $contactBtn.addClass("is-over-footer");
      } else {
        $contactBtn.removeClass("is-over-footer");
      }
    }
    // 
  });

  // 画面の高さまで表示領域を広げる（リサイズ時に再計算についてAIで確認）
  const $footer = $(".p-footer");
  function adjustFooter() {
    if (!$footer.length) return;
    const footerTop = $footer.offset().top;
    const footerHeight = $footer.outerHeight();
    if (window.innerHeight > footerTop + footerHeight) {
      $footer.css({
        position: "fixed",
        width: "100%",
        top: (window.innerHeight - footerHeight) + "px",
      });
    } else {
      $footer.removeAttr("style");
    }
  }
  // 初期表示とリサイズ時に再計算（デバウンス）
  adjustFooter();
  let resizeTimer;
  $(window).on("resize", function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(adjustFooter, 150);
  });
  //画面の高さまで表示領域を広げる
  // const $footer = $(".p-footer");
  // if (window.innerHeight > $footer.offset().top + $footer.outerHeight()) {
  //   console.log($footer.offset().top);
  //   $footer.attr({
  //     style:
  //       "position:fixed; width:100%; top:" +
  //       (window.innerHeight - $footer.outerHeight()) +
  //       "px;",
  //   });
  // }


 


  // =============================
  // ハンバーガーメニュー操作
  // =============================
  $('.c-hamburger').on("click", function () {
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



