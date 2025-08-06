import { buildImages } from '../tasks/images/buildImages.js';
import { buildJs } from '../tasks/js/buildJs.js';
import { buildCss } from '../tasks/css/buildCss.js';
import { config } from '../config.js';
import Logger from '../utils/Logger.js';
import fs from 'fs/promises';

async function build() {
  try {
    Logger.log('INFO', '本番用ビルドを開始します...');
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

    Logger.log('SUCCESS', '本番用ビルドが完了しました');
  } catch (err) {
    Logger.log('ERROR', 'ビルド中にエラーが発生しました:', err);
    process.exit(1);
  }
}

build();
