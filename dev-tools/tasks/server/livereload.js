import Logger from '../../utils/Logger.js';

/**
 * ライブリロード機能を提供するモジュール
 * - ファイル変更の監視
 * - 拡張子に応じた更新方法の選択
 * - CSS: インジェクション
 * - JS/HTML: ページ全体リロード
 * - 画像: 関連ページリロード
 */

export function setupLiveReload(bs) {
  try {
    // ファイル変更時の処理
    bs.watch('htdocs/**/*').on('change', (filepath) => {
      Logger.log('INFO', `ファイルが変更されました: ${filepath}`);

      // 拡張子に応じた更新方法の選択
      const ext = filepath.split('.').pop().toLowerCase();

      switch (ext) {
        case 'css':
          // CSSの場合はインジェクション
          bs.reload('*.css');
          break;

        case 'js':
          // JSの場合はページ全体をリロード
          bs.reload();
          break;

        case 'html':
        case 'php':
          // HTML/PHPの場合はページ全体をリロード
          bs.reload();
          break;

        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
        case 'svg':
          // 画像の場合は関連するページをリロード
          bs.reload('*.html');
          break;

        default:
          // その他の場合は全体をリロード
          bs.reload();
      }
    });

    Logger.log('INFO', 'LiveReloadを設定しました');
  } catch (err) {
    Logger.log('ERROR', 'LiveReloadの設定中にエラーが発生しました:', err);
    throw err;
  }
}
