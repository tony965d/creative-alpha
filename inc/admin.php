<?php

/**
 * 管理画面から「表示」リンクを非表示にする
 */

function remove_user_view_link_css()
{
  echo '<style>
        .row-actions .view {
            display: none !important;
        }
    </style>';
}
add_action('admin_head-users.php', 'remove_user_view_link_css');
