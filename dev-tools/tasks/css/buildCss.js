import { initScss } from './initScss.js';
import { compileCss } from './compileCss.js';
import { optimizeCss } from './optimizeCss.js';
import Logger from '../../utils/Logger.js';
import path from 'path';
import { glob } from 'glob';
import fs from 'fs/promises';

// デフォルトのオプション設定を直接定義
const defaultOptions = {
  sourceMap: true,
  minify: true,
};

export async function buildCss({ paths, options = {} } = {}) {
  try {
    Logger.log('INFO', 'SCSSのビルドを開始します...');

    if (!paths || !paths.src || !paths.dist) {
      throw new Error('paths.srcとpaths.distは必須パラメータです');
    }

    // オプションをデフォルト値とマージ
    const mergedOptions = { ...defaultOptions, ...options };

    await initScss(paths.src);

    const srcGlob = path
      .join(paths.src, '**', '[!_]*.scss')
      .replace(/\\/g, '/');
    const srcPaths = await glob(srcGlob, { nodir: true });

    for (const srcPath of srcPaths) {
      const relativePath = path.relative(paths.src, srcPath);
      const tmpPath = path.join(
        paths.dist,
        relativePath.replace('.scss', '.tmp.css'),
      );
      const distPath = path.join(
        paths.dist,
        relativePath.replace('.scss', '.css'),
      );

      await compileCss(srcPath, tmpPath, mergedOptions);
      await optimizeCss(tmpPath, distPath, mergedOptions);

      await fs.unlink(tmpPath).catch(() => {});
      await fs.unlink(`${tmpPath}.map`).catch(() => {});
    }

    Logger.log('SUCCESS', 'SCSSのビルドが完了しました');
  } catch (err) {
    Logger.log('ERROR', 'SCSSのビルド中にエラーが発生しました:', err);
    throw err;
  }
}
