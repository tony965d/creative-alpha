import { optimizeImages } from './optimizeImages.js';
import Logger from '../../utils/Logger.js';

export async function buildImages({ paths, options }) {
  const srcDir = paths.src;
  const distDir = paths.dist;

  try {
    Logger.log('INFO', '画像のビルドを開始します...');
    await optimizeImages(srcDir, distDir, options);
    Logger.log('SUCCESS', '画像のビルドが完了しました');
  } catch (err) {
    Logger.log('ERROR', '画像のビルド中にエラーが発生しました:', err);
    throw err;
  }
}
