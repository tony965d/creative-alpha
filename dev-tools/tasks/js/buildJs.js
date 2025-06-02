import { minifyJs } from './minifyJs.js';
import { copyJs } from './copyJs.js';
import { formatJs } from './formatJs.js';
import Logger from '../../utils/Logger.js';

// デフォルトオプションを定義
const DEFAULT_OPTIONS = {
  minify: false,
};

export async function buildJs({ paths, options = {} } = {}) {
  try {
    Logger.log('INFO', 'JavaScriptのビルドを開始します...');

    if (!paths) {
      throw new Error('paths は必須です');
    }

    // デフォルトオプションとユーザー指定オプションをマージ
    const mergedOptions = { ...DEFAULT_OPTIONS, ...options };

    if (mergedOptions.minify) {
      await minifyJs(paths.src, paths.dist);
    } else {
      await copyJs(paths.src, paths.dist);
      await formatJs(paths.dist);
    }

    Logger.log('SUCCESS', 'JavaScriptのビルドが完了しました');
  } catch (err) {
    Logger.log('ERROR', 'JavaScriptのビルド中にエラーが発生しました:', err);
    throw err;
  }
}
