<?php

/**
 * テーマの機能を読み込むメインファイル
 *
 * このファイルは、テーマの様々な機能を提供する各ファイルを
 * 適切な順序で読み込みます。
 */

// グローバル関数を読み込む
require_once get_template_directory() . '/inc/utils.php';

// テーマのセットアップを読み込む
require_once get_template_directory() . '/inc/setup.php';

// セキュリティ関連の初期設定を読み込む
require_once get_template_directory() . '/inc/security.php';

// テーマのCSS、JavaScriptを読み込む
require_once get_template_directory() . '/inc/enqueue.php';

// カスタマイズを読み込む
require_once get_template_directory() . '/inc/theme-customizer.php';

// テンプレートタグを読み込む
require_once get_template_directory() . '/inc/templates-tags.php';

// 各リンク先を読み込む
require_once get_template_directory() . '/inc/social-links.php';

// ショートコードを読み込む
require_once get_template_directory() . '/inc/shortcodes.php';

// デフォルトの投稿機能の変更を読み込む
require_once get_template_directory() . '/inc/post-type-customizer.php';

// コメント機能を完全に無効化
require_once get_template_directory() . '/inc/disable-comments.php';

// 自動更新を無効化
require_once get_template_directory() . '/inc/disable-auto-updates.php';

// Contact Form 7のカスタマイズを読み込む
require_once get_template_directory() . '/inc/contact-form.php';

// 管理画面から「表示」リンクを非表示にする
require_once get_template_directory() . '/inc/admin.php';
