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
        effect: "fade",
        autoplay: {
          delay: 4000,
        },
        speed: 2000,
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


  // ページ内＆ページ外アンカーリンク
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    
    // ページ内のアンカーリンクの場合
    if (target.length) {
      let targetY = target.offset().top - header;
      $('html,body').animate({ scrollTop: targetY }, time, 'swing');
      return false;
    }
    
    // ページ外のアンカーリンクの場合
    // URLにハッシュを保持したまま遷移
    return true; // デフォルト動作を許可
  });
  
  // ページ読み込み時にハッシュがある場合の処理
  $(function() {
    if (window.location.hash) {
      const target = $(window.location.hash);
      if (target.length) {
        const header = $('header').innerHeight();
        const targetY = target.offset().top - header;
        
        // 少し遅延させてからスクロール（ページ読み込み完了を待つ）
        setTimeout(function() {
          $('html,body').animate({ scrollTop: targetY }, 400, 'swing');
        }, 100);
      }
    }
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

  // Google Analytics スクロール追跡エラーハンドリング
  $(function() {
    // スクロール追跡のエラーをキャッチ
    if (window.dataLayer) {
      const originalPush = window.dataLayer.push;
      window.dataLayer.push = function(...args) {
        try {
          return originalPush.apply(this, args);
        } catch (error) {
          console.warn('Google Analytics イベント送信エラー:', error);
          // エラーが発生しても処理を継続
        }
      };
    }
  });

});

window.addEventListener('load', function() {
    document.body.classList.add('loaded');
  });



// gsap.registerPlugin(ScrollTrigger);

// window.addEventListener('load', function() {
//   document.body.classList.add('loaded');

//   setTimeout(function() {
//     // 画面内に入っていない要素だけopacity: 0にする
//     document.querySelectorAll('.js-fade-up, .js-fade-up-parent > *').forEach(function(el) {
//       const rect = el.getBoundingClientRect();
//       // 画面下にある要素だけopacity: 0
//       if (rect.top > window.innerHeight) {
//         el.style.opacity = '0';
//         el.style.transform = 'translateY(20%)';
//       }
//     });

//     // ScrollTriggerでアニメーション
//     ScrollTrigger.batch(".js-fade-up", {
//       onEnter: (elements, triggers) => {
//         gsap.to(elements, { 
//           y: 0, 
//           opacity: 1, 
//           duration: 1,
//           onComplete: function() {
//             elements.forEach(el => {
//               el.style.removeProperty('opacity');
//               el.style.removeProperty('transform');
//             });
//           }
//         });
//       },
//       start: "top 70%",
//       once: true,
//     });

//     ScrollTrigger.batch(".js-fade-up-parent > *", {
//       onEnter: (elements, triggers) => {
//         gsap.to(elements, { 
//           y: 0, 
//           opacity: 1, 
//           duration: 1,
//           onComplete: function() {
//             elements.forEach(el => {
//               el.style.removeProperty('opacity');
//               el.style.removeProperty('transform');
//             });
//           }
//         });
//       },
//       start: "top 70%",
//       once: true,
//     });
//   }, 800);
// });