<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-53G2S9S');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
	
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "株式会社クリエイティブアルファ",
            "url": "https://www.cafc.jp/",
            "description": "クリエイティブアルファは小売・飲食業などの企業様、ショッピングモールのテナント様向けに研修サービスを提供しております。スタッフの育成に関する課題をヒアリングし、課題解決に最も効果的な研修をオーダーメイドで企画いたします。"
        }
    </script>
	
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "株式会社クリエイティブアルファ",
            "url": "https://www.cafc.jp/",
            "logo": "https://www.cafc.jp/wp-content/themes/creative-alpha/assets/images/common/header-logo.png",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "浜松町1-2-14　ユーデン浜松町ビル2F",
                "addressLocality": "港区",
                "addressRegion": "東京都",
                "postalCode": "105-0013",
                "addressCountry": "JP"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+81-3-6402-7573",
                "contactType": "customer service",
                "availableLanguage": ["Japanese"]
            }
        }
    </script>

	
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53G2S9S"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="l-page">
    <div class="l-page__header">
      <header class="m-header">
        <div class="m-header__inner l-inner">
          <div class="m-header__wrapper l-two-columns">
            <div class="m-header__item l-two-columns__item">
              <div class="m-header__left l-two-columns__left">
                <a href="<?php echo get_esc_home_url('/'); ?>" class="m-header__logo u-hover">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/header-logo.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/header-logo.png" alt="クリエイティブアルファ" width="295" height="35" loading="lazy">
                  </picture>
                </a>
                <p class="m-header__note">
                  【調査員募集について】<br>
                  弊社、調査員は専門調査員となりますので、一般の方の調査員募集はしておりません。
                </p>
              </div>
              <div class="m-header__right l-two-columns__right">
                <div class="m-tel-unit">
                  <a href="tel:03-6402-7573" class="m-tel-unit__link m-tel-unit__link--header"><span class="m-tel-unit__icon m-tel-unit__icon--header"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/tel-icon.svg" alt="" width="21" height="21" loading="lazy"></span>03-6402-7573</a>
                  <p class="m-tel-unit__text m-tel-unit__text--header">受付時間 平日 10:00〜18:00</p>
                </div>
                <a href="<?php echo get_esc_home_url('/contact/'); ?>" class="m-contact-button m-contact-button--header"><i class="fa-solid fa-envelope"></i>お問い合わせ</a>
              </div>
            </div>
            <div class="m-hamburger js-hamburger" aria-label="メニューを開く" title="メニューを開く">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="m-header__bottom">
            <nav class="m-pc-nav">
              <ul class="m-pc-nav__items">
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/about/'); ?>" class="m-pc-nav__link u-hover">クリエイティブアルファについて<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/menu/'); ?>" class="m-pc-nav__link u-hover">研修サービス<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/shoppers/'); ?>" class="m-pc-nav__link u-hover">覆面調査（ミステリーショッパー）<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/voice/'); ?>" class="m-pc-nav__link u-hover">お客様の声<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/corporation/'); ?>" class="m-pc-nav__link u-hover">会社概要・講師紹介<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/column/'); ?>" class="m-pc-nav__link u-hover">コラム<span class="m-pc-nav__link-arrow"></span></a>
                </li>
              </ul>
            </nav>
          </div>
          <nav class="m-sp-nav js-sp-nav">
            <div class="m-sp-nav__inner l-inner">
              <div class="m-sp-nav__wrapper">
                <ul class="m-sp-nav__items">
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/about/'); ?>" class="m-sp-nav__menu">クリエイティブアルファについて</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/menu/'); ?>" class="m-sp-nav__menu">研修サービス</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/shoppers/'); ?>" class="m-sp-nav__menu">覆面調査（ミステリーショッパー）</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/voice/'); ?>" class="m-sp-nav__menu">お客様の声</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/corporation/'); ?>" class="m-sp-nav__menu">会社概要・講師紹介</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/column/'); ?>" class="m-sp-nav__menu">コラム</a>
                  </li>
                </ul>
                <div class="m-sp-nav__contact">
                  <div class="m-tel-unit m-tel-unit--sp-nav">
                    <a href="tel:03-6402-7573" class="m-tel-unit__link m-tel-unit__link--header"><span class="m-tel-unit__icon m-tel-unit__icon--header"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/tel-icon.svg" alt="" width="21" height="21" loading="lazy"></span>03-6402-7573</a>
                    <p class="m-tel-unit__text m-tel-unit__text--header">受付時間 平日 10:00〜18:00</p>
                  </div>
                  <a href="<?php echo get_esc_home_url('/contact/'); ?>" class="m-contact-button m-contact-button--header"><i class="fa-solid fa-envelope"></i>お問い合わせ</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>
    <!-- /.l-page__header -->

    <div class="l-page__content">