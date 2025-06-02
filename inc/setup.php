<?php

/**
 * テーマのセットアップ
 *
 * テーマのセットアップを行います。
 */

function mytheme_setup() {
  // タイトルタグのサポート追加
  add_theme_support('title-tag');

  // 自動フィードリンクの追加
  add_theme_support('automatic-feed-links');

  // アイキャッチ画像のサポート追加
  add_theme_support('post-thumbnails');

  // レスポンシブ埋め込みのサポート
  add_theme_support('responsive-embeds');

  // ブロックスタイルのサポート
  add_theme_support('wp-block-styles');

  // HTML5フォーマットのサポート
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
  ));
}
add_action('after_setup_theme', 'mytheme_setup');

/**
 * WordPress の絵文字機能を無効化
 */
function disable_wp_emojis() {
  // 全ての絵文字関連のアクションとフィルターを削除
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

  // フロントエンドの絵文字を無効化
  add_filter('emoji_svg_url', '__return_false');
}
add_action('init', 'disable_wp_emojis');
