

// スライダー
$(function() {
  $('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    cssEase: 'ease-in-out',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
    ]
  });
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