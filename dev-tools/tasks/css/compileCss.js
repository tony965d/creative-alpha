import fs from 'fs/promises';
import path from 'path';
import * as sass from 'sass';
import Logger from '../../utils/Logger.js';
import { config } from '../../config.js';

const currentConfig = config.get();

/**
 * SCSSファイルをCSSにコンパイルする
 * - sassを使用してSCSSをCSSに変換
 * - ソースマップの生成（設定で有効な場合）
 * - 圧縮オプション（設定で有効な場合）
 * - インポートパスの自動解決
 *
 * @param {string} srcPath - コンパイル対象のSCSSファイルパス
 * @param {string} distPath - 出力先のCSSファイルパス
 * @throws {Error} コンパイルエラーや書き込みエラー時
 */
export async function compileCss(srcPath, distPath) {
  try {
    // SCSSをCSSにコンパイル
    // - sourceMap: ソースマップの生成有無（開発時のデバッグ用）
    // - style: expanded（開発用）または compressed（本番用）
    // - loadPaths: @importや@useのパス解決用
    const result = await sass.compileAsync(srcPath, {
      sourceMap: currentConfig.options.css.sourceMap,
      style: currentConfig.options.css.minify ? 'compressed' : 'expanded',
      loadPaths: [path.dirname(srcPath)],
    });

    // 出力ディレクトリの作成
    // - recursive: true で親ディレクトリも自動作成
    await fs.mkdir(path.dirname(distPath), { recursive: true });

    // コンパイル結果の出力
    // - result.css: コンパイル済みのCSS文字列
    await fs.writeFile(distPath, result.css);

    // ソースマップの出力（設定で有効かつ生成された場合のみ）
    if (currentConfig.options.css.sourceMap && result.sourceMap) {
      // ソースマップ内のソースパスを修正
      if (result.sourceMap.sources) {
        // 相対パスを適切に設定
        result.sourceMap.sources = result.sourceMap.sources.map((source) => {
          // 絶対パスから相対パスへの変換を確実に
          return path.relative(path.dirname(distPath), source);
        });
      }

      // ソースマップコメントをCSSファイルに追加
      const sourceMapComment = `\n/*# sourceMappingURL=${path.basename(distPath)}.map */`;
      await fs.appendFile(distPath, sourceMapComment);

      // ソースマップファイルを書き込み
      await fs.writeFile(`${distPath}.map`, JSON.stringify(result.sourceMap));
      Logger.log('DEBUG', `ソースマップを生成: ${distPath}.map`);
    }

    Logger.log(
      'INFO',
      `SCSSをコンパイルしました: ${path.relative(process.cwd(), distPath)}`,
    );
  } catch (err) {
    Logger.log(
      'ERROR',
      `SCSSのコンパイル中にエラーが発生しました: ${srcPath}`,
      err,
    );
    throw err;
  }
}
