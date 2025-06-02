/**
 * JavaScriptファイルの監視と自動ビルドを行うモジュール
 * - ファイルの追加・変更・削除を監視
 * - buildJsを使用したビルド処理
 */

import path from 'path';
import chokidar from 'chokidar';
import Logger from '../../utils/Logger.js';
import { copyJs } from './copyJs.js';
import { minifyJs } from './minifyJs.js';
import { formatJs } from './formatJs.js';
import fs from 'fs/promises';

/**
 * JavaScriptファイルの監視を開始
 *
 * @param {Object} config - 設定オブジェクト
 * @param {Object} config.paths - パス設定
 * @param {Object} config.options - ビルドオプション
 */
export function watchJs({ paths, options = {} } = {}) {
  try {
    if (!paths || !paths.src || !paths.dist) {
      throw new Error('paths.srcとpaths.distは必須パラメータです');
    }

    const srcDir = paths.src;
    const distDir = paths.dist;

    // ファイル監視を開始
    const watcher = chokidar.watch(path.join(srcDir, '**', '*.js'), {
      ignored: /(^|[\/\\])\../,
      persistent: true,
      ignoreInitial: true,
    });

    watcher
      .on('add', async (filePath) => {
        try {
          Logger.log(
            'INFO',
            `新しいJSファイルが追加されました: ${path.relative(process.cwd(), filePath)}`,
          );

          const relativePath = path.relative(srcDir, filePath);
          const distPath = path.join(distDir, relativePath);

          // 出力ディレクトリを作成
          await fs.mkdir(path.dirname(distPath), { recursive: true });

          // JSファイルを処理
          if (options.minify) {
            await minifyJs(srcDir, distDir, filePath);
          } else {
            await copyJs(srcDir, distDir, filePath);
            const relativePath = path.relative(srcDir, filePath);
            const distPath = path.join(distDir, relativePath);
            await formatJs(distPath);
          }
        } catch (err) {
          Logger.log(
            'ERROR',
            `JSファイルの追加処理中にエラーが発生しました: ${filePath}`,
            err,
          );
        }
      })
      .on('change', async (filePath) => {
        try {
          Logger.log(
            'INFO',
            `JSファイルが更新されました: ${path.relative(process.cwd(), filePath)}`,
          );

          // JSファイルを処理
          if (options.minify) {
            await minifyJs(srcDir, distDir, filePath);
          } else {
            await copyJs(srcDir, distDir, filePath);
            const relativePath = path.relative(srcDir, filePath);
            const distPath = path.join(distDir, relativePath);
            await formatJs(distPath);
          }
        } catch (err) {
          Logger.log(
            'ERROR',
            `JSファイルの更新処理中にエラーが発生しました: ${filePath}`,
            err,
          );
        }
      })
      .on('unlink', async (filePath) => {
        try {
          Logger.log(
            'INFO',
            `JSファイルが削除されました: ${path.relative(process.cwd(), filePath)}`,
          );

          const relativePath = path.relative(srcDir, filePath);
          const distPath = path.join(distDir, relativePath);

          // 対応する出力ファイルを削除
          await fs.unlink(distPath).catch(() => {});
        } catch (err) {
          Logger.log(
            'ERROR',
            `JSファイルの削除処理中にエラーが発生しました: ${filePath}`,
            err,
          );
        }
      });

    Logger.log('DEBUG', `JavaScriptファイルの監視を開始しました: ${srcDir}`);
    return watcher; // 監視オブジェクトを返して、必要に応じて停止できるようにする
  } catch (err) {
    Logger.log('ERROR', 'JavaScriptの監視中にエラーが発生しました:', err);
    throw err;
  }
}

// スクリプトが直接実行された場合に実行
if (import.meta.url === `file://${process.argv[1]}`) {
  watchJs();
}

export default watchJs;
