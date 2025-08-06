# WordPressテーマの構造と機能

このWordPressテーマは、モジュール化された構造で開発されており、各機能が個別のファイルに分離されています。以下に主要なファイルとその機能を説明します。

## メインファイル

### functions.php

テーマの機能を読み込むメインファイルです。以下の順序で各機能モジュールを読み込みます：

```php:functions.php
// グローバル関数を読み込む
require_once get_template_directory() . '/inc/utils.php';

// テーマのセットアップを読み込む
require_once get_template_directory() . '/inc/setup.php';

// セキュリティ関連の初期設定を読み込む
require_once get_template_directory() . '/inc/security.php';

// テーマのCSS、JavaScriptを読み込む
require_once get_template_directory() . '/inc/enqueue.php';

// テンプレートタグを読み込む
require_once get_template_directory() . '/inc/templates-tags.php';

// 各リンク先を読み込む
require_once get_template_directory() . '/inc/links.php';

// ショートコードを読み込む
require_once get_template_directory() . '/inc/shortcodes.php';

// カスタマイズを読み込む
require_once get_template_directory() . '/inc/theme-customizer.php';

// デフォルトの投稿機能の変更を読み込む
require_once get_template_directory() . '/inc/post-type-customizer.php';

// コメント機能を完全に無効化
require_once get_template_directory() . '/inc/disable-comments.php';
```

## 機能モジュール

### utils.php

テーマ全体で使用される共通の関数が含まれています。主にユーティリティ関数やヘルパー関数を定義しています。

**主要関数：**

- `get_theme_url_with_version('assets/css/style.css')`
  テーマ内のファイルのURLをバージョン付きで取得
  例: `https://example.com/wp-content/themes/mytheme/assets/css/style.css?v=1718456789`

- `get_esc_home_url('about')`
  サイトのホームURLに相対パスを結合
  例: `https://example.com/about/`

- `get_esc_upload_url('2023/01/image.jpg')`
  アップロードフォルダ内のファイルURLを取得
  例: `https://example.com/wp-content/uploads/2023/01/image.jpg`

### setup.php

テーマの基本設定を行います。

**主要機能：**

- タイトルタグのサポート
- 自動フィードリンクの追加
- アイキャッチ画像のサポート
- レスポンシブ埋め込みのサポート
- ブロックスタイルのサポート
- HTML5フォーマットのサポート
- WordPress絵文字機能の無効化

### security.php

WordPressサイトのセキュリティを強化するための設定を行います。

**主要機能：**

- WordPressバージョン情報の非表示
- author=xxxクエリパラメータによるユーザー列挙攻撃対策
- 著者アーカイブページへのアクセス制限

### enqueue.php

テーマのCSSとJavaScriptファイルを適切に読み込むための関数を定義します。

**主要機能：**

- キャッシュバスティング対応のアセット読み込み
- 基本のCSS/JavaScript読み込み
- 管理画面用のJavaScript読み込み

### templates-tags.php

テーマのテンプレート内で使用するカスタム関数が含まれています。

**主要関数：**

- `mytheme_post_thumbnail($size = 'medium', $attr = [])`  
  投稿のサムネイル画像を表示する関数

### links.php

テーマで使用するSNSなどの外部リンク先URLを取得するための関数が含まれています。

**主要関数：**

- `get_line_url()`: LINEのURL取得
- `get_youtube_url()`: YouTubeのURL取得
- `get_facebook_url()`: FacebookのURL取得
- `get_tiktok_url()`: TikTokのURL取得
- `get_instagram_url()`: InstagramのURL取得

### post-type-customizer.php

投稿タイプのカスタマイズを行います。

**主要機能：**

- 投稿タイプのラベル変更（「投稿」を「お知らせ」に変更）
- 投稿タグの無効化
- 日本語スラッグの自動変換（日本語URLを「投稿タイプ名-投稿ID」形式に変換）

### theme-customizer.php

テーマのカスタマイズ機能を定義します。

**主要機能：**

- デフォルト設定セクションの追加
- デフォルトサムネイル画像設定の追加

### disable-comments.php

コメント機能を完全に無効化します。

**主要機能：**

- 投稿タイプからコメントサポートの削除
- コメント関連のメニュー非表示
- 管理バーのコメントアイコン非表示
- コメントページへの直接アクセス拒否
- コメント・ピンバックの完全無効化
- 既存コメントの非表示

## スタイリング

テーマはSCSSを使用してスタイリングされており、FLOCSSの設計思想に基づいて構造化されています：

- **Foundation**: リセットCSSやベーススタイル
- **Layout**: ヘッダー、フッター、コンテンツエリアなどのレイアウト
- **Object**:
  - **Component**: 再利用可能な小さなパーツ
  - **Project**: 特定のプロジェクト固有のパーツ
  - **Utility**: ユーティリティクラス

## JavaScript

- **admin.js**: 管理画面用のJavaScript（フルスクリーンエディタを初期で無効化）
- **main.js**: フロントエンド用のJavaScript

## テンプレートファイル

- **header.php**: ヘッダー部分のテンプレート
- **footer.php**: フッター部分のテンプレート
- **index.php**: メインのテンプレート
- **front-page.php**: フロントページ用テンプレート
- **single.php**: 個別投稿表示用テンプレート
- **page.php**: 固定ページ表示用テンプレート
- **archive.php**: アーカイブページ用テンプレート
- **404.php**: 404エラーページ用テンプレート

このテーマは、モジュール化された構造と明確な責任分担により、保守性と拡張性に優れた設計となっています。

## テーマのインストール手順

### GitHubからZIPダウンロードでインストール

1. **GitHubリポジトリからZIPファイルをダウンロード**

   - GitHubのリポジトリページにアクセス
   - 緑色の「Code」ボタンをクリック
   - 「Download ZIP」を選択してZIPファイルをダウンロード

2. **WordPressにテーマをアップロード**

   - WordPress管理画面にログイン
   - 「外観」→「テーマ」に移動
   - 「新規追加」ボタンをクリック
   - 「テーマのアップロード」をクリック
   - ダウンロードしたZIPファイルを選択
   - 「今すぐインストール」をクリック

3. **テーマを有効化**

   - インストール完了後、「有効化」ボタンをクリック

4. **開発環境のセットアップ（開発者向け）**
   - テーマディレクトリに移動
   - 以下の手順で開発環境をセットアップ

## 開発環境のセットアップ

### 1. 必要なパッケージのインストール

```bash
npm install
```

### 2. 設定ファイルの作成

`dev-tools/config.js.example` を `dev-tools/config.js` にコピーして、必要に応じて設定を変更してください。

**重要：** `dev.proxy.target` の値は必ず変更してください。お使いの開発環境のWordPressサイトのURLに合わせる必要があります。

```bash
cp dev-tools/config.js.example dev-tools/config.js
```

## 開発コマンド

### 開発モード

開発モードでは、ファイルの変更を監視し、自動的にビルドとブラウザの更新を行います。

```bash
npm run dev
```

このコマンドは以下の処理を実行します：

- SCSSファイルのコンパイルと最適化
- JavaScriptファイルのコピーとフォーマット
- 画像ファイルの最適化
- ブラウザの自動更新（BrowserSync）

### 本番ビルド

本番環境用にファイルを最適化してビルドします。

```bash
npm run build
```

このコマンドは以下の処理を実行します：

- SCSSファイルのコンパイルと最適化（ソースマップなし）
- JavaScriptファイルの最適化（設定により圧縮）
- 画像ファイルの最適化

## 主な機能

### SCSS処理

- SCSSファイルのコンパイル
- ベンダープレフィックスの自動追加
- メディアクエリの最適化
- CSSの整形と最適化

### JavaScript処理

- JavaScriptファイルのコピーまたは圧縮
- Prettierによるコードフォーマット

### 画像処理

- 画像の最適化（サイズ圧縮）
- WebP形式への自動変換（設定で有効時）
- SVGの最適化

### 開発サーバー

- ファイル変更の監視と自動リロード
- プロキシモードによるWordPress開発環境との連携
- CSSの変更時はページ全体をリロードせずに反映

## 設定カスタマイズ

`dev-tools/config.js` で以下の設定をカスタマイズできます：

- ソースファイルと出力先のパス
- 開発サーバーの設定（プロキシURLなど）
- 画像処理オプション（最大幅、品質、WebP変換など）
- CSS/JS処理オプション（圧縮、ソースマップなど）
- ログレベル

## ディレクトリ構造

```bash
├── src/ # ソースファイル
│   ├── scss/ # SCSSファイル
│   │   ├── bases/ # 基本スタイル
│   │   │   ├── _base.scss # 基本スタイル定義
│   │   │   ├── _destyle.scss # リセットCSS
│   │   │   └── _font-family.scss # フォント設定
│   │   ├── js/ # JavaScript連携用スタイル
│   │   ├── layouts/ # レイアウト用スタイル
│   │   ├── modules/ # モジュール用スタイル
│   │   ├── pages/ # ページ固有のスタイル
│   │   ├── utilities/ # ユーティリティクラス
│   │   └── style.scss # メインのSCSSファイル
│   ├── js/ # JavaScriptファイル
│   └── images/ # 画像ファイル
├── assets/ # ビルド後のファイル（自動生成）
│   ├── css/ # コンパイル済みCSSファイル
│   ├── js/ # 処理済みJavaScriptファイル
│   └── images/ # 最適化済み画像ファイル
└── dev-tools/ # 開発ツール
    ├── config.js # 設定ファイル
    ├── scripts/ # メインスクリプト
    ├── tasks/ # タスク処理モジュール
    └── utils/ # ユーティリティ
```

## 注意事項

- `npm run dev` 実行時は、WordPressの開発環境が起動している必要があります
- 本番環境にデプロイする前に `npm run build` を実行して最適化されたファイルを生成してください
- 設定ファイル `dev-tools/config.js` はバージョン管理から除外されているため、新しい環境でセットアップする際は必ずコピーして作成してください
- `dev tool`は基本触らない
- 案件の初めに`scss/_global/_breakpoint.scss`を設定する
#   -  
 #   c r e a t i v e - a l p h a  
 #   c r e a t i v e - a l p h a  
 #   c r e a t i v e - a l p h a  
 #   c r e a t i v e - a l p h a  
 