// main.js

jQuery(function ($) {


  const scrollToTopButton = $(".js-scrollToTop");
  scrollToTopButton.on("click", () => {
    import("./components/scroll-to-top.js").then((module) => {
      module.init(scrollToTopButton);
    });
  });


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


  /// mv画像swiperフェードアウト /////
  // const mvSwiper = new Swiper(".js-swiper-mv", {
  //   loop: true,
  //   effect: "fade",
  //   autoplay: {
  //     delay: 4000,
  //     disableOnInteraction: false,
  //   },
  //   speed: 2000,
  // });



  ///// * ズームアウト */////
  $(function() {
    // ページが読み込まれた後に実行されるコード
    $(".js-mv-sub").each(function () {
      // アニメーションを適用したい要素にスタイルを設定
      $(this).css("animation", "zoomOut 1s ease-out forwards");
    });
  });

  ///// 下からフェードイン /////
  $(".js-fade-up").css("opacity", 0);
  ScrollTrigger.batch(".js-fade-up", {
    onEnter: (elements, triggers) => {
      gsap.set(elements, { y: "20%", opacity: 0 });
      gsap.to(elements, { y: 0, opacity: 1, duration: 1 }); // アニメーション時間を1秒に変更
    },
    start: "top 60%", // スクロール開始位置を少し下にずらす（60%の位置で開始）
    once: true,
  });

  ///// 左からフェードイン /////
  $(".js-fade-left").css("opacity", 0);
  ScrollTrigger.batch(".js-fade-left", {
    onEnter: (elements, triggers) => {
      gsap.set(elements, { x: "-20%", opacity: 0 }); // 左に移動させる
      gsap.to(elements, { x: 0, opacity: 1, duration: 1 }); // 左からフェードインする
    },
    start: "top 70%", // スクロール開始位置を少し下にずらす（70%の位置で開始）
    once: true,
  });

  //// ContactForm7エラー箇所までスクロール
  $(function() {
    const $wpcf7El = $(".wpcf7");

    if ($wpcf7El.length) {
      $wpcf7El.on("wpcf7invalid", function() {
        const SCROLL_SPEED = 1000;
        const SCROLL_DELAY = 100;
        const $header = $("header");

        setTimeout(function() {
          const $firstErrorEl = $(".wpcf7-not-valid").first();
          if (!$firstErrorEl.length) return;

          const scrollAmount = $firstErrorEl.offset().top - $header.innerHeight();

          $("html, body").animate({
            scrollTop: scrollAmount
          }, SCROLL_SPEED, "swing");
        }, SCROLL_DELAY);
      });
    }
  });

  ////// メニューホバーでメニュー表示 PC
  $(function() {
    const $pcNavMenu = $('header').find('.js-pc-nav-menu');
    const $pcNavOpen = $('.js-pc-nav-open');

    // デフォルトで非表示に設定
    gsap.set($pcNavMenu, { 
      opacity: 0,
      display: 'none'
    });

    // ホバーでメニューを表示・非表示にする
    $pcNavOpen.hover(
      function() {
        gsap.set($pcNavMenu, { display: 'grid' });
        gsap.to($pcNavMenu, {
          opacity: 1,
          duration: 0.3,
          ease: 'power2.out'
        });
      },
      function() {
        if (!$pcNavMenu.is(':hover')) {
          gsap.to($pcNavMenu, {
            opacity: 0,
            duration: 0.3,
            ease: 'power2.inOut',
            onComplete: () => {
              gsap.set($pcNavMenu, { display: 'none' });
            }
          });
        }
      }
    );

    $pcNavMenu.hover(
      function() {
        gsap.set($pcNavMenu, { display: 'grid' });
        gsap.to($pcNavMenu, {
          opacity: 1,
          duration: 0.3,
          ease: 'power2.out'
        });
      },
      function() {
        if (!$pcNavOpen.is(':hover')) {
          gsap.to($pcNavMenu, {
            opacity: 0,
            duration: 0.3,
            ease: 'power2.inOut',
            onComplete: () => {
              gsap.set($pcNavMenu, { display: 'none' });
            }
          });
        }
      }
    );
  });


  // ////// アコーディオン //////
  $(function () {
    // 初期状態ですべてのコンテンツを非表示に
    $('.js-accordion-body').hide();

    $('.js-accordion-open').on('click', function (event) {
      event.preventDefault();
      $(this).toggleClass('active');
      const details = $(this).parent();
      const content = $(this).next('.js-accordion-body');

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



  ///// スクロール時にボタンを表示＆非表示 /////
  $(function() {
    const $pageTop = $('.js-page-top');
    const $mv = $('.p-mv');
    $pageTop.hide();

    // スクロールイベントの最適化（パフォーマンス向上）
    $(window).on('scroll', function() {
      // スクロールイベントを間引く
      window.requestAnimationFrame(function() {
        const mvHeight = $mv.outerHeight();
        const scrollTop = $(window).scrollTop();

        if (scrollTop < mvHeight) {
          $pageTop.fadeOut(700);
        } else {
          $pageTop.fadeIn(700);
        }
      });
    });

    // ページトップボタンのクリックイベント
    $pageTop.on('click', function(e) {
      e.preventDefault(); // return falseより推奨
      $('html, body').animate({
        scrollTop: 0
      }, 300, 'swing');
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


  //  gsapの基本構文
  //  gsap.fromTo (
  //   // ターゲット(どの要素を動かすのか)
  //   '.js-sample',
  //   // 最初の状態
  //   {
  //     opacity: 0,
  //   }
  //   ,
  //   // 最後の状態
  //   {
  //     opacity: 1,
  //     duration: 3,
  //     ease: "power1.out",
  //   }
  //  )


  // 上の実装をスクロールトリガーと合わせた場合
  // gsap.set('.js-sample', { opacity: 0 }); // 初期状態を設定

  // ScrollTrigger.create({
  //   trigger: '.js-sample',
  //   start: 'top 80%', // スクロール開始位置を少し下にずらす（80%の位置で開始）
  //   once: true,
  //   onEnter: () => {
  //     gsap.fromTo (
  //       // ターゲット(どの要素を動かすのか)
  //       '.js-sample',
  //       // 最初の状態
  //       {
  //         opacity: 0,
  //       }
  //       ,
  //       // 最後の状態
  //       {
  //         opacity: 1,
  //         duration: 3,
  //         ease: "power1.out",
  //       }
  //     )
  //   }
  // })


});

