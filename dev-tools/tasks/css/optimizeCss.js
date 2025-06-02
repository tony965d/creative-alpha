import fs from 'fs/promises';
import path from 'path';
import postcss from 'postcss';
import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';
import sortMediaQueries from 'postcss-sort-media-queries';
import discardDuplicates from 'postcss-discard-duplicates';
import normalizeCharset from 'postcss-normalize-charset';
import { format, resolveConfig, resolveConfigFile } from 'prettier';
import Logger from '../../utils/Logger.js';
import { config } from '../../config.js';

const currentConfig = config.get();

/**
 * CSSファイルを最適化する
 * - Autoprefixer: .browserslistrcに基づいてベンダープレフィックスを追加
 * - メディアクエリの整理
 * - 重複の削除
 * - 文字エンコーディングの正規化
 * - 圧縮（設定で有効な場合）
 * - Prettierでフォーマット（シングルクォート、インデント等）
 *
 * @param {string} srcPath - 最適化対象のCSSファイルパス
 * @param {string} distPath - 出力先のCSSファイルパス
 * @throws {Error} 最適化エラーや書き込みエラー時
 */
export async function optimizeCss(srcPath, distPath) {
  try {
    Logger.log('DEBUG', `CSSの最適化を開始: ${srcPath}`);
    let css = await fs.readFile(srcPath, 'utf-8');

    // PostCSSプラグインの設定
    const plugins = [
      autoprefixer(),
      sortMediaQueries(),
      discardDuplicates(),
      normalizeCharset(),
    ];

    // 圧縮が有効な場合、cssnanoを追加
    if (currentConfig.options.css.minify) {
      plugins.push(
        cssnano({
          preset: [
            'default',
            {
              discardComments: { removeAll: true },
            },
          ],
        }),
      );
      Logger.log('DEBUG', '  CSSの圧縮処理を実行');
      Logger.log('DEBUG', '  - スペース、改行の削除');
      Logger.log('DEBUG', '  - コメントの削除');
      Logger.log('DEBUG', '  - 色コードの短縮');
    }

    Logger.log('DEBUG', 'PostCSSの処理を開始');
    // PostCSSによる処理
    const result = await postcss(plugins).process(css, {
      from: srcPath,
      to: distPath,
      map: currentConfig.options.css.sourceMap ? { inline: false } : false,
    });

    Logger.log(
      'DEBUG',
      '  - .browserslistrcの設定に基づいてベンダープレフィックスを追加',
    );
    Logger.log('DEBUG', '  - 同じメディアクエリをまとめて整理');
    Logger.log('DEBUG', '  - 完全に同じCSSルールが重複している場合に削除');
    Logger.log('DEBUG', '  - @charset宣言を正規化、ファイルの先頭に配置');

    Logger.log('DEBUG', 'PostCSSの処理が完了');

    // 圧縮が無効な場合のみPrettierでフォーマット
    if (!currentConfig.options.css.minify) {
      Logger.log('DEBUG', 'Prettier設定ファイル: .prettierrc.json');

      const prettierConfig = await resolveConfig(distPath);
      result.css = await format(result.css, {
        ...prettierConfig,
        parser: 'css',
        filepath: distPath,
      });
      Logger.log('DEBUG', 'Prettierでフォーマットを実行');
    }

    // 最適化結果の出力
    await fs.writeFile(distPath, result.css);
    Logger.log(
      'DEBUG',
      `CSSファイルを出力: ${path.relative(process.cwd(), distPath)}`,
    );

    if (result.map) {
      await fs.writeFile(`${distPath}.map`, result.map.toString());
      Logger.log(
        'DEBUG',
        `ソースマップを出力: ${path.relative(process.cwd(), distPath)}.map`,
      );
    }

    Logger.log(
      'INFO',
      `CSSを最適化しました: ${path.relative(process.cwd(), distPath)}`,
    );
  } catch (err) {
    Logger.log('ERROR', `CSSの最適化中にエラーが発生しました: ${srcPath}`, err);
    throw err;
  }
}
