<?php

/*
 * 各リンク先
 *
 * このファイルには、テーマで使用するSNSなどの外部リンク先URLを
 * 取得するための関数が含まれています。
 * 各関数は適切にエスケープされたURLを返します。
 * テーマ内の様々な場所から呼び出して使用できます。
 */

// LINEのURL
function get_line_url() {
  return esc_url("https://example.com/line");
}

// YouTubeのURL
function get_youtube_url() {
  return esc_url("https://example.com/youtube");
}

// FacebookのURL
function get_facebook_url() {
  return esc_url("https://example.com/facebook");
}

// TikTokのURL
function get_tiktok_url() {
  return esc_url("https://example.com/tiktok");
}

// InstagramのURL
function get_instagram_url() {
  return esc_url("https://example.com/instagram");
}
