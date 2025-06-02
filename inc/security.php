<?php

/**
 * セキュリティ関連の初期設定
 *
 * WordPressサイトのセキュリティを強化するための設定を行います。
 */

/**
 * WordPressバージョン情報の非表示
 * バージョン情報が公開されると攻撃者に脆弱性を特定される可能性があります
 */
remove_action('wp_head', 'wp_generator');

/**
 * author=xxx クエリパラメータによるユーザー列挙攻撃対策
 * URLパラメータからユーザーIDを取得できないようにリダイレクトします
 */
function disable_author_archive_query() {
  if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) {
    wp_redirect(home_url());
    exit;
  }
}
add_action('init', 'disable_author_archive_query');

/**
 * 著者アーカイブページへのアクセス制限
 * ログインしていないユーザーが著者ページにアクセスできないようにします
 * 例: /author/username などのURLパターンをブロック
 */
function disable_author_archive() {
    if (is_author() && !is_user_logged_in()) {
        wp_safe_redirect(home_url(), 301);
        exit;
    }
}
add_action('template_redirect', 'disable_author_archive');
