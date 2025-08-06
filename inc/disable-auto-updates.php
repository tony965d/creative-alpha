<?php

/**
 * WordPress自動更新を無効化する設定
 *
 * 自動更新のみを無効化し、管理画面での通知は許可します
 */

// WordPress本体の自動更新を無効化
add_filter('automatic_updater_disabled', '__return_true');
