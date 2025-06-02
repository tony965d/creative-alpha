<?php

/**
 * コメント機能を完全に無効化
 */
function mytheme_disable_comments_everywhere() {

  // 投稿タイプからコメントサポートを削除
  foreach (get_post_types() as $post_type) {
    if (post_type_supports($post_type, 'comments')) {
      remove_post_type_support($post_type, 'comments');
      remove_post_type_support($post_type, 'trackbacks');
    }
  }

  // コメント関連のメニューを非表示
  add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
    // ディスカッション設定ページを非表示にする
    remove_submenu_page('options-general.php', 'options-discussion.php');
  });

  // 管理バーのコメントアイコンを非表示
  add_action('admin_bar_menu', function ($wp_admin_bar) {
    $wp_admin_bar->remove_node('comments');
  }, 999);

  // コメントページへの直接アクセスを拒否
  add_action('admin_init', function () {
    if (isset($_GET['page']) && $_GET['page'] === 'edit-comments.php') {
      wp_redirect(admin_url());
      exit;
    }

    if (is_admin() && strpos($_SERVER['REQUEST_URI'], 'edit-comments.php') !== false) {
      wp_redirect(admin_url());
      exit;
    }

    // ディスカッション設定ページへの直接アクセスを拒否
    if (is_admin() && strpos($_SERVER['REQUEST_URI'], 'options-discussion.php') !== false) {
      wp_redirect(admin_url('options-general.php'));
      exit;
    }
  });

  // コメント・ピンバックを完全に閉じる（投稿表示用）
  add_filter('comments_open', '__return_false', 20, 2);
  add_filter('pings_open', '__return_false', 20, 2);

  // 既存コメントを非表示にする
  add_filter('comments_array', '__return_empty_array', 10, 2);
}
add_action('init', 'mytheme_disable_comments_everywhere');
