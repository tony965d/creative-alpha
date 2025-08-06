<?php

/**
 * カスタマイズ
 *
 * このファイルには、テーマのカスタマイズ機能を定義する関数が含まれています。
 * カスタマイズオプションの追加、コントロールの作成、セクションの設定などを行います。
 * これらの設定は、WordPress管理画面の「外観」→「カスタマイズ」から編集できます。
 */

/**
 * テーマカスタマイザーに設定を追加する関数
 *
 * @param WP_Customize_Manager $wp_customize カスタマイザーのインスタンス
 * @return void
 */
function mytheme_customize_register($wp_customize) {
  // デフォルト設定セクションを追加
  $wp_customize->add_section('mytheme_defaults', [
    'title' => 'デフォルト設定',
    'priority' => 30,
  ]);

  // デフォルトサムネイル画像設定
  $wp_customize->add_setting('mytheme_default_thumbnail', [
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ]);

  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'mytheme_default_thumbnail',
    [
      'label' => 'デフォルトサムネイル画像',
      'section' => 'mytheme_defaults',
      'settings' => 'mytheme_default_thumbnail',
    ]
  ));
}
add_action('customize_register', 'mytheme_customize_register');
