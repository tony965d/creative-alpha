<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

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
                <a href="<?php echo get_esc_home_url('/contact'); ?>" class="m-contact-button m-contact-button--header"><i class="fa-solid fa-envelope"></i>お問い合わせ</a>
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
                  <a href="<?php echo get_esc_home_url('/about'); ?>" class="m-pc-nav__link u-hover">クリエイティブアルファについて<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/training-service'); ?>" class="m-pc-nav__link u-hover">研修サービス<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/mystery-shopper'); ?>" class="m-pc-nav__link u-hover">覆面調査（ミステリーショッパー）<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/voice'); ?>" class="m-pc-nav__link u-hover">お客様の声<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/company'); ?>" class="m-pc-nav__link u-hover">会社概要・講師紹介<span class="m-pc-nav__link-arrow"></span></a>
                </li>
                <li class="m-pc-nav__item">
                  <a href="<?php echo get_esc_home_url('/column'); ?>" class="m-pc-nav__link u-hover">コラム<span class="m-pc-nav__link-arrow"></span></a>
                </li>
              </ul>
            </nav>
          </div>
          <nav class="m-sp-nav js-sp-nav">
            <div class="m-sp-nav__inner l-inner">
              <div class="m-sp-nav__wrapper">
                <ul class="m-sp-nav__items">
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/about'); ?>" class="m-sp-nav__menu">クリエイティブアルファについて</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/training-service'); ?>" class="m-sp-nav__menu">研修サービス</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/mystery-shopper'); ?>" class="m-sp-nav__menu">覆面調査（ミステリーショッパー）</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/voice'); ?>" class="m-sp-nav__menu">お客様の声</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/company'); ?>" class="m-sp-nav__menu">会社概要・講師紹介</a>
                  </li>
                  <li class="m-sp-nav__item">
                    <a href="<?php echo get_esc_home_url('/column'); ?>" class="m-sp-nav__menu">コラム</a>
                  </li>
                </ul>
                <div class="m-sp-nav__contact">
                  <div class="m-tel-unit m-tel-unit--sp-nav">
                    <a href="tel:03-6402-7573" class="m-tel-unit__link m-tel-unit__link--header"><span class="m-tel-unit__icon m-tel-unit__icon--header"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/tel-icon.svg" alt="" width="21" height="21" loading="lazy"></span>03-6402-7573</a>
                    <p class="m-tel-unit__text m-tel-unit__text--header">受付時間 平日 10:00〜18:00</p>
                  </div>
                  <a href="<?php echo get_esc_home_url('/contact'); ?>" class="m-contact-button m-contact-button--header"><i class="fa-solid fa-envelope"></i>お問い合わせ</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>
    <!-- /.l-page__header -->

    <div class="l-page__content">