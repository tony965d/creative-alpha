// main.js

jQuery(function ($) {


  $(".js-hamburger").click(function () {
    if ($(".js-hamburger").hasClass("active")) {
      $(".js-hamburger").removeClass("active");
      $(".js-hamburger").attr({
        "aria-expanded": "false",
        "aria-label": "メニューを開く",
        "title": "メニューを開く"
      });
      $(".js-sp-nav").fadeOut(500);
      $("body").css("overflow", "auto");
    } else {
      $(".js-hamburger").addClass("active");
      $(".js-hamburger").attr({
        "aria-expanded": "true",
        "aria-label": "メニューを閉じる",
        "title": "メニューを閉じる"
      });
      $(".js-sp-nav").fadeIn(500);
      $("body").css("overflow", "hidden");
    }
  });


  $(function() {
    if ($('.js-swiper-mv').length) {
      new Swiper('.js-swiper-mv', {
        slidesPerView: 1,
        loop: true,
        autoplay: {
          delay: 3000,
        },
        speed: 1000,
      });
    }
  });


  //// ContactForm7エラー箇所までスクロール
  $(function() {
    const $wpcf7El = $(".wpcf7");

    if ($wpcf7El.length) {
      $wpcf7El.on("wpcf7invalid", function() {
        const SCROLL_SPEED = 1000;
        const SCROLL_DELAY = 300; // 遅延を増やしてDOM更新を待つ
        const $header = $("header");

        setTimeout(function() {
          // エラー要素を複数のセレクタで検索
          const $firstErrorEl = $(".wpcf7-not-valid, .wpcf7-not-valid-tip").first();
          
          if (!$firstErrorEl.length) {
            console.warn('ContactForm7: エラー要素が見つかりませんでした');
            return;
          }

          // ヘッダーの高さを取得（固定ヘッダーの場合を考慮）
          const headerHeight = $header.outerHeight() || 0;
          
          // エラー要素の位置を計算
          const errorOffset = $firstErrorEl.offset();
          if (!errorOffset) {
            console.warn('ContactForm7: エラー要素の位置を取得できませんでした');
            return;
          }

          const scrollAmount = errorOffset.top - headerHeight - 40; // 20pxの余白を追加

          // スクロール実行
          $("html, body").animate({
            scrollTop: Math.max(0, scrollAmount) // 負の値にならないように制限
          }, SCROLL_SPEED, "swing");
        }, SCROLL_DELAY);
      });
    }
  });


  // ////// アコーディオン //////
  $(function () {
    // 初期状態ですべてのコンテンツを非表示に
    $('.js-accordion-answer').hide();

    $('.js-accordion-open').on('click', function (event) {
      event.preventDefault();
      $(this).find('.m-accordion__question-text').toggleClass('active');
      const details = $(this).parent();
      const content = $(this).next('.js-accordion-answer');

      if (details.attr('open')) {
        content.slideUp(300, function () {
          details.removeAttr('open');
        });
      } else {
        details.attr('open', true);
        content.slideDown(300);
      }
    });
  });


  ///// ページ内アンカーリンク
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });



  // headerの高さを取得してmvのpadding-topを調整
  $(function() {
    function adjustMvPadding() {
      const headerHeight = $('header').outerHeight();
      $('.l-page__content, .m-sp-nav').css('padding-top', headerHeight + 'px');
    }

    let resizeTimer;
    adjustMvPadding();

    $(window).on('resize', function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(adjustMvPadding, 250);
    });
  });


});

