<?php

/**
 * テーマのCSSとJavaScriptファイルを適切に読み込むための関数
 *
 * キャッシュバスティング対応のアセット読み込みを行います。
 * get_theme_url_with_version関数を使用して、ファイルのURLを生成します。
 */

function mytheme_enqueue_assets()
{
  /**
   * フォント
   */
  // Font Awesomeを読み込む
  wp_enqueue_script(
    'font-awesome',
    'https://kit.fontawesome.com/bf12c6538e.js',
    array(),
    null,
    true
  );

  /**
   * ライブラリ
   */

  /**
   * テーマ
   */
  // 基本のCSS
  wp_enqueue_style(
    'mytheme-style',
    get_theme_url_with_version('assets/css/style.css'),
    array(),
    null,
    'all'
  );

  // Swiperのスタイルも読み込む
  wp_enqueue_style(
    'swiper-style',
    get_theme_url_with_version('lib/swiper-bundle.min.css'),
    array(),
    null
  );

  // Swiperライブラリを読み込む
  wp_enqueue_script(
    'swiper',
    get_theme_url_with_version('lib/swiper-bundle.min.js'),
    array(),
    null,
    true
  );

  // GSAPのスクリプトを登録し読み込む
  wp_enqueue_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);

  // ScrollTriggerのスクリプトを登録し読み込む
  wp_enqueue_script('scrolltrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap'), '3.12.5', true);


  // 基本のJavaScript
  wp_enqueue_script(
    'mytheme-script',
    get_theme_url_with_version('assets/js/main.js'),
    array('jquery', 'swiper', 'gsap', 'scrolltrigger'),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

/**
 * 管理画面用のアセットを読み込む関数
 */
function mytheme_admin_enqueue_assets()
{
  // 管理画面用のCSS
  wp_enqueue_style(
    'mytheme-admin-style',
    get_theme_url_with_version('assets/css/admin.css'),
    array(),
    null,
    'all'
  );

  // 管理画面用のJavaScript
  wp_enqueue_script(
    'mytheme-admin-js',
    get_theme_url_with_version('assets/js/admin.js'),
    array('wp-data', 'wp-edit-post'),
    null,
    true
  );
}
add_action('admin_enqueue_scripts', 'mytheme_admin_enqueue_assets');
