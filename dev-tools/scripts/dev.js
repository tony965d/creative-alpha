import fs from 'fs/promises';
import Logger from '../utils/Logger.js';
import { config } from '../config.js';
import { buildImages } from '../tasks/images/buildImages.js';
import { buildJs } from '../tasks/js/buildJs.js';
import { buildCss } from '../tasks/css/buildCss.js';
import { watchImages } from '../tasks/images/watchImages.js';
import { watchJs } from '../tasks/js/watchJs.js';
import { watchCss } from '../tasks/css/watchCss.js';
import { startServer } from '../tasks/server/startServer.js';

async function dev() {
  try {
    Logger.log('INFO', '開発環境を起動します...');

    const conf = config.get();

    // distディレクトリのクリーンアップ
    Logger.log('INFO', 'クリーンアップを開始します...');
    const dirsToClean = [
      conf.paths.images.dist,
      conf.paths.js.dist,
      conf.paths.css.dist,
    ];

    for (const dir of dirsToClean) {
      await fs.rm(dir, { recursive: true, force: true });
      Logger.log('INFO', `ディレクトリを削除しました: ${dir}`);
    }
    Logger.log('SUCCESS', 'クリーンアップが完了しました');

    // 初期ビルド
    const tasks = [
      buildImages({
        paths: conf.paths.images,
        options: conf.options.images,
      }),
      buildJs({
        paths: conf.paths.js,
        options: conf.options.js,
      }),
      buildCss({
        paths: conf.paths.css,
        options: conf.options.css,
      }),
    ];

    await Promise.all(tasks);

    // 各監視タスクを直接開始
    try {
      Logger.log('DEBUG', '監視を開始します...');

      // SCSSの監視を開始
      await watchCss({
        paths: conf.paths.css,
        options: conf.options.css,
      });

      // JavaScriptの監視を開始
      await watchJs({
        paths: conf.paths.js,
        options: conf.options.js,
      });

      // 画像の監視を開始
      await watchImages({
        paths: conf.paths.images,
        options: conf.options.images,
      });

      // 開発サーバーの起動
      await startServer();

      Logger.log('SUCCESS', '全ての監視タスクが開始されました');
    } catch (err) {
      Logger.log('ERROR', '監視タスクの開始中にエラーが発生しました:', err);
      throw err;
    }
  } catch (err) {
    Logger.log('ERROR', '開発環境の起動中にエラーが発生しました:', err);
    process.exit(1);
  }
}

dev();
