<?php

/**
 * Contact Form 7のカスタマイズ
 *
 * @package WordPress_Theme_Dev_2
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * Contact Form 7の自動pタグを無効化
 */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

/**
 * Contact Form 7のメールアドレスの再入力チェック
 */
function wpcf7_email_validation_filter($result, $tag)
{
  $type = $tag['type'];
  $name = $tag['name'];

  $_POST[$name] = trim(strtr((string) $_POST[$name], "\n", " "));

  if ('email' == $type || 'email*' == $type) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)) {
      $target_name = $matches[1];

      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate($tag, "確認用のメールアドレスが一致していません");
        } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;
}

add_filter('wpcf7_validate_email', 'wpcf7_email_validation_filter', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_email_validation_filter', 11, 2);

/**
 * Contact Form 7の電話番号の再入力チェック
 */
function wpcf7_tel_validation_filter($result, $tag)
{
  $type = $tag['type'];
  $name = $tag['name'];

  $_POST[$name] = trim(strtr((string) $_POST[$name], "\n", " "));

  if ('tel' == $type || 'tel*' == $type) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)) {
      $target_name = $matches[1];

      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate($tag, "確認用の電話番号が一致していません");
        } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用の電話番号が一致していません';
        }
      }
    }
  }
  return $result;
}

add_filter('wpcf7_validate_tel', 'wpcf7_tel_validation_filter', 11, 2);
add_filter('wpcf7_validate_tel*', 'wpcf7_tel_validation_filter', 11, 2);
