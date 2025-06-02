import fs from 'fs/promises';
import path from 'path';
import sharp from 'sharp';
import { glob } from 'glob';
import Logger from '../../utils/Logger.js';
import { optimize } from 'svgo';

// デフォルトのオプション設定を直接定義
const defaultOptions = {
  maxWidth: 1920,
  imageQuality: 80,
  convertToWebp: true,
};

/**
 * 画像最適化を行うモジュール
 * - JPG/PNG: 品質調整と最大幅制限
 * - WebP: 自動変換（設定で有効時）
 * - SVG/GIF: そのままコピー
 *
 * @param {string} srcDir - 入力元ディレクトリのパス
 * @param {string} distDir - 出力先ディレクトリのパス
 * @param {Object} [options] - 画像処理オプション
 * @param {string} [options.filePath] - 単一ファイル処理時のパス（省略時は全ファイル処理）
 * @param {Object} [options.imageOptions] - 画像処理の詳細オプション
 * @param {number} [options.imageOptions.maxWidth] - 画像の最大幅
 * @param {number} [options.imageOptions.imageQuality] - 画像の品質（0-100）
 * @param {boolean} [options.imageOptions.convertToWebp] - WebP形式への変換有無
 */
export async function optimizeImages(srcDir, distDir, options = {}) {
  try {
    // 単一ファイルの処理か全ファイルの処理かを判断
    const srcPaths = options.filePath
      ? [options.filePath]
      : await glob(
          path
            .join(srcDir, '**', '*.{jpg,jpeg,png,gif,svg,webp}')
            .replace(/\\/g, '/'),
          { nodir: true },
        );

    if (srcPaths.length === 0) {
      Logger.log(
        'WARN',
        `画像ファイルが見つかりません: ${options.filePath || srcDir}`,
      );
      return;
    }

    // 出力ディレクトリを作成
    await fs.mkdir(distDir, { recursive: true });

    // 画像処理オプションの設定（デフォルト値とマージ）
    const imageOptions = {
      ...defaultOptions,
      ...(options.imageOptions || {}),
    };

    // 各画像ファイルを処理
    for (const srcPath of srcPaths) {
      const relativePath = path.relative(srcDir, srcPath);
      const distPath = path.join(distDir, relativePath);

      // 出力先ディレクトリを作成
      await fs.mkdir(path.dirname(distPath), { recursive: true });

      // 画像を処理
      const image = sharp(srcPath);
      const metadata = await image.metadata();

      if (metadata.width > imageOptions.maxWidth) {
        image.resize(imageOptions.maxWidth);
      }

      // JPEGとPNGの処理
      if (['jpeg', 'jpg'].includes(metadata.format)) {
        await image
          .jpeg({ quality: imageOptions.imageQuality })
          .toFile(distPath);
        Logger.log('INFO', `JPEG画像を最適化しました: ${distPath}`);

        // WebP変換が有効な場合
        if (imageOptions.convertToWebp) {
          const webpPath = distPath.replace(/\.(jpg|jpeg)$/i, '.webp');
          await image
            .webp({ quality: imageOptions.imageQuality })
            .toFile(webpPath);
          Logger.log('INFO', `WebP画像を生成しました: ${webpPath}`);
        }
      }
      // PNGの処理（透過対応）
      else if (metadata.format === 'png') {
        await image
          .png({ quality: imageOptions.imageQuality })
          .toFile(distPath);
        Logger.log('INFO', `PNG画像を最適化しました: ${distPath}`);

        // WebP変換が有効な場合
        if (imageOptions.convertToWebp) {
          const webpPath = distPath.replace(/\.png$/i, '.webp');
          await image
            .webp({ quality: imageOptions.imageQuality })
            .toFile(webpPath);
          Logger.log('INFO', `WebP画像を生成しました: ${webpPath}`);
        }
      }
      // WebPの処理
      else if (metadata.format === 'webp') {
        // WebP画像も最適化して保存
        await image
          .webp({ quality: imageOptions.imageQuality })
          .toFile(distPath);
        Logger.log('INFO', `WebP画像を最適化しました: ${distPath}`);
      }
      // SVGの処理
      else if (metadata.format === 'svg') {
        // SVGを最適化して保存
        const svgContent = await fs.readFile(srcPath, 'utf8');
        const optimizedSvg = optimize(svgContent, {
          multipass: true,
          plugins: [
            {
              name: 'preset-default',
              params: {
                overrides: {
                  // 必要に応じて特定の最適化を無効化
                  removeViewBox: false,
                },
              },
            },
            'removeDimensions',
          ],
        });

        await fs.writeFile(distPath, optimizedSvg.data);
        Logger.log('INFO', `SVGファイルを最適化しました: ${distPath}`);
      }
      // GIFの処理
      else if (metadata.format === 'gif') {
        // GIFはそのままコピー
        await fs.copyFile(srcPath, distPath);
        Logger.log('INFO', `GIFファイルをコピーしました: ${distPath}`);
      }
    }
  } catch (err) {
    Logger.log('ERROR', '画像の処理中にエラーが発生しました:', err);
    throw err;
  }
}
