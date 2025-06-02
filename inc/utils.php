<?php

/**
 * グローバル関数
 *
 * このファイルには、テーマ全体で使用される共通の関数が含まれています。
 * 主にユーティリティ関数やヘルパー関数を定義し、テーマの様々な場所から
 * 呼び出して使用することができます。
 *
 * 注意: このファイルの関数は直接HTMLを出力せず、値を返すことを基本としています。
 * HTML出力が必要な場合は、templates-tags.phpを使用してください。
 */


/*
 * テーマファイルのURLを取得する関数
 * この関数は、テーマ内のファイルのURLを生成し、
 * キャッシュバスティングのためにバージョン番号を追加します。
 * URLは適切にエスケープされます。
 *
 * 使い方:
 * <?php echo get_theme_url_with_version('assets/css/style.css'); ?>
 * <?php echo get_theme_url_with_version('assets/js/main.js'); ?>
 *
 * 戻り値:
 * ファイルが存在する場合: エスケープされたURL（例: https://example.com/wp-content/themes/mytheme/css/style.css?v=1718456789）
 * ファイルが存在しない場合: null
 */
function get_theme_url_with_version($path) {
  // テーマディレクトリ内のファイルパスを取得
  $file_path = get_template_directory() . '/' . $path;

  // ファイルが見つからない場合はnullを返す
  if (!file_exists($file_path)) {
    return null;
  }

  // ファイルの最終更新時間をタイムスタンプとして取得
  $version = filemtime($file_path);

  // URLを生成し、WordPressの標準関数でエスケープ
  $url = get_template_directory_uri() . '/' . $path . '?v=' . $version;
  return esc_url($url);
}

/*
 * WordPressのホームURLを取得する関数
 * この関数は、WordPressサイトのホームURLを取得します。
 * 相対パスを指定すると、ホームURLと結合したURLを返します。
 * URLは適切にエスケープされ、末尾には必ずスラッシュがつきます。
 *
 * 使い方:
 * <?php echo get_esc_home_url(); ?> // ホームURLのみを取得（末尾にスラッシュ付き）
 * <?php echo get_esc_home_url('about'); ?> // ホームURL + /about/ を取得
 *
 * 戻り値:
 * エスケープされたURL（例: https://example.com/ または https://example.com/about/）
 */
function get_esc_home_url($path = '') {
  // WordPressのホームURLを取得
  $home_url = home_url();

  // パスが指定されている場合は、ホームURLと結合
  if ($path) {
    // パスの先頭にスラッシュがある場合は削除
    $path = ltrim($path, '/');
    $url = trailingslashit($home_url) . $path;
  } else {
    $url = $home_url;
  }

  // 末尾にスラッシュを追加
  $url = trailingslashit($url);

  // URLをエスケープして返す
  return esc_url($url);
}

/*
 * WordPressのアップロードフォルダのURLを取得する関数
 * この関数は、WordPress管理画面からアップロードされたメディアファイルのURLを生成します。
 * wp-content/uploadsディレクトリ内のファイルへのパスを簡単に取得できます。
 * URLは適切にエスケープされます。
 *
 * 使い方:
 * <?php echo get_esc_upload_url('2023/01/image.jpg'); ?>
 *
 * 戻り値:
 * エスケープされたURL（例: https://example.com/wp-content/uploads/2023/01/image.jpg）
 */
function get_esc_upload_url($path = '') {
  // WordPressのアップロードディレクトリ情報を取得
  $upload_dir = wp_upload_dir();

  // ベースURLを取得
  $base_url = $upload_dir['baseurl'];

  // パスが指定されている場合は、ベースURLと結合
  $url = $path ? $base_url . '/' . $path : $base_url;

  // URLをエスケープして返す
  return esc_url($url);
}
