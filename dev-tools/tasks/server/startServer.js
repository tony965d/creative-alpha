import browserSync from 'browser-sync';
import { config } from '../../config.js';
import Logger from '../../utils/Logger.js';
import { setupProxy } from './proxyServer.js';
import { setupLiveReload } from './livereload.js';

const currentConfig = config.get();
const bs = browserSync.create();

/**
 * 開発用サーバーを起動するモジュール
 * - ブラウザシンク設定
 * - プロキシまたはスタティックサーバーモード
 * - ファイル変更の監視と自動リロード
 */

/**
 * 開発サーバーを起動
 * @param {Object} options - サーバー設定オプション
 */
export async function startServer(options = {}) {
  try {
    const serverConfig = {
      ...currentConfig.server,
      files: currentConfig.watchFiles,
      open: true,
      notify: false,
      ghostMode: false,
    };

    // プロキシモードの場合
    if (currentConfig.mode === 'proxy') {
      serverConfig.proxy = currentConfig.proxy;
      await setupProxy(serverConfig);
    }

    // LiveReloadの設定
    setupLiveReload(bs);

    // サーバー起動
    bs.init(serverConfig, (err, bs) => {
      if (err) {
        Logger.log('ERROR', '開発サーバーの起動に失敗しました:', err);
        return;
      }
      Logger.log(
        'DEBUG',
        `開発サーバーを起動しました: ${bs.options.get('urls').get('local')}`,
      );
    });

    return bs;
  } catch (err) {
    Logger.log('ERROR', '開発サーバーの設定中にエラーが発生しました:', err);
    throw err;
  }
}
