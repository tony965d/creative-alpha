import fs from 'fs/promises';
import path from 'path';
import prettier from 'prettier';
import { glob } from 'glob';
import Logger from '../../utils/Logger.js';

/**
 * JavaScriptファイルのフォーマットを行うモジュール
 * - prettierを使用したコード整形
 * - 一貫したコーディングスタイルの適用
 * - インデント、クォート、セミコロンなどの統一
 */

/**
 * 単一のJavaScriptファイルをフォーマット
 * @param {string} filePath - フォーマットするファイルのパス
 */
async function formatSingleFile(filePath) {
  try {
    const content = await fs.readFile(filePath, 'utf8');

    // Prettierの設定ファイルを明示的に読み込む
    const configFile = await prettier.resolveConfigFile(filePath);
    Logger.log('DEBUG', `Prettier設定ファイル: .prettierrc.json`);

    const prettierConfig = await prettier.resolveConfig(filePath);
    const formatted = await prettier.format(content, {
      ...prettierConfig,
      filepath: filePath,
    });
    await fs.writeFile(filePath, formatted);

    Logger.log(
      'SUCCESS',
      `JavaScriptをフォーマットしました: ${path.relative(process.cwd(), filePath)}`,
    );
  } catch (err) {
    Logger.log(
      'ERROR',
      `JavaScriptのフォーマット中にエラーが発生しました: ${filePath}`,
      err,
    );
    throw err;
  }
}

/**
 * JavaScriptファイルをフォーマット
 * @param {string} dirOrFilePath - フォーマットするディレクトリまたはファイルのパス
 */
export async function formatJs(dirOrFilePath) {
  try {
    // ファイルの統計情報を取得
    const stats = await fs.stat(dirOrFilePath).catch(() => null);

    // パスがディレクトリの場合
    if (stats && stats.isDirectory()) {
      Logger.log(
        'DEBUG',
        `ディレクトリ内のJSファイルをフォーマットします: ${dirOrFilePath}`,
      );
      const files = await glob(
        path.join(dirOrFilePath, '**', '*.js').replace(/\\/g, '/'),
        {
          nodir: true,
        },
      );

      for (const file of files) {
        await formatSingleFile(file);
      }
    }
    // パスがファイルの場合
    else if (stats && stats.isFile()) {
      await formatSingleFile(dirOrFilePath);
    }
    // パスが存在しない場合
    else {
      Logger.log('WARN', `指定されたパスが見つかりません: ${dirOrFilePath}`);
    }
  } catch (err) {
    Logger.log(
      'ERROR',
      `JavaScriptのフォーマット処理中にエラーが発生しました`,
      err,
    );
    throw err;
  }
}

/**
 * JavaScriptファイルをフォーマット
 * @param {string} [filePath] - 単一ファイル処理時のパス（省略時は全ファイル処理）
 */
