"use strict";
function init() {
  // =============================
  // スライダー
  // =============================

  const swiper = new Swiper(".swiper", {
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

  // =============================
  // アコーディオン
  // =============================

  $(function () {
    const SPEED = 300; // 開閉速度

    $('.js-faq-summary').on('click', function (e) {
      e.preventDefault();

      const $summary = $(this);
      const $details = $summary.closest('details');
      const $panel = $summary.next();
      const willOpen = !$details.prop('open');

      // 他を閉じる
      $('.js-faq-summary').not($summary).removeClass('open')
        .next().stop(true).slideUp(SPEED)
        .closest('details').prop('open', false);

      if (willOpen) {
        $details.prop('open', true);
        $summary.addClass('open');
        $panel.stop(true).slideDown(SPEED, function () {
          $(this).css('display', 'flex'); // 横並び維持
        });
      } else {
        $summary.removeClass('open');
        $panel.stop(true).slideUp(SPEED, () => $details.prop('open', false));
      }
    });
  });
}

// =============================
// topに戻るボタン
// =============================

{
  const fab = document.querySelector('.c-fab');                 // .p-top-btn.c-fab
  const footer = document.querySelector('footer');
  const header = document.querySelector('.l-header') || document.querySelector('.p-header');
  const fv = document.getElementById('fv');                    // ファーストビュー（任意）
  // const BASE = 20;                                               // 通常の下余白(px)

  if (fab && footer) {


    const getBase = () => {
      const v = getComputedStyle(fab).getPropertyValue('--fab-base').trim();
      const n = parseInt(v, 10);
      return Number.isFinite(n) ? n : 20;
    };



    const setBottom = v => fab.style.setProperty('--fab-bottom', `${v}px`);

    const update = () => {
      const y = window.scrollY;
      const headerH = header?.offsetHeight ?? 0;

      const BASE = getBase();

      // 表示切替：FVがあればFV高、なければヘッダー高を基準
      const show = fv ? y > fv.offsetHeight : y > headerH;
      header?.classList.toggle('is-change', show);
      fab.classList.toggle('is-change', show);

      // === 原点：ページ上端 + ヘッダー高さ ===
      // 画面下端(絶対)とフッター上端(絶対)を、ヘッダー高さぶんだけ同じ基準に平行移動
      const viewportBottom_fromHeader = (y + window.innerHeight) - headerH;
      const footerTop_fromHeader = (footer.getBoundingClientRect().top + y) - headerH;

      // 重なり量（>0で食い込み始め）→ その分だけ bottom を持ち上げて“接地”
      const overlap = viewportBottom_fromHeader - footerTop_fromHeader;
      const bottomPx = Math.max(BASE, overlap > 0 ? overlap : 0);

      setBottom(bottomPx);
    };

    window.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update, { passive: true });
    if ('ResizeObserver' in window) new ResizeObserver(update).observe(footer);
    update();

    // トップへ（任意）
    document.querySelector('.p-top-btn__arrow')?.addEventListener('click', e => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
}

// =============================
// ハンバーガーメニュー操作
// =============================
{
  const $btn = $('.p-header__hamburger');
  const $menu = $('.p-header__items');           // ← HTML/CSSと同じクラスに
  const $links = $('.p-header__link');

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
$(init);

