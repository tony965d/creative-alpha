<?php

/**
 * 投稿のラベルをカスタマイズする機能
 */

/**
 * 投稿タイプのラベルを変更する関数
 *
 * @param string $post_type 変更する投稿タイプ
 * @param string $new_name 新しい名前（単数形）
 * @param string $new_name_plural 新しい名前（複数形）
 * @param array $custom_labels カスタムラベルの配列（オプション）
 */
function change_post_type_labels($post_type = 'post', $new_name = '研修サービス', $new_name_plural = null, $custom_labels = array())
{
  global $wp_post_types;

  // 複数形が指定されていない場合は単数形を使用
  if ($new_name_plural === null) {
    $new_name_plural = $new_name;
  }

  // 投稿タイプが存在するか確認
  if (!isset($wp_post_types[$post_type])) {
    return;
  }

  // 既存のラベルを取得
  $existing_labels = (array) $wp_post_types[$post_type]->labels;

  // デフォルトのラベル
  $default_labels = array(
    'name'               => $new_name_plural,
    'singular_name'      => $new_name,
    'add_new'            => '新規追加',
    'add_new_item'       => '新規' . $new_name . 'を追加',
    'edit_item'          => $new_name . 'を編集',
    'new_item'           => '新規' . $new_name,
    'view_item'          => $new_name . 'を表示',
    'search_items'       => $new_name . 'を検索',
    'not_found'          => $new_name . 'が見つかりませんでした',
    'not_found_in_trash' => 'ゴミ箱に' . $new_name . 'はありません',
    'all_items'          => 'すべての' . $new_name_plural,
    'archives'           => $new_name . 'アーカイブ',
    'menu_name'          => $new_name_plural,
    'name_admin_bar'     => $new_name,
  );

  // 既存のラベルに新しいラベルを上書き
  $new_labels = array_merge($existing_labels, $default_labels, $custom_labels);

  // 投稿タイプのラベルを変更
  $wp_post_types[$post_type]->labels = (object) $new_labels;
  $wp_post_types[$post_type]->label = $new_name_plural;
}

// 投稿のラベルを変更する
function custom_post_type_labels()
{
  change_post_type_labels('post', '研修サービス');
}
add_action('init', 'custom_post_type_labels', 999);


/**
 * カテゴリーとタグを非表示にする
 */
function hide_categories_and_tags()
{
  // カテゴリーを非表示
  unregister_taxonomy_for_object_type('category', 'post');

  // タグを非表示
  unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'hide_categories_and_tags', 999);


/**
 * スラッグの日本語を自動変換
 *
 * 日本語のスラッグを「投稿タイプ名-投稿ID」の形式に自動変換します。
 * すべての投稿タイプに適用されます。
 */
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
  if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
    $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);


// 投稿のパーマリンク構造を変更
function custom_post_type_rewrite_rules()
{
  // パーマリンク構造を変更
  add_rewrite_rule(
    'post/([^/]+)/?$',
    'index.php?post_type=post&name=$matches[1]',
    'top'
  );

  // コラムの月別アーカイブルールを追加
  add_rewrite_rule(
    'column/([0-9]{4})/([0-9]{1,2})/?$',
    'index.php?post_type=column&archive_year=$matches[1]&archive_month=$matches[2]',
    'top'
  );

  // コラムの月別アーカイブのページネーションルールを追加
  add_rewrite_rule(
    'column/([0-9]{4})/([0-9]{1,2})/page/([0-9]+)/?$',
    'index.php?post_type=column&archive_year=$matches[1]&archive_month=$matches[2]&paged=$matches[3]',
    'top'
  );
}
add_action('init', 'custom_post_type_rewrite_rules');

// クエリ変数を追加
function add_archive_query_vars($vars)
{
  $vars[] = 'archive_year';
  $vars[] = 'archive_month';
  return $vars;
}
add_filter('query_vars', 'add_archive_query_vars');

function custom_post_type_link($permalink, $post)
{
  if ($post->post_type === 'menu') {
    // カテゴリーを含まないURLに変更
    return home_url('menu/' . $post->post_name . '/');
  }
  return $permalink;
}
add_filter('post_link', 'custom_post_type_link', 10, 2);
