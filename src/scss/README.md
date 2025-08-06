# こうせいCSS 設計書

---

## 概要

**こうせいCSS** は、

* シンプル
* スケーラブル
* 現場実務向き

を最優先に考えて設計された、CSS設計ルールです。

---

## 1. フォルダ構成

```plaintext
_global/
  ├ _variables.scss      // カスタムプロパティ管理
  ├ _breakpoints.scss    // ブレイクポイント管理
  ├ _functions.scss      // 関数定義
  └ _index.scss          // グローバル設定のエントリーポイント
bases/
  ├ _destyle.scss        // リセットCSS
  ├ _font-family.scss    // フォント設定
  ├ _base.scss           // 全体基本スタイル
  └ _index.scss          // ベース設定のエントリーポイント
js/
  ├ _js-*.scss           // JavaScript連携スタイル
  └ _index.scss          // JS連携のエントリーポイント
layouts/
  ├ _l-*.scss            // レイアウト関連スタイル
  └ _index.scss          // レイアウトのエントリーポイント
modules/
  ├ _m-*.scss            // UIモジュールスタイル
  └ _index.scss          // モジュールのエントリーポイント
pages/
  ├ _p-*.scss            // ページ固有スタイル
  └ _index.scss          // ページスタイルのエントリーポイント
utilities/
  ├ _u-*.scss            // ユーティリティクラス
  └ _index.scss          // ユーティリティのエントリーポイント
style.scss               // フロントエンド用メインスタイル
```

---

## 2. 命名規則

* 接頭辞を付ける

  * `js-` : JavaScript連携
  * `l-` : Layout
  * `m-` : Module
  * `p-` : Page
  * `u-` : Utility
* 単語区切りはハイフン (`-`)
* 英語表記、短く分かりやすく

---

## 3. コーディングルール

* セレクタは深くしない
* **基本的に入れ子禁止**（例外はモジュール内部で必要最小限の場合のみ）
* クラス指定を基本とする
* IDセレクタ、タグセレクタは原則禁止
* JavaScript連携は `js-` 接頭辞必須
* Utilityクラスは単機能に限定
* 余白の設定は基本的に上方向（margin-topなど）に統一する

---

## 4. モジュール運用ルール

* モジュールクラス（`m-`）は、1つのタグに1つだけ付与する
* 同一要素に複数の`m-`クラスを付けることは禁止
* 拡張が必要な場合はモディファイアクラス（`--`付き）を使用する

### 命名スタイル

* モジュール本体： `m-[ブロック名]`
* モディファイア： `m-[ブロック名]--[状態・バリエーション名]`
* エレメント： `m-[ブロック名]__[要素名]`

### 例

```html
<button class="m-button">送信</button>
<button class="m-button m-button--modal-trigger">モーダルを開く</button>

<div class="m-card">
  <h2 class="m-card__title">タイトル</h2>
  <p class="m-card__text">本文</p>
</div>

<div class="m-card m-card--featured">
  <h2 class="m-card__title">特集タイトル</h2>
  <p class="m-card__text">特集本文</p>
</div>
```

---

## 5. ブレイクポイント管理

### `_global/_breakpoints.scss`

Sassの@mixinで管理：

```scss
// ブレークポイントの定義
$breakpoints: (
  // PCのデザインカンプの横幅
  'xl': 1920,
  // PCで１番多いコンテンツの横幅 + 左右の余白
  'lg': 1250,
  // タブレットの横幅
  'md': 767,
  // SPのデザインカンプの横幅
  'sm': 390
);

// メディアクエリのミックスイン
@mixin mq($breakpoint, $type: 'max-width') {
  @if map.has-key($breakpoints, $breakpoint) {
    $breakpoint-value: map.get($breakpoints, $breakpoint);

    @if $type == 'min-width' {
      // モバイルファースト（min-width）- 境界値の調整のため+1px
      $breakpoint-value: $breakpoint-value + 1 + px;
      @media (min-width: $breakpoint-value) {
        @content;
      }
    } @else {
      // PCファースト（max-width）
      $breakpoint-value: $breakpoint-value + px;
      @media (max-width: $breakpoint-value) {
        @content;
      }
    }
  }
}
```

### 使用例

```scss
.m-card {
  width: 100%;
  margin-top: calc(16rem / var(--font-size__base));
  
  @include mq('md') {
    width: 50%;
    margin-top: calc(32rem / var(--font-size__base));
  }
  
  @include mq('lg') {
    width: 33.333%;
  }
}
```

---

## 6. 変数管理

### `_global/_variables.scss`

* 全て **CSSカスタムプロパティ** (変数) で管理
* `:root` の中に一括定義

```scss
:root {
  // ベースのフォントサイズ
  --font-size__base: 16;

  // PCで１番多いコンテンツの横幅
  --width__contents: 1200;

  // 左右の余白
    --space-inline__base: 25;

  // テーマカラー
  --color__brown: #754c24;
  --color__orange: #e2a864;
  --color__green: #c6d9ab;
  --color__beige: #f2eecd;
  
  // 機能的なカラー
  --color__error: #fc506e;
  --color__warning: #986522;
  --color__success: #1fc8c2;
  
  // セクション間の上下の余白
  --padding-block__base: 30;
}
```

### 使い方

```scss
.m-button {
  background-color: var(--color__primary);
  font-family: var(--font-family__base);
    padding-top: calc(var(--padding-block__base) * 1rem / var(--font-size__base));
}
```

---

## 7. SCSSの記述ルール

* SCSSでは `&` を使用しない記法を採用
* 各セレクタを明示的に記述する

```scss
/* 推奨 */
.m-card {
  display: flex;
  margin-top: calc(16rem / var(--font-size__base));
}

.m-card__title {
  font-size: calc(24rem / var(--font-size__base));
  margin-top: calc(8rem / var(--font-size__base));
}

.m-card--featured {
  border: 2px solid var(--color__primary);
}

/* 非推奨 */
.m-card {
  display: flex;
  margin-top: calc(16rem / var(--font-size__base));
  
  &__title {
    font-size: calc(24rem / var(--font-size__base));
    margin-top: calc(8rem / var(--font-size__base));
  }
  
  &--featured {
    border: 2px solid var(--color__primary);
  }
}
```

---

## 8. 単位の扱い

* フォントサイズや余白はremを基本とする
* rem関数を使用して計算を簡略化

```scss
// ピクセル値をremに変換する関数
@function rem($value) {
  @if meta.type-of($value) == 'number' {
    $value: calc(#{strip-unit($value)} / 16 * 1rem);
  }
  @return $value;
}

// 使用例
.m-button {
  font-size: rem(16);
  padding: rem(8) rem(16);
  margin-top: rem(24);
}
```

---

## 9. レスポンシブ対応

* 基本的にPCファーストで設計
* 必要に応じてモバイルファーストも使用可能
* リキッドレイアウト対応のための計算式を活用

```scss
// リキッドレイアウト対応
html {
  --_font-size: var(--font-size__base);
  --_width: var(--width__breakpoint);

  // --_width ~
  font-size: calc(var(--_font-size) * 1px);

  // 787px ~ --_width
  @include mq('lg') {
    font-size: calc((var(--_font-size) / var(--_width)) * 100vw);
  }

  // 375px ~ 767px
  @include mq('md') {
    font-size: calc(var(--_font-size) * 1px);
  }

  // ~ 375px
  @include mq('sm') {
    font-size: calc((var(--_font-size) / var(--_width)) * 100vw);
  }
}
```

---

# 総結

こうせいCSSは

* CSSカスタムプロパティ中心
* BEM設計思想
* Sassは@useで機能分割のみ導入
* 基本的にセレクタの入れ子禁止
* 余白は上方向に統一
* SCSSでは&を使用しない
* rem関数を活用した単位の一貫性

とする、現場実践性高いスタイルガイドラインです。
