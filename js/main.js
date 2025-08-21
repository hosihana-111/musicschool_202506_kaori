

// スライダー
const swiper = new Swiper(".swiper", {
  loop: true, // ループ
  speed: 2000, // 少しゆっくり(デフォルトは300)
  slidesPerView: 3, // 一度に表示する枚数  
  spaceBetween:35,
  autoplay: { // 自動再生
    delay: 2000, // 2秒後に次のスライド
    disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
  },
  
  // 前後の矢印
  navigation: {
    nextEl: ".p-top-voice__swiper-button-next",
    prevEl: ".p-top-voice__swiper-button-prev",
    
  },

  // 画面幅ごとの設定
  breakpoints: {
    // 767px以下（SP）の場合
    0: {
      slidesPerView: 1,
      spaceBetween: 20, // SP用の余白
    },
    // 768px以上（PC・タブレット）
    768: {
      slidesPerView: 3,
      spaceBetween: 35,
    }
  }
});


// アコーディオン
$(function () {
    // タイトルをクリックすると
    $(".js-accordion-title").on("click", function () {
      // クリックしたタイトル以外のopenクラスを外す(－から＋にする)
      $(".js-accordion-title").not(this).removeClass("open");
      // クリックしたタイトル以外のコンテンツを閉じる
      $(".js-accordion-title").not(this).next().slideUp(300);
      // クリックしたタイトルにopenクラスを付け外しして＋と－を切り替える
      $(this).toggleClass("open");
      // クリックしたタイトルの次の要素(コンテンツ)を開閉
      $(this).next().slideToggle(300);
    });
  });



   // topに戻るボタン
document.addEventListener('DOMContentLoaded', function () {
  // fvの高さを取得
  const fv = document.getElementById('fv');
  const pageTop = document.querySelector('.c-page-top');
  const contactBtn = document.querySelector('.c-contact-button');
  // ヘッダーは.l-headerまたは.p-header
  const header = document.querySelector('.l-header') || document.querySelector('.p-header');
  const blogSection = document.getElementById('blog');
  const footer = document.querySelector('footer');

  // スクロールでボタン表示・ヘッダー切り替え
  window.addEventListener('scroll', () => {
    const fvHeight = fv ? fv.offsetHeight : 0;
    if (window.scrollY > fvHeight) {
      header?.classList.add('is-change');
      pageTop?.classList.add('is-change');
      contactBtn?.classList.add('is-change');
    } else {
      header?.classList.remove('is-change');
      pageTop?.classList.remove('is-change');
      contactBtn?.classList.remove('is-change');
    }

    // --- ここから下端で止まる処理 ---
    const windowHeight = window.innerHeight;
    const scrollY = window.scrollY;
    let stopY = null;

    if (footer) {
      stopY = footer.getBoundingClientRect().top + scrollY;
    }
    if (blogSection) {
      const blogBottom = blogSection.getBoundingClientRect().bottom + scrollY;
      if (!stopY || blogBottom < stopY) stopY = blogBottom;
    }

   // ボタンの高さ（
   const gap = 100;

   if (stopY && (scrollY + windowHeight) > (stopY - 10)) {
     const overlap = (scrollY + windowHeight) - stopY;
   
     // お問い合わせボタン：フッターぴったり
     contactBtn.style.bottom = `${overlap}px`;
   
     // トップボタン：お問い合わせボタンの30px上
     pageTop.style.bottom = `${overlap + gap}px`;
   } else {
     // 通常時の位置（任意で調整）
     contactBtn.style.bottom = `20px`;
     pageTop.style.bottom = `50px`; // 20px + 30px
   }
    // --- ここまで ---
  });

  
//   // トップへ戻る
  pageTop?.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
});


// =============================
  // ハンバーガーメニュー操作
  // =============================
  $('.p-header__hamburger').click(function () {
    $(this).toggleClass('active');
    $('.p-header__nav__lists').toggleClass('active');
    $('.overlay').toggleClass('is-active'); // ← 追加：オーバーレイ切り替え
  });

  // メニュー内リンクをクリックしたらメニューとオーバーレイを閉じる
  $('.p-header__nav__lists a').on('click', function () {
    $('.p-header__hamburger').removeClass('active');
    $('.p-header__nav__lists').removeClass('active');
    $('.overlay').removeClass('is-active'); // ← 追加
  });

  // オーバーレイをクリックしたらメニューとオーバーレイを閉じる
  $('.overlay').on('click', function () {
    $('.p-header__hamburger').removeClass('active');
    $('.p-header__nav__lists').removeClass('active');
    $(this).removeClass('is-active'); // 自分自身を非表示
  });