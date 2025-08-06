<?php

/**
 * テンプレートタグ
 *
 * このファイルには、テーマのテンプレート内で使用するカスタム関数が含まれています。
 * 投稿情報の表示、画像の出力、メタデータの取得など、テンプレートで
 * 頻繁に必要となる機能を提供します。
 *
 * 注意: このファイルの関数は直接HTMLを出力することを基本としています。
 * 値を返す必要がある場合は、utils.phpを使用してください。
 */

/**
 * 投稿のサムネイル画像を表示する
 *
 * 投稿にアイキャッチ画像が設定されている場合はそれを表示し、
 * 設定されていない場合はカスタマイザーで設定されたデフォルト画像を表示します。
 *
 * 使い方:
 * <?php mytheme_post_thumbnail(); ?> - デフォルトサイズ（medium）で表示
 * <?php mytheme_post_thumbnail('large'); ?> - 大きいサイズで表示
 * <?php mytheme_post_thumbnail('thumbnail', ['class' => 'my-thumbnail']); ?> - クラス属性を追加
 *
 * @param string $size サムネイルのサイズ（'thumbnail', 'medium', 'large', 'full'など）
 * @param array $attr 画像タグに追加する属性の配列
 * @return void
 */
function mytheme_post_thumbnail($size = 'medium', $attr = []) {
  if (has_post_thumbnail()) {
    the_post_thumbnail($size, $attr);
  } else {
    $default = get_theme_mod('mytheme_default_thumbnail');
    if ($default) {
      // 属性を文字列に変換する関数が未定義のため、単純な実装を使用
      $attributes = '';
      foreach ($attr as $name => $value) {
        $attributes .= ' ' . esc_attr($name) . '="' . esc_attr($value) . '"';
      }
      echo '<img src="' . esc_url($default) . '"' . $attributes . '>';
    }
  }
}
